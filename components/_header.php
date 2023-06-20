<div class="container">
    <div class="header-left">
        <h1><a href="index.php">ERERA</a></h1>
    </div>
    <div class="header-right">
        <label for="open">
            <span class="hidden-desktop"></span>
        </label>
        <input type="checkbox" name="" id="open">
        <nav>
            <a href="index.php">Нексус</a>
            <a href="knowledge base.php">База знаний</a>
            
           
            <a href="contacts.php">Контакты</a>
        </nav>
    </div>
</div>
<style>
    #open {
    display: none;
}
.dark-version input {
    display: none;
}

@media (max-width: 480px){
section {
    width: 100%;
    height: auto;
    background-image: -webkit-linear-gradient(#80059E 0%, #550486 100%);
    background-image: url(../img/wallpaperm_wallpaper.jpg);
    background-repeat: no-repeat;
    background-position: center center;
    
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}}
section {
    width: 100%;
    height: auto;
    background-image: -webkit-linear-gradient(#80059E 0%, #550486 100%);
    background-image: url(../../img/wallpaperm_wallpaper.jpg);
    background-repeat: no-repeat;
    
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}
@media (max-width: 480px){
.dark-version .toggledark:before {
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
}}
</style>
<section class="clearfix">
<div class="container">
    <div class="section-left">
        <h1 class="section-title">Великая энциклопедия по <br>League of Legends</h1>
        <h5 class="section-tagline">Подпишитесь на рассылку новых знаний</h5>
        <label class="dark-version">
            <input type="checkbox" onchange="toggledark()" id="toggledark">
            <span class="toggledark round"></span>
        </label>
    </div>
    <div class="section-right">
        <button class="learn-more" onclick="window.location.href = 'subscribe.php';">Подписаться</button>
    </div>
</div>
</section>