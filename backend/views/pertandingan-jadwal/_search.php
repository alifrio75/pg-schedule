<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PertandinganJadwalSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pertandingan-jadwal-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nomer') ?>

    <?= $form->field($model, 'kelas') ?>

    <?= $form->field($model, 'gender') ?>

    <?= $form->field($model, 'venue') ?>

    <?php // echo $form->field($model, 'wasit') ?>

    <?php // echo $form->field($model, 'tahap') ?>

    <?php // echo $form->field($model, 'home') ?>

    <?php // echo $form->field($model, 'home2') ?>

    <?php // echo $form->field($model, 'home_score') ?>

    <?php // echo $form->field($model, 'opponent') ?>

    <?php // echo $form->field($model, 'opponent2') ?>

    <?php // echo $form->field($model, 'opponent_score') ?>

    <?php // echo $form->field($model, 'date') ?>

    <?php // echo $form->field($model, 'time') ?>

    <?php // echo $form->field($model, 'hasil') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
