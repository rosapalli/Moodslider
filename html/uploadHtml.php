<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sky | Upload Content</title>
        <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
        <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script> 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
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
                        <span style="display:none" id="notification"></span>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
