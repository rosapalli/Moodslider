function play() {
    var slider1 = $('input#slider1').val();
    var slider2 = $('input#slider2').val();
    var slider3 = $('input#slider3').val();
    var slider4 = $('input#slider4').val();

    var dataArray = {
        'slider1': slider1,
        'slider2': slider2,
        'slider3': slider3,
        'slider4': slider4
    };

    $.ajax({
        type: "POST",
        url: "../php/moodslider.php",
        data: {u_data: JSON.stringify(dataArray)},
        success: function (response) {
            var programmes = JSON.parse(response);
            document.getElementById("programme1").innerHTML = programmes[0].name;
            document.getElementById("image1").src = programmes[0].image;

            document.getElementById("programme2").innerHTML = programmes[1].name;
            document.getElementById("image2").src = programmes[1].image;

            document.getElementById("programme3").innerHTML = programmes[2].name;
            document.getElementById("image3").src = programmes[2].image;

            document.getElementById("programme4").innerHTML = programmes[3].name;
            document.getElementById("image4").src = programmes[3].image;

            document.getElementById("programme5").innerHTML = programmes[4].name;
            document.getElementById("image5").src = programmes[4].image;
        }

    });
}

