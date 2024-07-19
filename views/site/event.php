<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'Events';
$this->params['breadcrumbs'][] = $this->title;


?>
<div>
    <!--Start slider-section-->
    <section class="slider-section" style="background-image:url(images/slider/2.jpg);">
        <div class="container">
            <div class="slider">
                <div class="text team-light">
                    <h2> <span>All</span> Events </h2>
                    <p><a href="index-2.html">Home</a> <i class="fa fa-angle-right" aria-hidden="true"></i> Events</p>
                </div>
            </div>
        </div>
    </section>
    <!--End slider-section-->
    <!--.event-seciton-->
    <section class="event-seciton event-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-title text-center">
                        <h2>upcoming <span>event</span></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor<br>
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
                    </div>
                    <div class="row">
                        <?php foreach ($events as $event) {
                            if ($event !== null && isset($event)) { ?>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <!-- Start single-item -->
                                    <div class="event-item">
                                        <div class="img-holder">
                                            <figure>
                                                <a href="index.php?r=site/singleevent&id=<?= $event->id; ?>">
                                                    <img src="<?= htmlspecialchars($event->image); ?>" alt="Images">
                                                </a>
                                            </figure>
                                            <div class="text">
                                                <h4>
                                                    <a href="index.php?r=site/singleevent&id=<?= $event->id; ?>">
                                                        October 5, 2017 <span>giving food</span>
                                                    </a>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End single-item -->
                                </div>
                        <?php }
                        } ?>
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
            </div>
        </div>
    </section>
    <!--/event-seciton-->
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