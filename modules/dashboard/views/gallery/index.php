<?php

use app\modules\dashboard\models\Gallery;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

$model = new Gallery();
$rows = $model->find()->all();

/** @var yii\web\View $this */
/** @var app\modules\dashboard\models\GallerySearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Galleries';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gallery-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Gallery', ['create'], ['class' => 'btn btn-success']) ?>
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

                            <th>Image</th>
                            <th>Action</th>

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
                                <td>
                                    <img alt="image" src="<?= $row['image'] ?>" class="rounded-circle" data-toggle="tooltip" title="" data-original-title="Wildan Ahdian" width="35">
                                </td>
                                <td>

                                    <a href="index.php?r=dashboard/gallery/view&id=<?= $row['id'] ?>" class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="" data-original-title="View"><i class="fas fa-eye"></i></a>

                                    <a href="index.php?r=dashboard/gallery/update&id=<?= $row['id'] ?>" class="btn btn-success btn-action mr-1" data-toggle="tooltip" title="" data-original-title="Edit"><i class="fas fa-pencil-alt"></i></a>

                                    <a href="index.php?r=dashboard/gallery/delete&id=<?= $row['id'] ?>" class="btn btn-danger btn-action" data-toggle="tooltip" title="" data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?" data-confirm-yes="alert('Deleted')" data-original-title="Delete"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php  } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


</div>