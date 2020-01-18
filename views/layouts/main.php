<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\models\tovari;
AppAsset::register($this);

?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>" style="overflow-x: hidden;">
    <head>
        <?php //$this->registerCsrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <link rel="shortcut icon" href="../web/images/favicon.ico" type="image/ico">
        <?php $this->head() ?>
    </head><!--/head-->
    <body>
    <?php $this->beginBody() ?>
    <div class="head">
        <div class="menu">
            <a href="/site/index"><img src="..\..\web\img\logo.gif" id="a"></a>
            <p id="d">Онлайн регистрация на соревнования</p>
            <div id="b">
                <a href="/site/index">Календарь</a>
                <a href="/site/result">Результаты</a>
                <a href="/site/rating">Рейтинги</a>
                <a href="/site/about">Контакты</a>
                <a href="/site/calculator">Калькулятор</a>
                <a href="https://vk.com/otimeru">Новости</a>
            </div>
            <a href="https://vk.com/otimeru"><img src="..\..\web\img\otime.gif" id="c"></a>
        </div>
    </div>

    <div class="content">
        <?= $content ?>
    </div>

    <footer class="foot">
        <p>На этом сайте используются файлы cookie. Продолжая просмотр сайта, вы разрешаете их использование.</p>
    </footer>
    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>