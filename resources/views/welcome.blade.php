<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sedeus Api</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<style>
    body {
        margin: 0;
        padding: 0;
    }

    .header {
        position: fixed;
        bottom: 0;
        left: 0;
        width: 100%;
        background-color: #f1f1f1;
        padding: 10px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        z-index: 7;
    }

    .logo img {
        max-width: 100%;
        height: auto;
    }

    .slider {
        display: flex;
        gap: 20px;
        align-items: center;
    }

    .slider p {
        margin: 0;
        overflow: hidden; 
        white-space: nowrap;
    }

    .slider .slide-animation {
        animation: slide 5s linear infinite; 
    }

    .icon {
        margin: 30px;
    }

    @keyframes slide {
        0% {
            transform: translateX(100%); 
        }
        100% {
            transform: translateX(-100%); 
        }
    }

</style>
<body>

<div id="veri-container"></div> 

<script>
    $(document).ready(function () {
        var categoryId = 4; 
    var apiUrl = "http://127.0.0.1:8000/test/" + categoryId;
    
        $.get(apiUrl, function (veriler) {
            console.log(veriler);
            $.each(veriler, function (index, veri) {
                var bannerHtml = '<div class="header">';
                bannerHtml += '<div class="logo">';
                bannerHtml += '<img  width="60" height="60" src="{{url('')}}/'+veri.images + '" alt="Logo">';
                bannerHtml += '</div>';
                bannerHtml += '<div class="slider">';
                bannerHtml += '<p class="slide-animation">' + veri.button_text + '</p>';
                bannerHtml += '<p class="slide-animation">' + veri.svg_code + '</p>';
                bannerHtml += '</div>';
                bannerHtml += '<div class="icon">';
                bannerHtml += '<i class="fa ' + veri.icon + '"></i>';
                bannerHtml += '</div>';
                bannerHtml += '</div>';

                $("#veri-container").append(bannerHtml);
            });
        });
    });
</script>

</body>
</html>
