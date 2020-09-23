<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>

    <!-- Favicons -->
    <link href="/../../theme/assets/img/favicon.png" rel="icon">
    <link href="/../theme/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<!-- ======= Mobile nav toggle button ======= -->
  <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="theme/assets/img/profile-img.jpg" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="<?= url::to(['site/index'])?>">Jordan type</a></h1>
        <div class="social-links mt-3 text-center">
          <a href="https://twitter.com/type_jordan" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="https://www.facebook.com/jordantypeizo.type/" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="https://www.instagram.com/jordan_type/" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="https://github.com/Jordan-type" class="google-plus"><i class="bx bxl-github"></i></a>
          <a href="https://www.linkedin.com/in/jordan-muthemba/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>

      <nav class="nav-menu">
        <ul>
          <li class="active"><a href="<?= url::to(['site/index'])?>"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="<?= url::to(['site/about'])?>"><i class="bx bx-user"></i> <span>About</span></a></li>
          <li><a href="#"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
          <li><a href="#"><i class="bx bx-book-content"></i> Portfolio</a></li>
          <li><a href="#"><i class="bx bx-server"></i> Services</a></li>
          <li><a href="<?= url::to(['site/contact'])?>"><i class="bx bx-envelope"></i> Contact</a></li>

        </ul>
      </nav><!-- .nav-menu -->
      <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

    </div>
  </header><!-- End Header -->

  <!-- Start Body  -->
    <?= Breadcrumbs::widget([
        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
    ]) ?>
    <?= Alert::widget() ?>
    <?= $content ?>
  <!-- End Body -->

  <!-- ======= Footer ======= -->
    <footer id="footer">
      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong><span>Jordan type</span></strong>
        </div>
        <div class="credits">
          Designed by <a href="http://thelightideas.co.ke">The light Ideas</a>
        </div>
      </div>
    </footer><!-- End  Footer -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
