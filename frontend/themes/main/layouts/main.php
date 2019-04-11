<?php
/* @var $this \yii\web\View */
/* @var $content string */
use yii\helpers\Html;
use frontend\assets\ThemeAsset;

ThemeAsset::register($this);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language; ?>">
  <head>
  	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  	<?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
  <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<header class="Header">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3 col-lg-4 col-md-offset-2 hidden-xs hidden-sm"><a href="/"><img class="img-responsive logo d-none" src="assets/img/logo.png" alt="CheckHotel Logo" style="width:100px"></a></div>
      <div class="col-md-7 col-lg-6 hidden-xs hidden-sm">
        <ul class="list-inline">
          <li><a class="item-menu" href="#home">INICIO</a></li>
          <li><a class="item-menu" href="#services">SERVICIOS</a></li>
          <li><a class="item-menu" href="#specials">PROMOCIONES</a></li>
          <li><a class="item-menu" href="#providers">PROVEEDORES</a></li>
          <li><a class="item-menu" href="#about">NOSOTROS</a></li>
        </ul>
      </div>
      <div class="col-xs-12 visible-xs visible-sm my-3"><img class="img-responsive logo-mobil" src="assets/img/logo.png" alt="CheckHotel Logo" style="width:100px"><a href="#" id="drop"><i class="fa fa-bars"></i></a>
        <ul id="drop-menu">
          <li><a class="item-menu" href="#home">INICIO</a></li>
          <li><a class="item-menu" href="#services">SERVICIOS</a></li>
          <li><a class="item-menu" href="#specials">PROMOCIONES</a></li>
          <li><a class="item-menu" href="#providers">PROVEEDORES</a></li>
          <li><a class="item-menu" href="#about">NOSOTROS</a></li>
        </ul>
      </div>
    </div>
  </div>
</header>

<?= $content ?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
