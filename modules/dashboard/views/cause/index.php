<?php

use app\modules\dashboard\models\Cause;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

$model = new Cause();
$rows = $model->find()->all();

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

    <div class="card">
        <div class="card-header">
            <h4>Causes</h4>
            <div class="card-header-action">
                <form>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search">
                        <div class="input-group-btn">
                            <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-striped" id="sortable-table">
                    <thead>
                        <tr>
                            <th class="text-center">
                                <i class="fas fa-th"></i>
                            </th>
                            <th>Title</th>
                            <th>Short description</th>
                            <th>Full description</th>
                            <th>Image</th>
                            <th>Goal</th>
                        </tr>
                    </thead>
                    <tbody class="ui-sortable">
                        <?php foreach ($rows as $row) { ?>
                            <tr>
                                <td>
                                    <div class="sort-handler ui-sortable-handle">
                                        <i class="fas fa-th"></i>
                                    </div>
                                </td>
                                <td><?= $row['title'] ?></td>
                                <td><?= substr($row->short_description, 0, 20); ?></td>
                                <td><?= substr($row['full_description'], 0, 50) ?></td>
                                <td>
                                    <img alt="image" src="<?= $row['image'] ?>" class="rounded-circle" data-toggle="tooltip" title="" data-original-title="Wildan Ahdian" width="35">
                                </td>
                                <td> Ksh. <?= number_format($row['goal']) ?></td>
                                <td>
                                    <a href="index.php?r=dashboard/cause/update&id=<?= $row['id'] ?>" class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="" data-original-title="Edit"><i class="fas fa-pencil-alt"></i></a>

                                    <a href="index.php?r=dashboard/cause/delete&id=<?= $row['id'] ?>" class="btn btn-danger btn-action" data-toggle="tooltip" title="" data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?" data-confirm-yes="alert('Deleted')" data-original-title="Delete"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php  } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


</div>