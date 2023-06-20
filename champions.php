<?php
  require 'vendor/db.php';
  // $id = $_GET['id'];
  // $sql = 'SELECT * FROM `champions` WHERE id=?';
  // $stmt = $link->prepare($sql); // создали команду
  // $stmt->bind_param("i", $id); // привязали переменную $id к запросу
  // $stmt->execute(); // выполнили запрос
  // $result = $stmt->get_result(); // получили результат
  // $row = $result->fetch_assoc(); // выбрали первую строку результата



//   $id = $_GET['id'] ?? $_GET['id'] ?? 0;
//   $cat_arr = mysqli_query($link, "SELECT * FROM `champions` WHERE `id` =" . $id);
//   $member = mysqli_fetch_assoc($cat_arr);
//   $next_id = $member['id'] - 1;
//   $prev_id = $member['id'] + 1;
//   $next = mysqli_query($link, "SELECT * FROM `champions` WHERE `id` =" . $next_id);
//       if ($next) {
//           $next = 1;
//       } else {
//           $next = 0;
//       };
//       $prev = mysqli_query($link, "SELECT * FROM `champions` WHERE `id` =" . $prev_id);
//       if ($prev) {
//           $prev = 1;
//       } else {
//           $prev = 0;
//       };
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/ssawq.css">
    <link rel="stylesheet" href="style/stels.css">
    <link rel="icon" type="image/gif" href="img/kdsal.png">
    <title>Чемпионы</title>
    <link rel="stylesheet" href="style/contact-style.css">

<link rel="stylesheet" href="style/dadsws.css">


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
   


    /* .buka{
      background-color: red;
      width: 250px;
      height: 250px;

      margin: 25px;
    } */

    .chmps{
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      width: 100%;
    }

        </style>

</head>
<body>
   
<script src="js/themes.js"></script>

<?php include('components/_header.php'); ?>

<div class="butre">
  <p class="qewsa">Здесь мы кратко расскажем о чемпионах представленных внизу</p>
  <p class="asd">Так же мы опишем сложность обучения игры на чемпионе по пяти бальной шкале</p>
  <p class="asd">Еще мы расскажем какие чемпионы лучше играются в командных боях и одиночной игре</p>
  
</div>



    <div class="chmps"><?php 
                $champions = mysqli_query($link, "SELECT * FROM `champions`");
                foreach ($champions as $champions_item){?>

<div class="campion column">

<a href="wqe/<?= $champions_item['description'] ?>">
    <img src="img/<?= $champions_item['img'] ?>" alt="Котёнок, превью.">
    <p><?=$champions_item['name']?></p>
</div>  <?php
                }
            ?>
    </div>



<?php include('components/_footer.php'); ?>

</body>
</html>