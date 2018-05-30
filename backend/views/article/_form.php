<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\widgets\FileInput;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Article */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="article-form">
<div class="card">
	<div class="card-header" data-background-color="orange">
		<h2 class="title"><?= Html::encode($this->title) ?></h2>
	</div>
	<div class="card-content">
	
	<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
	
	<div class="row">
	    <div class="col-lg-12 col-md-12 col-sm-6">
            <?= $form->field($model, 'user_id' , ['options' => ['class' => 'hidden text-center']])->textInput(['readonly' => true, 'value' => Yii::$app->user->identity->id, 'class'=>'hidden']) ?>
            
            <?= $form->field($model, 'last_update' , ['options' => ['class' => 'hidden']])->textInput(['readonly' => true, 'value' => date('Y-m-d H:i:s')]) ?>
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-6">
                <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <?= $form->field($model, 'status')->dropDownList(ArrayHelper::map(app\models\ArticleStatus::find()->select(['id','status'])->all(), 'id', 'status'))->label('Category'); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-6">
                <?= $form->field($model, 'intro')->widget(\yii\redactor\widgets\Redactor::className(), [
                    'clientOptions' => [
                        'minHeight' => '330px',
                        'buttonsHide' => ['image', 'link', 'file', 'formatting'],
                    ]
                ])?>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <?=$form->field($model, 'img1')->widget(FileInput::classname(), [ 'name'=> 'Upload Foto', 'options'=>[], 'pluginOptions'=> [ 'initialPreview'=>[$model->preview1], 'showUpload'=> false, 'showClose'=> false, 'showRemove'=> false, 'maxFileCount'=> 1,]])->label('Thumbnails'); ?>
            </div>
        </div>
            
            
            <?= $form->field($model, 'article')->widget(\yii\redactor\widgets\Redactor::className(), [
                'clientOptions' => [
                    'minHeight' => '350px',
                    'buttonsHide' => ['html', 'link'],
                    'plugins' => ['fontcolor','imagemanager']
                ]
            ])->label('Body')?>

	    </div>
	<div class="row">
	    <div class="col-lg-6 col-md-6 col-sm-6 pull-right">
            
        </div>
	</div>
	<div class="row">
	    <div class="col-lg-12 col-md-12 col-sm-6">
    	<div class="form-group">
            <?= Html::submitButton('Save', ['class' => 'btn btn-success pull-right']) ?>
        </div>
        </div>
	</div>
	</div>
	
    <?php ActiveForm::end(); ?>

	</div>
</div>
</div>
