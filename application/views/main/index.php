<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Наклеечки</title>
    <link rel="stylesheet" href="<?php base_url(); ?>css/bootstrap.css">
    <link rel="stylesheet" href="<?php base_url(); ?>css/bootstrap-theme.css">
    <link rel="stylesheet" href="<?php base_url(); ?>css/style.css">
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Навигация</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img src="http://dummyimage.com/158x90" alt=""></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right topmenu">
                <li><a href="#">Готовые</a></li>
                <li><a href="#">Создать свою</a></li>
            </ul>
        </div>
    </div>
</nav>

<section id="mainscreen">
    <div class="container">
        <div class="col-xs-8 col-xs-offset-2 b-mainscreen">
            <h1 class="title">Наклейки для айтишников</h1>
            <h2 class="subtitle">Выберите форму наклейки</h2>
            <div class="col-xs-6">
                <img src="./img/type1.png" alt="">
            </div>
            <div class="col-xs-6">
                <img src="./img/type2.png" alt="">
            </div>
        </div>

    </div>
</section>



<section id="photoline">
    <div id="spisok">
        <form method="POST" action="">
            <ul>
                <li>
                    <input type="checkbox" name="phototemplates[]" value="sticker1.jpg" id="photoline-item1">
                    <label for="photoline-item1"><img src="<?php echo base_url(); ?>img/stickers/sticker1.jpg"></label>
                </li>
                <li>
                    <input type="checkbox" name="phototemplates[]" value="sticker2.jpg" id="photoline-item2">
                    <label for="photoline-item2"><img src="<?php echo base_url(); ?>img/stickers/sticker2.jpg"></label>
                </li>
                <li>
                    <input type="checkbox" name="phototemplates[]" value="sticker3.jpg" id="photoline-item3">
                    <label for="photoline-item3"><img src="<?php echo base_url(); ?>img/stickers/sticker3.jpg"></label>
                </li>
                <li>
                    <input type="checkbox" name="phototemplates[]" value="sticker4.jpg" id="photoline-item4">
                    <label for="photoline-item4"><img src="<?php echo base_url(); ?>img/stickers/sticker4.jpg"></label>
                </li>
                <li id="end">
                    <div></div>
                </li>
            </ul>
            <input type="submit" name="download" value="Заказать">
        </form>
    </div>
</section>
<div id="footer">
    <p>&copy;2015 itstickers.ru</p>
</div>




<script src="<?php base_url(); ?>js/jquery-1.11.2.min.js"></script>
<script src="<?php base_url(); ?>js/bootstrap.min.js"></script>
<script src="<?php base_url(); ?>js/main.js"></script>
</body>
</html>