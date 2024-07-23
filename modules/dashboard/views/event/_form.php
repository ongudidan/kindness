<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
// on your view layout file

/** @var yii\web\View $this */
/** @var app\modules\dashboard\models\Event $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="event-form">

  <?php $form = ActiveForm::begin(); ?>

  <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

  <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

  <?= $form->field($model, 'file')->fileInput(['maxlength' => true]) ?>

  <?= $form->field($model, 'date')->textInput(['class' => 'form-control datepicker']) ?>



  <div class="form-group">
    <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
  </div>

  <?php ActiveForm::end(); ?>



</div>