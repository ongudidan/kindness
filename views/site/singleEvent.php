<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

// $id = $_GET['id'];
// $model = new Event();
// $row = $model->findOne(['id'=>$id]);

$this->title = 'Single event';
$this->params['breadcrumbs'][] = $this->title;
?>
<div>
    <!--Start slider-section-->
    <section class="slider-section" style="background-image:url(/images/slider/2.jpg);">
        <div class="container">
            <div class="slider">
                <div class="text team-light">
                    <h2>Event <span>details </span> </h2>
                    <p><a href="index-2.html">Home</a> <i class="fa fa-angle-right" aria-hidden="true"></i>Event Details</p>
                </div>
            </div>
        </div>
    </section>
    <!--End slider-section-->
    <!--.blog-seciton-->
    <section class="blog-seciton blog-pag">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <!-- Start single-item -->
                    <div class="blog-item clearfix">
                        <div class="img-holder">
                            <figure><img src="<?= $model->image ?>" alt="Images"></figure>
                        </div>
                        <div class="item-text event-item clearfix">
                            <div class="text">
                                <h4 class="we"><?= $model->title?></h4>
                                <h5><i class="fa fa-user" aria-hidden="true"></i>By <span>John Doe</span></h5>
                                <h5 class="road"><i class="fa fa-map-marker" aria-hidden="true"></i>By <span>Hazi mohshin road, khulna</span></h5>
                            </div>
                            <div class="tags clearfix">
                                <p><i class="fa fa-calendar-o" aria-hidden="true"></i>15th october- at 10:00 am <span>Event Orgaanizer: Rifa tosa</span></p>
                                <h5>Categories: <span>Gift, giving cloth</span></h5>
                                <h5 class="cost">Event Cost: <span>$20</span></h5>
                                <a href="#" class="btn-2">Book now</a>
                            </div>
                        </div>
                        <p><?= $model->description?></p>
                    </div>
                    <!-- End single-item -->

                </div>
            </div>
        </div>
    </section>
    <!--/blog-seciton-->
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