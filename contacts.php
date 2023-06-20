<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="css/style3.css"> -->
    <link rel="stylesheet" href="style/stels.css">
    <link rel="icon" type="image/gif" href="img/kdsal.png">
    <link rel="stylesheet" href="style/contact-style.css">
    <title>Контакты</title>    
    
    
    <style>
        .dark-version .toggledark:before {
            top: 63px;
            bottom: 0;
            width: 67px;
             left: 2px; 
            content: "";
            height: 64px;
            margin: auto 0;
            position: absolute;
            transition: 0.5s;
            background-image: url(img/wwwe.png);
            background-position: center;
            background-repeat: no-repeat;
            margin-top: 17px;
        }
        .dark-version input:checked + .toggledark {
            background: #000;
        }
        .dark-version input:checked + .toggledark:before {
            /* -webkit-transform: translateX(24px); */
            /* transform: translateX(24px); */
            background-image: url(img/www.png);
            background-repeat: no-repeat;
            background-position: center;
        }
    
            </style>
    
    
</head>
<body>
    <script src="js/themes.js"></script>   

    <?php include('components/_header.php'); ?>

    
<div class="vertical-menu">
    <a class="wsa">Наш адрес г.Омск </a>
    <a class="wsa">Электронная почта 
        erera@erera.ru</a>
    <a class="wsa">По всем вопросам и предложения пишите нам на почту</a>
</div>

<style>
    .wsdas{
     padding: 20px;
    }
</style>
<div class="wsdas">
<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Aaa237683e159c70b211b8dfcb361bb6c100b82cc394cede9592282cc6dd93af4&amp;width=100%&amp;height=300&amp;lang=ru_RU&amp;scroll=true"></script>
</div>

<?php include('components/_footer.php'); ?>


</body>
</html>