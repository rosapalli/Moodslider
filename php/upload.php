<?php

namespace uploadXML;
const InputKey = "myfile";
const allowedtypes = ["application/xml", "text/xml"];

function uploadXML() {

    if (empty($_FILES[InputKey])) {
        return "Please select a file.";
    }
    if ($_FILES[InputKey]["error"] > 0) {
        return "Unknown error. Please try again.";
    }
    if (!in_array($_FILES[InputKey]["type"], allowedtypes)) {
        return "Invalid file type. Please select an XML file.";
    }
    if ($_FILES[InputKey]['size'] > 10000) {
        return "Maximum file size exceeded.";
    }

    $tmpFile = $_FILES[InputKey]["tmp_name"];
    $dstFile = "../data/uploads/" . $_FILES[InputKey]["name"];
    if (!move_uploaded_file($tmpFile, $dstFile)) {
        return "Unknown error. Please try again.";
    }
    if (file_exists($tmpFile)) {
        unlink($tmpFile);
    }
     return "File uploaded successfully. Navigate to Moodslider to find programmes.";
}

$file = uploadXML();
echo $file;
?>

