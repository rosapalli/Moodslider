<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sky | Upload programmes</title>
        <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
        <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>  
        <script src="../js/upload.js" type="text/javascript"></script>
        <link href="https://www.sky.com/assets/masthead/images/favicon.png" sizes="32x32" rel="icon">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="../style/CSS.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php
        require_once("layout.html");
        ?>
        <div class="container">
            <div class="col-md-8 col-md-offset-2">
                <h3 id="title">Upload an XML file</h3>
                <form action=""
                      method="post"
                      enctype="multipart/form-data"
                      id="uploadXML">
                    <input type="hidden"
                           name="MAX_FILE_SIZE"
                           value="10000000" />
                    <div class="custom-file">
                        <input id="myfile" type="file" name="myfile" class="custom-file-input" />
                        <label id="label" class="custom-file-label">Choose file</label>
                        <input onmouseover="color(this)" onmouseout="colorUndo(this)" id="upload" type="submit" value="Upload"/>    
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
