<?php

/** @var yii\web\View $this */

use yii\helpers\Html;


$this->title = 'Single cause';
$this->params['breadcrumbs'][] = $this->title;
?>
<div>
    <!--Start slider-section-->
    <section class="slider-section" style="background-image:url(images/slider/2.jpg);">
        <div class="container">
            <div class="slider">
                <div class="text team-light">
                    <h2>our <span>recent</span>causes</h2>
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
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <!-- Start single-item -->
                    <div class="causes-item">
                        <div class="img-holder">
                            <figure><img src="<?= $model->image ?>" alt="Images"></figure>
                            <h5><i class="fa fa-user" aria-hidden="true"></i>By <span>Rif gonthon </span></h5>
                            <h5><i class="fa fa-map-marker" aria-hidden="true"></i>Cause in <span> Rohingya</span></h5>
                        </div>
                        <div class="text text-bg clearfix">
                            <h2><?= $model->title ?></h2>
                            <div class="pro-text">
                                <h4>$44,210</h4>
                                <p>Raised of <span>$99,541</span></p>
                            </div>
                            <!--.skills-name -->
                            <ul class="skills-name">
                                <li data-value="45">
                                    <div class="progress-wrap">
                                        <span class="progress-value-bar">
                                            <span class="value"></span>
                                        </span>

                                    </div>
                                </li>
                            </ul>
                            <!-- /.skills-name -->
                            <h6>DOnation Goal</h6>
                            <h3>382,542</h3>
                            <p>Pellentesque eu malsuada nisi has ellus eget et condmen tumg. Phas evitae posuere nisiat. Pellentesque eu malsuada nisi has ellus eget et condmen tumg. Phas evitae posuere nisiat. Pellentesque eu malsuada nisi has ellus eget et
                                condmen tumg. Phas evitae posuere nisiat. Pellentesque eu malsuada nisi has ellus eget et condmen tumg. Phas evitae posuere nisiat.</p>
                            <p>Pellentesque eu malsuada nisi has ellus eget et condmen tumg. Phas evitae posuere nisiat.Pellentesque eu malsuada nisi has ellus eget et condmen tumg. Phas evitae posuere nisiat.Pellentesque eu malsuada nisi has ellus eget et pendo
                                condmen tumg. Phas evitae posuere nisiat.Pellentesque eu malsuada nisi has ellus eget et condmen tumg. Phas evitae posuere nisiat.</p>
                            <a href="#" class="btn-3">Donate now</a>
                        </div>
                        <div class="item-left clearfix">
                            <div class="section-title">
                                <h2><span>Donator of </span>this cause</h2>
                                <p>Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan <br>
                                    ipsuy veli. Nam nec tellus a odio tincidunt auctor </p>
                            </div>
                            <h4>Join Our Campaign to become <span>Donator:</span></h4>
                            <div class="row">
                                <div class="col-md-4 col-sm-4">
                                    <div class="donator">
                                        <div class="img-holder">
                                            <figure><img src="images/blog/3.png" alt="Images"></figure>
                                        </div>
                                        <div class="donator-text">
                                            <h4>maria jim</h4>
                                            <a href="#">Donator</a>
                                            <h5>Donated : $10,000</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <div class="donator">
                                        <div class="img-holder">
                                            <figure><img src="images/blog/4.png" alt="Images"></figure>
                                        </div>
                                        <div class="donator-text">
                                            <h4>Sara leon</h4>
                                            <a href="#">Donator</a>
                                            <h5>Donated : $10,000</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <div class="donator">
                                        <div class="img-holder">
                                            <figure><img src="images/blog/3.png" alt="Images"></figure>
                                        </div>
                                        <div class="donator-text">
                                            <h4>maria jim</h4>
                                            <a href="#">Donator</a>
                                            <h5>Donated : $10,000</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End single-item -->
                </div>
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