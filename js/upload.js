$(document).ready(function () {
    $('input[type="file"]').change(function (e) {
        document.getElementById("label").innerHTML = e.target.files[0].name;
    });
    
    $("#uploadXML").on('submit', (function(e) {
        e.preventDefault();
        $.ajax({
        url: "../php/upload.php", 
                type: "POST", 
                data: new FormData(this), 
                contentType: false, 
                cache: false, 
                processData:false, 
                success: function(data)   {
                alert(data)
            }
        });
    }));
 });

function color(x) {
    x.style.background = "#5496c9";
}
function colorUndo(x) {
    x.style.background = "#0072c9";
    }