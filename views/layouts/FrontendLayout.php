<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\FrontendAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;
use yii\widgets\Menu;
use yii\helpers\Url;
use app\models\Contact;

FrontendAsset::register($this);

function contact($id)
{
    if (($model = Contact::findOne(['key' => $id])) !== null) {
        return $model->value;
    }
    return null;
}

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
    <?php $this->head() ?>
</head>

<body class="d-flex flex-column h-100">
    <?php $this->beginBody() ?>

    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader"></div>

        <!--Header top area-->
        <header class="main-header header-style-one">
            <section class="header-top">
                <div class="container">
                    <div class="header">
                        <div class="header-top-left">
                            <ul>
                                <li>
                                    <a href="https://facebook.com/<?= contact('FACEBOOK') ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/<?= contact('INSTAGRAM') ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="header-top-right">
                            <ul>
                                <li>
                                    <a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i>
                                        <?= contact('EMAIL') ?></a>
                                </li>
                                <li>
                                    <p>
                                        <i class="fa fa-phone" aria-hidden="true"></i><?= contact('PHONE') ?>
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!--/header_top_area-->

            <!--/Header Top-->
            <section class="mainmenu-area">
                <div class="container">
                    <div class="logo pull-left">
                        <a href="index.php"><img src="images/logo.png" alt="" /></a>
                    </div>
                    <nav class="main-menu pull-left">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="navbar-collapse collapse clearfix">

                            <?php
                            // Get the current URL
                            $currentUrl = Url::current();

                            echo Menu::widget([
                                'activeCssClass' => 'current',
                                'activateParents' => true,
                                'encodeLabels' => false,
                                'options' => ['class' => 'navigation clearfix'],
                                'items' => [
                                    [
                                        'label' => 'Home',
                                        'url' => ['site/index'],
                                        'options' => ['class' => 'dropdown'],
                                        'template' => "<a href='{url}'>{label}</a>",
                                        'active' => Url::to(['site/index']) == $currentUrl,
                                    ],
                                    [
                                        'label' => 'Gallery',
                                        'url' => ['site/gallery'],
                                        'template' => "<a href='{url}'>{label}</a>",
                                        'active' => Url::to(['site/gallery']) == $currentUrl,
                                    ],
                                    [
                                        'label' => 'Causes',
                                        'url' => ['site/cause'],
                                        'template' => "<a href='{url}'>{label}</a>",
                                        'active' => Url::to(['site/cause']) == $currentUrl,
                                    ],
                                    [
                                        'label' => 'Event',
                                        'url' => ['site/event'],
                                        'options' => ['class' => 'dropdown'],
                                        'template' => "<a href='{url}'>{label}</a>",
                                        'active' => Url::to(['site/event']) == $currentUrl,
                                    ],
                                    [
                                        'label' => 'About',
                                        'url' => ['site/about'],
                                        'options' => ['class' => 'dropdown'],
                                        'template' => "<a href='{url}'>{label}</a>",
                                        'active' => Url::to(['site/about']) == $currentUrl,
                                    ],
                                    [
                                        'label' => 'Contact',
                                        'url' => ['site/contact'],
                                        'template' => "<a href='{url}'>{label}</a>",
                                        'active' => Url::to(['site/contact']) == $currentUrl,
                                    ],
                                ],
                            ]);
                            ?>

                            <?php
                            // Get the current URL
                            $currentUrl = Url::current();

                            echo Menu::widget([
                                'activeCssClass' => 'current',
                                'activateParents' => true,
                                'encodeLabels' => false,
                                'options' => ['class' => 'mobile-menu clearfix'],
                                'items' => [
                                    [
                                        'label' => 'Home',
                                        'url' => ['site/index'],
                                        'options' => ['class' => 'dropdown'],
                                        'template' => "<a href='{url}'>{label}</a>",
                                        'active' => Url::to(['site/index']) == $currentUrl,
                                    ],
                                    [
                                        'label' => 'Gallery',
                                        'url' => ['site/gallery'],
                                        'template' => "<a href='{url}'>{label}</a>",
                                        'active' => Url::to(['site/gallery']) == $currentUrl,
                                    ],
                                    [
                                        'label' => 'Causes',
                                        'url' => ['site/cause'],
                                        'template' => "<a href='{url}'>{label}</a>",
                                        'active' => Url::to(['site/cause']) == $currentUrl,
                                    ],
                                    [
                                        'label' => 'Event',
                                        'url' => ['site/event'],
                                        'options' => ['class' => 'dropdown'],
                                        'template' => "<a href='{url}'>{label}</a>",
                                        'active' => Url::to(['site/event']) == $currentUrl,
                                    ],
                                    [
                                        'label' => 'About',
                                        'url' => ['site/about'],
                                        'options' => ['class' => 'dropdown'],
                                        'template' => "<a href='{url}'>{label}</a>",
                                        'active' => Url::to(['site/about']) == $currentUrl,
                                    ],
                                    [
                                        'label' => 'Contact',
                                        'url' => ['site/contact'],
                                        'template' => "<a href='{url}'>{label}</a>",
                                        'active' => Url::to(['site/contact']) == $currentUrl,
                                    ],
                                ],
                            ]);
                            ?>
                        </div>
                    </nav>
                    <div class="signup">
                        <ul>
                            <li>
                                <a href="index.php?r=site/login"><i class="fa fa-arrow-circle-down" aria-hidden="true"></i>login</a>
                            </li>
                            <li>
                                <a href="index.php?r=dashboard"><span></span><i class="fa fa-user" aria-hidden="true"></i>Dashboard</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
            <!--Main-Mane-->
            <section class="bounce-in-header">
                <div class="container">
                    <div class="logo pull-left">
                        <a href="index.php"><img src="images/logo.png" alt="" /></a>
                    </div>
                    <nav class="main-menu pull-left">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="navbar-collapse collapse clearfix">
                            <?php
                            // Get the current URL
                            $currentUrl = Url::current();

                            echo Menu::widget([
                                'activeCssClass' => 'current',
                                'activateParents' => true,
                                'encodeLabels' => false,
                                'options' => ['class' => 'navigation clearfix'],
                                'items' => [
                                    [
                                        'label' => 'Home',
                                        'url' => ['site/index'],
                                        'options' => ['class' => 'dropdown'],
                                        'template' => "<a href='{url}'>{label}</a>",
                                        'active' => Url::to(['site/index']) == $currentUrl,
                                    ],
                                    [
                                        'label' => 'Gallery',
                                        'url' => ['site/gallery'],
                                        'template' => "<a href='{url}'>{label}</a>",
                                        'active' => Url::to(['site/gallery']) == $currentUrl,
                                    ],
                                    [
                                        'label' => 'Causes',
                                        'url' => ['site/cause'],
                                        'template' => "<a href='{url}'>{label}</a>",
                                        'active' => Url::to(['site/cause']) == $currentUrl,
                                    ],
                                    [
                                        'label' => 'Event',
                                        'url' => ['site/event'],
                                        'options' => ['class' => 'dropdown'],
                                        'template' => "<a href='{url}'>{label}</a>",
                                        'active' => Url::to(['site/event']) == $currentUrl,
                                    ],
                                    [
                                        'label' => 'About',
                                        'url' => ['site/about'],
                                        'options' => ['class' => 'dropdown'],
                                        'template' => "<a href='{url}'>{label}</a>",
                                        'active' => Url::to(['site/about']) == $currentUrl,
                                    ],
                                    [
                                        'label' => 'Contact',
                                        'url' => ['site/contact'],
                                        'template' => "<a href='{url}'>{label}</a>",
                                        'active' => Url::to(['site/contact']) == $currentUrl,
                                    ],
                                ],
                            ]);
                            ?>
                            <ul class="mobile-menu clearfix">

                                <?php
                                // Get the current URL
                                $currentUrl = Url::current();

                                echo Menu::widget([
                                    'activeCssClass' => 'current',
                                    'activateParents' => true,
                                    'encodeLabels' => false,
                                    'options' => ['class' => 'mobile-menu clearfix'],
                                    'items' => [
                                        [
                                            'label' => 'Home',
                                            'url' => ['site/index'],
                                            'options' => ['class' => 'dropdown'],
                                            'template' => "<a href='{url}'>{label}</a>",
                                            'active' => Url::to(['site/index']) == $currentUrl,
                                        ],
                                        [
                                            'label' => 'Gallery',
                                            'url' => ['site/gallery'],
                                            'template' => "<a href='{url}'>{label}</a>",
                                            'active' => Url::to(['site/gallery']) == $currentUrl,
                                        ],
                                        [
                                            'label' => 'Causes',
                                            'url' => ['site/cause'],
                                            'template' => "<a href='{url}'>{label}</a>",
                                            'active' => Url::to(['site/cause']) == $currentUrl,
                                        ],
                                        [
                                            'label' => 'Event',
                                            'url' => ['site/event'],
                                            'options' => ['class' => 'dropdown'],
                                            'template' => "<a href='{url}'>{label}</a>",
                                            'active' => Url::to(['site/event']) == $currentUrl,
                                        ],
                                        [
                                            'label' => 'About',
                                            'url' => ['site/about'],
                                            'options' => ['class' => 'dropdown'],
                                            'template' => "<a href='{url}'>{label}</a>",
                                            'active' => Url::to(['site/about']) == $currentUrl,
                                        ],
                                        [
                                            'label' => 'Contact',
                                            'url' => ['site/contact'],
                                            'template' => "<a href='{url}'>{label}</a>",
                                            'active' => Url::to(['site/contact']) == $currentUrl,
                                        ],
                                    ],
                                ]);
                                ?>
                        </div>
                    </nav>
                    <div class="signup">
                        <ul>
                            <li>
                                <a href="#"><i class="fa fa-arrow-circle-down" aria-hidden="true"></i>login</a>
                            </li>
                            <li>
                                <a href="index.php?r=dashboard"><span></span><i class="fa fa-user" aria-hidden="true"></i>Dashboard</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
            <!--/Main-Menu-->
        </header>

        <main>
            <div>
                <?= $content ?>
            </div>
        </main>


    </div>

    <!--.footer-section-->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="footer-item">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="widget">
                            <h2>Information</h2>
                            <p>
                                Lorem ipsum dolor sit amet, consecttur adipiscing egestas
                                rhoncus Praesent Nunc pretium est placerat congue
                            </p>
                            <h5>
                                <i class="fa fa-map-marker" aria-hidden="true"></i><?= contact('LOCATION') ?>
                            </h5>
                            <h5>
                                <i class="fa fa-envelope-o" aria-hidden="true"></i><?= contact('EMAIL') ?>
                            </h5>
                            <h5>
                                <i class="fa fa-phone" visudoaria-hidden="true"></i><?= contact('PHONE') ?>
                            </h5>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="date-widget">
                            <h2>Latest Works</h2>
                            <h4>Food is Giving to them</h4>
                            <p>July 29, 2017 BY Donald</p>
                            <h4>Buy some candy for children</h4>
                            <p><span>February 15, 2017 BY</span> regaldev</p>
                            <h4>Build a building for shelter</h4>
                            <p>July 29, 2017 BY Donald</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="feed-widget">
                            <h2>twitter feed</h2>
                            <div class="footercarosule">
                                <div class="item">
                                    <p>
                                        Have managed to checkout successfully? We can help,just
                                        let us know if you need help via email (see our website)
                                    </p>
                                    <a href="#">www.themeforest.net</a>
                                    <div class="icon">
                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                        <h4>John Doe <span>regaldev</span></h4>
                                        <p>18 hours Ago</p>
                                    </div>
                                </div>
                                <div class="item">
                                    <p>
                                        Have managed to checkout successfully? We can help,just
                                        let us know if you need help via email (see our website)
                                    </p>
                                    <a href="#">www.themeforest.net</a>
                                    <div class="icon">
                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                        <h4>John Doe <span>regaldev</span></h4>
                                        <p>18 hours Ago</p>
                                    </div>
                                </div>
                                <div class="item">
                                    <p>
                                        Have managed to checkout successfully? We can help,just
                                        let us know if you need help via email (see our website)
                                    </p>
                                    <a href="#">www.themeforest.net</a>
                                    <div class="icon">
                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                        <h4>John Doe <span>regaldev</span></h4>
                                        <p>18 hours Ago</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="gallery-widget">
                            <h2>Instagram Photos</h2>
                            <ul class="gallery">
                                <li>
                                    <div class="img-holder">
                                        <img src="images/gallery/1.jpg" alt="Images" />
                                        <div class="overlay">
                                            <div class="box">
                                                <div class="content">
                                                    <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="img-holder">
                                        <img src="images/gallery/2.jpg" alt="Images" />
                                        <div class="overlay">
                                            <div class="box">
                                                <div class="content">
                                                    <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="img-holder">
                                        <img src="images/gallery/3.jpg" alt="Images" />
                                        <div class="overlay">
                                            <div class="box">
                                                <div class="content">
                                                    <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="img-holder">
                                        <img src="images/gallery/4.jpg" alt="Images" />
                                        <div class="overlay">
                                            <div class="box">
                                                <div class="content">
                                                    <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="img-holder">
                                        <img src="images/gallery/5.jpg" alt="Images" />
                                        <div class="overlay">
                                            <div class="box">
                                                <div class="content">
                                                    <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="img-holder">
                                        <img src="images/gallery/6.jpg" alt="Images" />
                                        <div class="overlay">
                                            <div class="box">
                                                <div class="content">
                                                    <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>
                <span><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></span>
            </p>
        </div>
    </footer>
    <!--/footer-section-->

    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>