<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/css/minfa.css">
    <link rel="stylesheet" href="style/stels.css">
    <link rel="icon" type="image/gif" href="img/kdsal.png">
    <title>Миньены и фарм</title> 
    
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
        
        
        body.dark {
            background: #000;
            
        }
        .dark .mission h1 {
    color: #fff;
    background: #337AB7; 
    border: 1px solid #000;
}    

.dark .ver {
    margin: 33px;
    padding: 20px;
    text-align: center;
    font-family: 'Halogen cyrillic';
    src: url(Halogen_0.ttf);
    color: #ffa8a8;
    border: 3px solid rgb(14 80 126 / 78%);
}

.dark .column img + p {
    font-size: 15px;
    text-align: center;
    color: #fafafa;
    padding-bottom: 10px;
    background-color: rgb(14 80 126 / 78%);
    border-radius: 5px;
    margin-top: 9px;
}

.dark .column img {
    margin-top: 51px;
    vertical-align: middle;
    width: 100%;
    box-shadow: inset 2px 2px 5px rgb(255 255 255 / 42%), 1px 1px 5px rgb(255 255 255 / 93%);
}
        



.dark .butre{
  color: #fafafa99;
  background-color: rgb(14 80 126 / 78%);
    margin: 34px;
    padding: 5px;
    min-height: 150px;
    box-shadow: inset 2px 2px 5px rgb(255 255 255 / 42%), 1px 1px 5px rgb(255 255 255 / 93%);
}

 
.dark .dsad {
    /* background-color: #000000eb; */
    min-height: 250px;
    word-wrap: break-word;
    margin-top: 16px;
    font-size: 18px;
    margin-bottom: 27px;
    color: #ffffffbf;
    background-color: rgb(0 0 0 / 87%);
}


@media (max-width: 979px){
.dark .section-title {
    font-size: 4em;
    margin-bottom: 0.2em;
}
}

@media (max-width: 767px){
.dark .section-title {
    font-size: 3em;
    margin-bottom: 0.2em;
}
}


@media (max-width: 480px){
.dark .section-title {
    font-size: 2.4em;
    margin-bottom: 0;
}
}

        @media (max-width: 480px)
        {
            .dark-version .toggledark:before{
                
            top: -21px;
            bottom: 0px;
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
            }
               
            </style>


</head>
<body>
   

   


<script src="js/themes.js"></script>

<?php include('components/_header.php'); ?>

<h1 class="ver">Миньены и фарм</h1>

<div class="row">
   
    <div class="column">
      
     
          <img src="img/загрузка.jpg" alt="Котёнок, превью.">
          <div class="dsad">
        
              <p class="weda">
                 Миньены это одна из самых главных сил в игре, спомощью их вы ломаете башни и продвигаетесь вперед.<br> В самом началене игры миньены иммеют большую силу они наносят больше урона чем чемпион, поэтому на низких уровнях лучше не драться в толпе миьенов. 
              </p>
               <p class="weda">
                Миньены делятся на типы:
               
               </p>
               <ul class="wedaw">
                <li>Миньен маг</li>
                <li>Миньен воин</li>
                <li>Осадный миньен</li>
                <li>Суперминьен</li>
              </ul>
              <p class="weda">
                Из интересных фактов, что за три волны миньенов вы получите больше золота чем за уничтожение вражеского чемпиона и по увеличению времени игры сумма будет только увеличиваться.
             </p>
          </div>
         
          </div>
  </div>



</a>

<style>
  .sda {
    width: 100%;
    background-color: #ffffff;
    color: #ffffff;
    text-align: center;
     margin-top: 10px; 
  
    margin-bottom: 68px;
}
.wdafs {
    height: 24px;
    background-color: #80059E;
    border-radius: 9px;
    margin: 10px;
    display: inline-block;
    width: 104px;
    font-size: 17px;
    padding: 3px;
}
.dark .sda {
    width: 100%;
    background-color: #000000;
    color: #ffffff;
    text-align: center;
     margin-top: 10px; 
  
    margin-bottom: 68px;
}
</style>
<div class="sda">
       
            
       <a class="wdafs" href="basics.php">Назад</a>
       
   </div>

<?php include('components/_footer.php'); ?>
</body>
</html>