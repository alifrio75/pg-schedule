<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\PertandinganWasit */

$this->title = 'Create Pertandingan Wasit';
$this->params['breadcrumbs'][] = ['label' => 'Pertandingan Wasits', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pertandingan-wasit-create">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
