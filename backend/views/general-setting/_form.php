<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\GeneralSetting */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="general-setting-form">
 <?php $form = ActiveForm::begin(); ?>
<div class="card">
	<div class="card-header" data-background-color="orange">
		<h2 class="title"><?= Html::encode($this->title) ?></h2>
	</div>
	<div class="card-content">
	    <div class="row">
	        <div class="col-lg-6 col-md-6 col-sm-12">
	            <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
	        </div>
	        <div class="col-lg-6 col-md-6 col-sm-12">
	            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
	        </div>
	    </div>
	</div>
</div>

   

    

    

    <?= $form->field($model, 'logo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'logoalt')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'slide')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'video')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'facebook')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'twitter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'youtube')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
