<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/sswa.css">
    <link rel="icon" type="image/gif" href="img/kdsal.png">
    <link rel="stylesheet" href="style/stels.css">
    <title>База знаний</title>    
    <link rel="stylesheet" href="style/asdsm.css">
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

<h1 class="ver">Выбирай одну из четырех позиций </h1>


<div class="row">
    <div class="column">
       
  <a href="items.php">
    <img src="img/da.png" alt="Котёнок, превью.">
    <p>Предметы</p>


      </div>
    <div class="column">
        
  <a href="basics.php">
    <img  src="img/бой123.jpg" alt="Котёнок, превью.">
    <p>Основы основ</p>
    </div>
    
    <div class="column">
  <a href="champions.php">
    <img src="img/чем1.jpg" alt="Котёнок, превью.">
    
    <p>Чемпионы</p>
    </div>
   
 
  </div>

</a>

<?php include('components/_footer.php'); ?>

</body>
</html>