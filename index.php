<?php
include 'vendor/db.php';
$champions = mysqli_query($link, "SELECT * FROM `champions`");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/stels.css">
    <link rel="stylesheet" href="style/mainw.css">
    <link rel="icon" type="image/gif" href="img/kdsal.png">
    <title>Великая энциклопедия по
      League of Legends</title>

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
<script src="js/themes.js"> </script>
<?php include('components/_header.php'); ?>


<h1 class="ver">Энциклопедия по League of Legends <br>представляет к вашему вниманию обширный поток знаний и опыта</h1>


<article class="conw">    
    
    <div class="butrew">
        <p class="asd">Добро пожаловать на наш сайт</p>
        <p class="asd">Здесь вы получите краткую и не очень информацию по League of Legends</p>
      <p class="asd">Узнаете ее историю как она развевалась все эти годы и к чему пришла в наше время</p>
      
      </div>
     
      <div class="sda">
       
            
        <a class="wdafs" href="knowledge base.php">Узнать ?</a>
        
    </div>

   
    <input type="radio" id="cage" name="image" checked>
    <input type="radio" id="cageAnim" name="image">
    <input type="radio" id="cageKitten" name="image">
    <div class="sdaw">
        <label class="selectBG" for="cage">Ясо</label>
        <label class="selectBG" for="cageAnim">Джин</label>
        <label class="selectBG" for="cageKitten">Акали</label>
    </div>
    <div class="sdawsw">Сыграй пока еще есть время</div>
        <input type="radio" id="a-up" name="a-vertical">
        <input type="radio" id="a-middle" name="a-vertical" checked>
        <input type="radio" id="a-down" name="a-vertical">
        <input type="radio" id="a-left" name="a-horazontal" checked>
        <input type="radio" id="a-center" name="a-horazontal">
        <input type="radio" id="a-right" name="a-horazontal">
        <input type="radio" id="b-up" name="b-vertical" checked>
        <input type="radio" id="b-middle" name="b-vertical">
        <input type="radio" id="b-down" name="b-vertical">
        <input type="radio" id="b-left" name="b-horazontal" checked>
        <input type="radio" id="b-center" name="b-horazontal">
        <input type="radio" id="b-right" name="b-horazontal">
        <input type="radio" id="c-up" name="c-vertical">
        <input type="radio" id="c-middle" name="c-vertical" checked>
        <input type="radio" id="c-down" name="c-vertical">
        <input type="radio" id="c-left" name="c-horazontal">
        <input type="radio" id="c-center" name="c-horazontal">
        <input type="radio" id="c-right" name="c-horazontal" checked>
        <input type="radio" id="d-up" name="d-vertical" checked>
        <input type="radio" id="d-middle" name="d-vertical">
        <input type="radio" id="d-down" name="d-vertical">
        <input type="radio" id="d-left" name="d-horazontal">
        <input type="radio" id="d-center" name="d-horazontal" checked>
        <input type="radio" id="d-right" name="d-horazontal">
        <input type="radio" id="e-up" name="e-vertical">
        <input type="radio" id="e-middle" name="e-vertical">
        <input type="radio" id="e-down" name="e-vertical" checked>
        <input type="radio" id="e-left" name="e-horazontal">
        <input type="radio" id="e-center" name="e-horazontal" checked>
        <input type="radio" id="e-right" name="e-horazontal">
        <input type="radio" id="f-up" name="f-vertical">
        <input type="radio" id="f-middle" name="f-vertical" checked>
        <input type="radio" id="f-down" name="f-vertical">
        <input type="radio" id="f-left" name="f-horazontal">
        <input type="radio" id="f-center" name="f-horazontal" checked>
        <input type="radio" id="f-right" name="f-horazontal">
        <input type="radio" id="g-up" name="g-vertical" checked>
        <input type="radio" id="g-middle" name="g-vertical">
        <input type="radio" id="g-down" name="g-vertical">
        <input type="radio" id="g-left" name="g-horazontal">
        <input type="radio" id="g-center" name="g-horazontal">
        <input type="radio" id="g-right" name="g-horazontal" checked>
        <input type="radio" id="h-up" name="h-vertical">
        <input type="radio" id="h-middle" name="h-vertical">
        <input type="radio" id="h-down" name="h-vertical" checked>
        <input type="radio" id="h-left" name="h-horazontal" checked>
        <input type="radio" id="h-center" name="h-horazontal">
        <input type="radio" id="h-right" name="h-horazontal">
    
                <div class="board">
                <div class="peice-a">
                    <label for="a-up"></label>
                    <label for="a-middle"></label>
                    <label for="a-down"></label>
                    <label for="a-left"></label>
                    <label for="a-center"></label>
                    <label for="a-right"></label>
                </div>
                <div class="peice-b">
                    <label for="b-up"></label>
                    <label for="b-middle"></label>
                    <label for="b-down"></label>
                    <label for="b-left"></label>
                    <label for="b-center"></label>
                    <label for="b-right"></label>
                </div>
                <div class="peice-c">
                    <label for="c-up"></label>
                    <label for="c-middle"></label>
                    <label for="c-down"></label>
                    <label for="c-left"></label>
                    <label for="c-center"></label>
                    <label for="c-right"></label>
                </div>
                <div class="peice-d">
                    <label for="d-up"></label>
                    <label for="d-middle"></label>
                    <label for="d-down"></label>
                    <label for="d-left"></label>
                    <label for="d-center"></label>
                    <label for="d-right"></label>
                </div>
                <div class="peice-e">
                    <label for="e-up"></label>
                    <label for="e-middle"></label>
                    <label for="e-down"></label>
                    <label for="e-left"></label>
                    <label for="e-center"></label>
                    <label for="e-right"></label>
                </div>
                <div class="peice-f">
                    <label for="f-up"></label>
                    <label for="f-middle"></label>
                    <label for="f-down"></label>
                    <label for="f-left"></label>
                    <label for="f-center"></label>
                    <label for="f-right"></label>
                </div>
                <div class="peice-g">
                    <label for="g-up"></label>
                    <label for="g-middle"></label>
                    <label for="g-down"></label>
                    <label for="g-left"></label>
                    <label for="g-center"></label>
                    <label for="g-right"></label>
                </div>
                <div class="peice-h">
                    <label for="h-up"></label>
                    <label for="h-middle"></label>
                    <label for="h-down"></label>
                    <label for="h-left"></label>
                    <label for="h-center"></label>
                    <label for="h-right"></label>
                </div>

                
                <div class="peice-a img"></div>
                <div class="peice-b img"></div>
                <div class="peice-c img"></div>
                <div class="peice-d img"></div>
                <div class="peice-e img"></div>
                <div class="peice-f img"></div>
                <div class="peice-g img"></div>
                <div class="peice-h img"></div>
                
                </div>
    <div class="winner">WINNER!</div>



    <script>
        document.addEventListener('DOMContentLoaded', function() {
    var parent = document.querySelector('.splitview'),
        topPanel = parent.querySelector('.top'),
        handle = parent.querySelector('.handle'),
        skewHack = 0,
        delta = 0;

    // If the parent has .skewed class, set the skewHack var.
    if (parent.className.indexOf('skewed') != -1) {
        skewHack = 1000;
    }

    parent.addEventListener('mousemove', function(event) {
        // Get the delta between the mouse position and center point.
        delta = (event.clientX - window.innerWidth / 2) * 0.5;

        // Move the handle.
        handle.style.left = event.clientX + delta + 'px';

        // Adjust the top panel width.
        topPanel.style.width = event.clientX + skewHack + delta + 'px';
    });
});

    </script>

</article>



<?php include('components/_footer.php'); ?>

</body>
</html>