<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">

<head>
    <title><?= Html::encode($this->title) ?></title>

    <!-- Css Styles -->
    <link rel="stylesheet" href=<?= Yii::getAlias('@web') ?> "/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href=<?= Yii::getAlias('@web') ?> "css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href=<?= Yii::getAlias('@web') ?> "css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href=<?= Yii::getAlias('@web') ?> "css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href=<?= Yii::getAlias('@web') ?> "css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href=<?= Yii::getAlias('@web') ?> "css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href=<?= Yii::getAlias('@web') ?> "css/style.css" type="text/css">
</head>

<?php $this->head() ?>
</head>

<body class="d-flex flex-column h-100" style="background-color:black;">
    <?php $this->beginBody() ?>

    <!-- Header Section Begin -->
    <header class="header-section" style="background-color:black;">
        <div class=" container">
        <div class="row">
            <div class="col-lg-2 col-md-2">
                <div class="logo">
                    <a href="#">
                        <img src="img/yii.jpg" alt="">
                    </a>
                </div>
            </div>
            <div class="col-lg-10 col-md-10">
                <div class="main-menu mobile-menu">
                    <ul>
                        <li><a href="<?= Yii::$app->homeUrl?>">Home<a/></li>
                        <li><a href="<?= Yii::$app->urlManager->createUrl(['/site/about'])?>">About<a/></li>
                        <li><a href="<?= Yii::$app->urlManager->createUrl(['/site/contact'])?>">Contact<a/></li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Hero Section Begin -->
    <section>
        <div class="container" >
            <div class="row">
                <div class="col-lg-5">
                    <div class="hs-text">
                        <h2 style="color:crimson">New Fashion</h2>
                        <br>
                    </div>
                </div>
            </div>
        </div>
        <a href="./index.html"><img src="img/hero-bg.jpg" alt=""><a>
    </section>
    <!-- Hero Section End -->


    <main id="main">
        <?= $content ?>
    </main>


    <!-- Footer Section Begin -->
    <section class="footer-section" style="background-color:black;">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-option">
                        <div class="fo-logo">
                            <a href="#">
                                <img src="img/yii.jpg" alt="">
                            </a>
                        </div>
                        <ul>
                            <li>Address: 60-49 Road 11378 New York</li>
                            <li>Phone: +65 11.188.888</li>
                            <li>Email: hello.colorlib@gmail.com</li>
                        </ul>
                        <div class="fo-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget fw-links">
                        <h5>Useful Links</h5>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Model</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Serivius</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h5>Join The Newsletter</h5>
                        <p>Get E-mail updates about our latest shop and special offers.</p>
                        <form action="#" class="news-form">
                            <input type="text" placeholder="Enter your mail">
                            <button type="submit">Subscribe</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h5>Instagram</h5>
                        <div class="insta-pic">
                            <img src="img/instagram/instagram-1.jpg" alt="">
                            <img src="img/instagram/instagram-2.jpg" alt="">
                            <img src="img/instagram/instagram-3.jpg" alt="">
                            <img src="img/instagram/instagram-4.jpg" alt="">
                            <img src="img/instagram/instagram-5.jpg" alt="">
                            <img src="img/instagram/instagram-6.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-text">
                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>
        </div>
    </section>
    <!-- Footer Section End -->

    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>