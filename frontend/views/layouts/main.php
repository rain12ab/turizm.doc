<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use frontend\assets\FaAsset;
use common\widgets\Alert;

AppAsset::register($this);
FaAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="">
<?php $this->beginBody() ?>

<div class="wrapper">
  <div class="sidebar" data-color="purple" data-background-color="white" data-image="<?= Url::home(true).'img/sidebar-1.jpg';?>">
    <div class="logo">
      <a href="<?= Yii::$app->homeUrl;?>" class="simple-text logo-normal">
        Turizm.Doc
      </a>
    </div>
    <div class="sidebar-wrapper">
        <?php 
        $menuItems = [
            ['label' => 'Bosh sahifa', 'url' => ['/site/index']],
        ];
        if (Yii::$app->user->identity->role == 1) {
            $menuItems[] = ['label' => 'Kirish xatlar', 'url' => ['/indoc/index']];
            $menuItems[] = ['label' => 'Chiqish'.'('.Yii::$app->user->identity->username.')', 'url' => ['/site/logout'], 'linkOptions' => ['data-method' => 'POST']];
        } else if (Yii::$app->user->identity->role == 2) {
            $menuItems[] = ['label' => 'Kirish xatlar', 'url' => ['/indoc/index']];
            $menuItems[] = ['label' => 'Javob xatlar', 'url' => ['/outdoc/index']];
            // $menuItems[] = ['label' => 'Chiqish xatlar', 'url' => ['/sentdoc/signup']];
            $menuItems[] = ['label' => 'Chiqish'.'('.Yii::$app->user->identity->username.')', 'url' => ['/site/logout'], 'linkOptions' => ['data-method' => 'POST']];
        }
            else if (Yii::$app->user->identity->role == 3) {
            $menuItems[] = ['label' => 'Kirish xatlar', 'url' => ['/indoc/index']];
            $menuItems[] = ['label' => 'Javob xatlar', 'url' => ['/outdoc/index']];
            // $menuItems[] = ['label' => 'Chiqish xatlar', 'url' => ['/sentdoc/signup']];
            $menuItems[] = ['label' => 'Chiqish'.'('.Yii::$app->user->identity->username.')', 'url' => ['/site/logout'], 'linkOptions' => ['data-method' => 'POST']];
        }
        echo \yii\bootstrap4\Nav::widget([
            'options' => ['class' => 'navbar-nav'],
            'items' => $menuItems,
        ]);?>
    </div>
  </div>
  <div class="main-panel">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
      <div class="container-fluid">
        <div class="navbar-wrapper">
          <?= \yii\bootstrap4\Breadcrumbs::widget([
              'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
          ]) ?>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="content">
      <div class="container-fluid">
        <?= $content;?>
      </div>
    </div>
    <footer class="footer">
      <div class="container-fluid">
        <div class="copyright float-left">
          &copy;
          <script>
            document.write(new Date().getFullYear())
          </script>, Turizm.Doc
        </div>
      </div>
    </footer>
  </div>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
