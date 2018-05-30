<?php


use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\date\DatePicker;
use kartik\widgets\TimePicker;
use kartik\depdrop\DepDrop;

use app\models\PertandinganKelas;
use app\models\PertandinganGender;
use app\models\PertandinganTahap;
use app\models\PertandinganNomer;
use app\models\PertandinganWasit;
use app\models\Venue;
use app\models\Atlet;

/* @var $this yii\web\View */
/* @var $model app\models\PertandinganJadwal */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pertandingan-jadwal-form">
    

    <?php $form = ActiveForm::begin(); ?>

<div class="card">
    <div class="card-header" data-background-color="orange">
		<h2 class="title"><?= Html::encode($this->title) ?></h2>
	</div>
	<div class="card-content">
	    <div class="row">
	        <div class="col-lg-4 col-md-4 col-sm-6">
	            <?= $form->field($model, 'gender')->dropDownList(ArrayHelper::map(PertandinganGender::find()->select(['id','gender'])->all(), 'id', 'gender')); ?>
	        </div>
	        <div class="col-lg-4 col-md-4 col-sm-6">
	            <?= $form->field($model, 'nomer')->dropDownList([ArrayHelper::map(PertandinganNomer::find()->select(['id','noper'])->all(), 'id', 'noper')], ['id'=>'selectNoper', 'onchange' => 'switchType()' , 'prompt'=>'']) ?>
	        </div>
	        <div class="col-lg-4 col-md-4 col-sm-6">
	            <?= $form->field($model, 'kelas')->dropDownList(ArrayHelper::map(PertandinganKelas::find()->select(['id','kelas'])->all(), 'id', 'kelas')); ?>
	        </div>
	    </div>
	    <div class="row">
	        <div class="col-lg-4 col-md-4 col-sm-6">
	            <?= $form->field($model, 'wasit')->dropDownList(ArrayHelper::map(PertandinganWasit::find()->select(['id','name'])->all(), 'id', 'name')); ?>
	        </div>
	        <div class="col-lg-4 col-md-4 col-sm-6">
	            <?= $form->field($model, 'venue')->dropDownList(ArrayHelper::map(Venue::find()->select(['id','name'])->all(), 'id', 'name')); ?>
	        </div>
	        <div class="col-lg-4 col-md-4 col-sm-6">
	            <?= $form->field($model, 'tahap')->dropDownList(ArrayHelper::map(PertandinganTahap::find()->select(['id','name'])->all(), 'id', 'name')); ?>
	        </div>
	    </div>
	    <hr />
	    <div class="row">
	        <div class="col-lg-6 col-md-6 col-sm-6">
	            <div class="card card-stats">
	                <div class="card-header" data-background-color="red" style="float: right !important;">
	                    <i class="material-icons">filter_1</i>
	                </div> <br />
	                <div class="card-content" style="text-align : left!important;">

                        <?= $form->field($model, 'home')->dropDownList([ArrayHelper::map(Atlet::find()->select(['id','name'])->all(), 'id', 'name')],['prompt'=>'']); ?>
                    <div id="home2" class="hidden">
                        <?= $form->field($model, 'home2')->dropDownList([ArrayHelper::map(Atlet::find()->select(['id','name'])->all(), 'id', 'name')],['prompt'=>'']); ?>
                    </div>

	                </div>
	            </div>
	        </div>
	        <div class="col-lg-6 col-md-6 col-sm-6">
	            <div class="card card-stats">
	                <div class="card-header" data-background-color="red">
	                    <i class="material-icons">filter_2</i>
	                </div> <br />
	                <div class="card-content">

                        <?= $form->field($model, 'opponent')->dropDownList([ArrayHelper::map(Atlet::find()->select(['id','name'])->all(), 'id', 'name')],['prompt'=>'']); ?>
                    <div id="op2" class="hidden">
                        <?= $form->field($model, 'opponent2')->dropDownList([ArrayHelper::map(Atlet::find()->select(['id','name'])->all(), 'id', 'name')],['prompt'=>'']); ?>
                    </div>

	                </div>
	            </div>
	        </div>
	    </div>
	    <hr />
	    <div class="row">
	        <div class="col-lg-4 col-md-4 col-sm-6">
	            <?= $form->field($model, 'date')->widget(DatePicker::classname(), ['options' => ['placeholder' => 'Jadwal ...'],'pluginOptions' => ['format' => 'yyyy-mm-dd', 'autoclose'=>true]]); ?>
	        </div>
	        <div class="col-lg-4 col-md-4 col-sm-6">
	            <?= $form->field($model, 'time')->widget(TimePicker::classname(), []); ?>
	        </div>
	        <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="form-group">
                    <?= Html::submitButton('Save', ['class' => 'btn btn-success btn-lg btn-block']) ?>
                </div>
                <?php ActiveForm::end(); ?>
	        </div>
	    </div>
    </div>
</div>

</div>


<script>
function switchType() {
    var h2 = document.getElementById("home2");
    var o2 = document.getElementById("op2");
    if (document.getElementById("selectNoper").value == "1"){
        h2.classList.add("hidden");
        op2.classList.add("hidden");
        console.log( "Single" );
    } else {
        h2.classList.remove("hidden");
        op2.classList.remove("hidden");
        console.log("Ganda");
    }
}
</script>