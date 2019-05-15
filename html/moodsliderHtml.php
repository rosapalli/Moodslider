<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sky | Moodslider</title>
        <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
        <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>     
        <link href="https://www.sky.com/assets/masthead/images/favicon.png" sizes="32x32" rel="icon">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="../style/CSS.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php
        require_once("layout.html");
        ?>
        <div>
            <form name="slider" id="slider" action="submit" method="get">
                <div class="slidecontainer">

                    <div class="row">
                        <div class="col-2">
                            <div class="block">
                                <p class="emotion">Agitated</p>
                            </div>
                        </div>
                        <div class="col-8">
                            <input onchange="play(this.value)" type="range" min="1" max="100" value="50" class="slider" id="slider1">
                        </div>
                        <div class='col-2'>
                            <p class="emotion">Calm</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2">
                            <div class="block">
                                <p class="emotion">Happy</p>
                            </div>
                        </div>
                        <div class="col-8">
                            <input onchange="play(this.value)" type="range" min="1" max="100" value="50" class="slider" id="slider2">
                        </div>
                        <div class='col-2'>
                            <p class="emotion">Sad</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2">
                            <div class="block">
                                <p class="emotion">Tired</p>
                            </div>
                        </div>
                        <div class="col-8">
                            <input onchange="play(this.value)" type="range" min="1" max="100" value="50" class="slider" id="slider3">
                        </div>
                        <div class='col-2'>
                            <p class="emotion">Wide Awake</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2">
                            <div class="block">
                                <p class="emotion">Scared</p>
                            </div>
                        </div>
                        <div class="col-8">
                            <input onchange="play(this.value)" type="range" min="1" max="100" value="50" class="slider" id="slider4">
                        </div>
                        <div class='col-2'>
                            <p class="emotion">Fearless</p>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="row" id="programmes">
            <div class="col-2dot4">
                <img style="width:200px" id="image1" src="../data/images/noContent.png" alt="">
                <h4 id="programme1">No Content</h4>

            </div>
            <div class="col-2dot4">
                <img style="width:200px" id="image2" src="../data/images/noContent.png" alt="">
                <h4 id="programme2">No Content</h4>
            </div>
            <div class="col-2dot4">
                <img style="width:200px" id="image3" src="../data/images/noContent.png" alt="">
                <h4 id="programme3">No Content</h4>
            </div>
            <div class="col-2dot4">
                <img style="width:200px" id="image4" src="../data/images/noContent.png" alt="">
                <h4 id="programme4">No Content</h4>
            </div>
            <div class="col-2dot4">
                <img style="width:200px" id="image5" src="../data/images/noContent.png" alt="">
                <h4 id="programme5">No Content</h4>
            </div>
        </div>
    </body>
</html>

