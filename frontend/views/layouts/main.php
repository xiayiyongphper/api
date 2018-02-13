<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => '乐来接口管理系统',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);


    if(isset($_COOKIE['host'])){
        $select = '/index/host?host='.$_COOKIE['host'];
    }else{
        $select = '';
    }

    $env = [
        '/index/host?host=172.16.10.201' => '172.16.10.201',
        '/index/host?host=172.16.10.203' => '172.16.10.203',
        '/index/host?host=172.16.10.226' => '172.16.10.226',
        '/index/host?host=121.201.109.95' => '121.201.109.95',
        '/index/host?host=127.0.0.1' => '127.0.0.1',
    ];

    echo Html::dropDownList('env', $select,
        $env,
        [
            'class' => 'dropdownlist',
            'style' => 'float:right;margin-top: 15px;',
            'onchange' => 'window.location=this.value',
        ]
    );

    NavBar::end();

    ?>

    <div class="container">

        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody()?>
</body>
</html>
<?php $this->endPage(); exit();?>
