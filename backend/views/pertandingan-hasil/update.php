<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PertandinganHasil */

$this->title = 'Update Pertandingan Hasil: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Pertandingan Hasils', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pertandingan-hasil-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
