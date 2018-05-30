<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\PertandinganJadwal */

$this->title = 'Create Pertandingan Jadwal';
$this->params['breadcrumbs'][] = ['label' => 'Pertandingan Jadwals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pertandingan-jadwal-create">
<!--
    <h1><?= Html::encode($this->title) ?></h1>
-->
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
