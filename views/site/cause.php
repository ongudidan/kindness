<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'Causes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div>
    <!--Start slider-section-->
    <section class="slider-section" style="background-image:url(images/slider/2.jpg);">
        <div class="container">
            <div class="slider">
                <div class="text team-light">
                    <h2>our <span>recent</span> causes</h2>
                    <p><a href="index-2.html">Home</a> <i class="fa fa-angle-right" aria-hidden="true"></i> Causes</p>
                </div>
            </div>
        </div>
    </section>
    <!--End slider-section-->
    <!--.welcome-seciton-->
    <section class="welcome-seciton page-causes">
        <div class="container">
            <div class="row">
                <?php foreach($causes as $cause){?>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <!-- Start single-item -->
                    <div class="welcome-item hvr-float-shadow">
                        <div class="img-holder">
                            <figure><a href="index.php?r=site/singlecause&id=<?= $cause['id']?>"><img class="img-fluid" width="400" height="250" src="<?= $cause['image']?>" alt="Images"></a></figure>
                            <!-- Start overlay -->
                            <div class="overlay">
                                <h4><a href="index.php?r=site/singlecause&id=<?= $cause['id']?>">Help to reach <span>food!</span></a></h4>
                            </div>
                            <!-- End overlay -->
                        </div>
                        <div class="text">
                            <div class="pro-text">
                                <h4>$44,210</h4>
                                <p>Raised of <span><?= $cause['goal']?></span></p>
                            </div>
                            <!--.progress-item -->
                            <div class="causes-progress">
                                <div class="progress-item">
                                    <div class="progress" data-value="35">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                            <div class="value-holder"><span class="value">35</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /progress-item -->
                            <p><?= substr($cause['short_description'],0,200)?></p>
                            <a href="#">Donate now</a>
                        </div>
                    </div>
                    <!-- End single-item -->
                </div>
                <?php  } ?>
            </div>
            <div class="page-list">
                <ul>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#" class="next">next</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!--/wellcome-seciton-->

    <!--.news-seciton-->
    <div class="news-seciton">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-6 col-xs-12">
                    <div class="news-text">
                        <h4>Newsletter Sign-up</h4>
                        <p>Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. </p>
                    </div>
                </div>
                <div class="col-md-7 col-sm-6 col-xs-12">
                    <div class="news-form">
                        <input type="text" name="lastname" placeholder="Full Name" value="">
                        <input type="email" name="email" placeholder="Email" value="">
                        <button type="submit" class="btn news-btn">send</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/news-seciton-->
</div>