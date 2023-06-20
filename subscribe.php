<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/ssawq.css">
    <link rel="stylesheet" href="style/stels.css">
    <title>Document</title>
    <link rel="stylesheet" href="style/contact-style.css">
<link rel="stylesheet" href="style/form.css">
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
    <script  src="js/themes.js"></script>   
    <?php include('components/_header.php'); ?>
<h1 class="ver">Отправив нам сообщение, ты будешь получать от нас письма  самыми последними обновлениями сайта</h1>
<div class="sdadafas">
<form enctype="multipart/form-data" method="post" id="feedback-form">
<label for="nameFF">Имя:</label>
<input type="text" name="nameFF" id="nameFF" required placeholder="например, Иван Иванович Иванов" x-autocompletetype="name" class="w100 border">
<label for="contactFF">Email:</label>
<input type="email" name="contactFF" id="contactFF" required placeholder="например, ivan@yandex.ru" x-autocompletetype="email" class="w100 border">
<label for="fileFF">Прикрепить файл:</label>
<input type="file" name="fileFF[]" multiple id="fileFF" class="w100"
style="
    display: none;
">
<label for="messageFF" style="
    display: none;
">Сообщение:</label>
<textarea name="messageFF" id="messageFF" required rows="5" placeholder="Детали заявки…" class="w100 border" ></textarea>
<br>
<input class="wsadaawx" value="Отправить" type="submit" id="submitFF">
</form>
</div>


    <script src="js/massage.js"></script>
    <?php include('components/_footer.php'); ?>
    


    <script>
document.getElementById('feedback-form').addEventListener('submit', function(evt){
  var http = new XMLHttpRequest(), f = this;
  evt.preventDefault();
  http.open("POST", "contacts.php", true);
  http.onreadystatechange = function() {
    if (http.readyState == 4 && http.status == 200) {
      alert(http.responseText);
      if (http.responseText.indexOf(f.nameFF.value) == 0) { // очистить поле сообщения, если в ответе первым словом будет имя отправителя
        f.messageFF.removeAttribute('value');
        f.messageFF.value='';
      }
    }
  }
  http.onerror = function() {
    alert('Извините, данные не были переданы');
  }
  http.send(new FormData(f));
}, false);
</script>
</body>
</html>



