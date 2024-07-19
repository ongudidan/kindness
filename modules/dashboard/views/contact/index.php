<?php

use app\modules\dashboard\models\Contact;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

$model = new Contact();
$rows = $model->find()->all();

/** @var yii\web\View $this */
/** @var app\modules\dashboard\models\ContactSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Contacts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contact-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Contact', ['create'], ['class' => 'btn btn-success']) ?>
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
                            <th>Key</th>

                            <th>Value</th>
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
                                <td><?= $row['key'] ?></td>
                                <td><?= $row['value'] ?></td>
                                <td>

                                    <a href="index.php?r=dashboard/contact/view&id=<?= $row['id'] ?>" class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="" data-original-title="View"><i class="fas fa-eye"></i></a>

                                    <a href="index.php?r=dashboard/contact/update&id=<?= $row['id'] ?>" class="btn btn-success btn-action mr-1" data-toggle="tooltip" title="" data-original-title="Edit"><i class="fas fa-pencil-alt"></i></a>

                                    <a href="index.php?r=dashboard/contact/delete&id=<?= $row['id'] ?>" class="btn btn-danger btn-action" data-toggle="tooltip" title="" data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?" data-confirm-yes="alert('Deleted')" data-original-title="Delete"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php  } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>



</div>
