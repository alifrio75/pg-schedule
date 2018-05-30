<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PertandinganWasit */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pertandingan-wasit-form">
<div class="card">
	<div class="card-header" data-background-color="orange">
		<h2 class="title"><?= Html::encode($this->title) ?></h2>
	</div>
	<div class="card-content">
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'country')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div></div>
</div>
