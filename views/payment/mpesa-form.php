<!-- views/payment/payment-form.php -->

<?php
use yii\helpers\Html;
?>

<div class="row">
    <div class="col-md-8 col-md-offset-2 col-sm-12">
        <div class="default-form-2 clearfix">
            <form id="contact-form" name="contact_form" class="default-form" action="<?= \yii\helpers\Url::to(['payment/index']) ?>" method="post">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <input type="text" name="form_name" placeholder="Full Name">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <input type="email" name="form_email" placeholder="Email Address">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="text" name="form_phone" placeholder="Phone">
                        </div>
                        <div class="form-group">
                            <input type="text" name="amount" placeholder="Amount">
                        </div>
                        <button class="btn btn-1" type="submit" data-loading-text="Please wait...">Donate</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
