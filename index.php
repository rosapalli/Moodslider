<html>
    <head>
        <title>Sky | Welcome to Moodslider</title>
        <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
        <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>     
        <link href="https://www.sky.com/assets/masthead/images/favicon.png" sizes="32x32" rel="icon">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="style/CSS.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <header>
            <div class="row" id="index">
                <!-- Logo -->
                <div class="col-2">
                    <a href="#"><img id="logo" src="style\sky-logo.png" alt="" width="100" class="img-responsive"></a>
                </div>
                <!--Logo -->
                <div class="col-10" >
                    <h2 id="landingTitle" onclick="location.href='html/moodsliderHtml.php'">How are you feeling today?</h2>
                </div>
            </div>
        </header>
        <div id="landing">
            <h1 id="welcome"> Welcome to Moodslider</h1>
            <button onmouseover="color(this)" onmouseout="colorUndo(this)" onclick="location.href='html/moodsliderHtml.php'">Get started ></button>
        </div>
        <script>
            function color(x) {
            x.style.background = "#5496c9";
            }
            function colorUndo(x) {
                x.style.background = "#0072c9";
            }
        </script>
    </body>
</html>
