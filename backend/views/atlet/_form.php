<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use kartik\file\FileInput;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Atlet */
/* @var $form yii\widgets\ActiveForm */

use app\models\Countries;
?>

<div class="atlet-form">
<div class="card">
	<div class="card-header" data-background-color="orange">
		<h2 class="title"><?= Html::encode($this->title) ?></h2>
	</div>
	<div class="card-content">
    <?php $form = ActiveForm::begin([
    'options' => ['enctype' => 'multipart/form-data']
    ]); ?>
        <div class="row">
            <div class="col-lg-8 col-md-8">
                <div class="row">
                    <div class="col-lg-6" >
                        <?= $form->field($model, 'name')->textInput() ?>
                    </div>
                    <div class="col-lg-4">
                        <?= $form->field($model, 'gender')->dropDownList([ 'MAN' => 'MAN', 'WOMAN' => 'WOMAN', ], ['prompt' => '']) ?>
                    </div>
                    <div class="col-lg-2">
                        <?= $form->field($model, 'umur')->textInput() ?>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-lg-6">
                        <?= $form->field($model, 'birthday')->widget(DatePicker::classname(), ['options' => ['placeholder' => 'Birthday ...'],'pluginOptions' => ['format' => 'yyyy-mm-dd','autoclose'=>true]]); ?>
                    </div>
                    <div class="col-lg-6">
                        <?= $form->field($model, 'country')->dropDownList(ArrayHelper::map(Countries::find()->select(['id','country_name'])->all(), 'id', 'country_name')); ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                 <?=$form->field($model, 'avatar')->widget(FileInput::classname(), [ 'name'=> 'Upload Foto', 'options'=>[], 'pluginOptions'=> [ 'initialPreview'=>[$model->preview1], 'showUpload'=> false, 'showClose'=> false, 'showRemove'=> false, 'maxFileCount'=> 1,]])->label('Thumbnails'); ?>
            </div>
        </div>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>
    <?php ActiveForm::end(); ?>
	</div>
</div>

</div>
