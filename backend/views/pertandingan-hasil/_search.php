<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PertandinganHasilSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pertandingan-hasil-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'jadwal') ?>

    <?= $form->field($model, 'games') ?>

    <?= $form->field($model, 'home_point') ?>

    <?= $form->field($model, 'home_lead') ?>

    <?php // echo $form->field($model, 'home_servewin') ?>

    <?php // echo $form->field($model, 'home_servelost') ?>

    <?php // echo $form->field($model, 'home_cons') ?>

    <?php // echo $form->field($model, 'home_overcome') ?>

    <?php // echo $form->field($model, 'opp_point') ?>

    <?php // echo $form->field($model, 'opp_lead') ?>

    <?php // echo $form->field($model, 'opp_servewin') ?>

    <?php // echo $form->field($model, 'opp_servelost') ?>

    <?php // echo $form->field($model, 'opp_cons') ?>

    <?php // echo $form->field($model, 'opp_overcome') ?>

    <?php // echo $form->field($model, 'game_duration') ?>

    <?php // echo $form->field($model, 'last_update') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
