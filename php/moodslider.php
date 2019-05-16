<?php

function setUserMood($slider1, $slider2, $slider3, $slider4) { 
    $userMood = [];

    if ($slider1 < 35) {
        $userMood[0] = "Agitated";
    } else if ($slider1 > 65) {
        $userMood[0] = "Calm";
    } else {
        $userMood[0] = "";
    }
    
    if ($slider2 < 35) {
        $userMood[1] = "Happy";
    } else if ($slider2 > 65) {
        $userMood[1] = "Sad";
    } else {
        $userMood[1] = "";
    }
    
    if ($slider3 < 35) {
        $userMood[2] = "Tired";
    } else if ($slider3 > 65) {
        $userMood[2] = "Wide Awake";
    } else {
        $userMood[2] = "";
    }
    
    if ($slider4 < 35) {
        $userMood[3] = "Scared";
    } else if ($slider4 > 65) {
        $userMood[3] = "Fearless";
    } else {
        $userMood[3] = "";
    }
    return $userMood;
}

function selectProgrammes($xmlFile, $userMood) {  
    foreach ($xmlFile->programme as $programmes) {
        foreach ($programmes->children() as $programme) {
            if (in_array($programme->mood, $userMood)) {
                $list[] = $programme;
            }
        }
    }
    return $list;
}

$data = filter_input(INPUT_POST, 'u_data');
$sliders = json_decode($data, true);
$slider1 = $sliders["slider1"];
$slider2 = $sliders["slider2"];
$slider3 = $sliders["slider3"];
$slider4 = $sliders["slider4"];

$userMood = setUserMood($slider1, $slider2, $slider3, $slider4);
$xmlFile = simplexml_load_file('../data/uploads/programmesXML.xml');

$moodslider = selectProgrammes($xmlFile, $userMood);

echo json_encode($moodslider, JSON_FORCE_OBJECT);


