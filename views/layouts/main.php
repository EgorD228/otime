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
    <?php
    if (class_exists('yii\debug\Module')) {
        $this->off(\yii\web\View::EVENT_END_BODY, [\yii\debug\Module::getInstance(), 'renderToolbar']);
    } ?>
        <div class="header-bottom"><!--header-bottom-->
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="mainmenu pull-left">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                            <li><a href="../site/index" class="active">Новости</a></li>

                            <li><a href="../site/bookadds">Загрузка новости</a></li>

                        </ul>
                    </div>
                </div>
                    <form action="/site/index">
                        <div class="search1">
                            <div class="search_box">
                                <input type='text' id='a' name='search' placeholder='Поиск'>
                            </div>
                        <input type='submit' class='btnsub btn btn-primary'  type="button" value='Поиск' id='b'>
                    </div>
                </form>
            </div>
        </div>
    </div><!--/header-bottom-->
    </header><!--/header-->


    <?= $content ?>


    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>