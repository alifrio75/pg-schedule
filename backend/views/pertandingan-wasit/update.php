<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PertandinganWasit */

$this->title = 'Update Pertandingan Wasit: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Pertandingan Wasits', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pertandingan-wasit-update">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
