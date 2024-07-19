<?php

use app\modules\dashboard\models\Cause;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\modules\dashboard\models\CauseSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Causes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cause-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Cause', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'short_description:ntext',
            'full_description:ntext',
            'goal',
            //'image',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Cause $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
