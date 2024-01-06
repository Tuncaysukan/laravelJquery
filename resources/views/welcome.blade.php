<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sticky Menü</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body>

<div id="veri-container"></div> 

<script>
    $(document).ready(function () {
        var categoryId = 2; 
        var apiUrl = "http://127.0.0.1:8000/test/" + categoryId;

        $.get(apiUrl, function (veriler) {
            console.log(veriler);
            $.each(veriler, function (index, veri) {
                var header = $('<div class="header"></div>');

                var logo = $('<div class="logo"></div>');
                var logoImg = $('<img>').attr({
                    'width': '60',
                    'height': '60',
                    'src': '{{  asset('storage') }}'+'/'+ veri.images ,
                    'alt': 'Logo'
                });
                logo.append(logoImg);

                var slider = $('<div class="slider"></div>');
                var buttonText = $('<p></p>').text(veri.button_text);
                //var svgCode = $('<p></p>').text(veri.svg_code);
                slider.append(buttonText);

                var icon = $('<div class="icon"></div>');
                var iconElement = $('<i>').addClass('fa ' + veri.icon);
                icon.append(iconElement);

                header.append(logo, slider, icon);

                $("body").append(header);

                header.css({
                    'position': 'fixed',
                    'bottom': '0',
                    'left': '0',
                    'width': '100%',
                    'background-color': '#f1f1f1',
                    'padding': '0',
                    'display': 'flex',
                    'justify-content': 'space-between',
                    'align-items': 'center',
                    'z-index': '7',
                    'height': '8%'
                });

                logo.find('img').css({
                    'max-width': '100%',
                    'height': 'auto'
                });

                slider.css({
                    'display': 'flex',
                    'gap': '20px',
                    'align-items': 'center'
                });

                slider.find('p').css({
                    'margin': '0',
                    'overflow': 'hidden',
                    'white-space': 'nowrap',
                    'animation': 'slide 5s linear infinite'
                });
            });
        });
    });
</script>

<style>
    body {
        margin: 0;
        padding: 0;
    }

    @keyframes slide {
        0% {
            transform: translateX(100%);
        }
        100% {
            transform: translateX(-100%);
        }
    }

    .slide-animation {
        animation: slide 5s linear infinite;
    }
</style>

</body>
</html>
