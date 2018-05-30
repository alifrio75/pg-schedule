<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use kartik\widgets\TimePicker;

use app\models\PertandinganJadwal;
use app\models\Atlet;

/* @var $this yii\web\View */
/* @var $model app\models\PertandinganHasil */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="pertandingan-hasil-form">
<?php 
$jadwal = PertandinganJadwal::find()->where(['id' =>  Yii::$app->getRequest()->getQueryParam('id')])->one();
$home = Atlet::find()->where(['id' => $jadwal['home']])->one();
$op = Atlet::find()->where(['id' => $jadwal['opponent']])->one();
$label = $home['name'] . ' VS ' .  $op['name'];
?>



<!--START STATISTIC-->
<div class="card card-nav-tabs">
	<div class="card-header" data-background-color="purple">
		<div class="nav-tabs-navigation">
			<div class="nav-tabs-wrapper">
				<span class="nav-tabs-title">Match Results Detail:</span>
				<ul class="nav nav-tabs" data-tabs="tabs">
					<li class="active">
						<a href="#game1" data-toggle="tab">
							<i class="material-icons">filter_1</i>
							Game 1
						<div class="ripple-container"></div></a>
					</li>
					<li class="">
						<a href="#game2" data-toggle="tab">
							<i class="material-icons">filter_2</i>
							Game 2
						<div class="ripple-container"></div></a>
					</li>
					<li class="">
						<a href="#game3" data-toggle="tab">
							<i class="material-icons">filter_3</i>
							Game 3
						<div class="ripple-container"></div></a>
					</li>
					<li class="">
						<a href="#game4" data-toggle="tab">
							<i class="material-icons">filter_4</i>
							Game 4
						<div class="ripple-container"></div></a>
					</li>
					<li class="">
						<a href="#game5" data-toggle="tab">
							<i class="material-icons">filter_5</i>
							Game 5
						<div class="ripple-container"></div></a>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="card-content">
		<div class="tab-content">
			<div class="tab-pane active" id="game1">
                game1
			</div>
			<div class="tab-pane" id="game2">
				game2
			</div>
			<div class="tab-pane" id="game3">
				game3
			</div>
			<div class="tab-pane" id="game4">
				game4
			</div>
			<div class="tab-pane" id="game5">
				game5
			</div>
		</div>
	</div>
</div>
<!--END STATISTIC-->

<div class="card">
    <div class="card-header" data-background-color="orange">
		<h2 class="title"><?= Html::encode($this->title) ?>
		 
		 </h2> 
	</div>
	<div class="card-content">
	    
	<div class="row align-hori">
	    <div class="col-lg-12 col-md-12 col-sm-12">
	        <?php $form = ActiveForm::begin(); ?>
	         
            <table class="table table-hover">
                <thead class="text-primary">
                    <th></th>
                    <th><?= $form->field($model, 'jadwal' , ['options' => ['class' => 'text-center']])->textInput(['readonly' => true, 'value' => Yii::$app->getRequest()->getQueryParam('id'), 'class'=>'hidden'])->label($label,['class'=>'']) ?></th>
                    <th></th>
                </thead>
            	<tbody>
            		<tr>
            			<td> 
            			    <?= $form->field($model, 'home_point')->dropDownList([range(1, 11)],['prompt'=>'', 'class' => 'form-control text-right'])->label($label,['class'=>'hidden']) ?>
            			</td>
            			<td class="text-center  col-lg-3 col-md-3">Points won</td>
            			<td>
            			    <?= $form->field($model, 'opp_point')->dropDownList([range(1, 11)],['prompt'=>''])->label($label,['class'=>'hidden']) ?>
            			</td>
            		</tr>
            		<tr>
            			<td> 
            			    <?= $form->field($model, 'home_lead')->dropDownList([range(1, 11)],['prompt'=>'', 'class' => 'form-control text-right'])->label($label,['class'=>'hidden']) ?>
            			</td>
            			<td class="text-center  col-lg-3 col-md-3">Biggest lead</td>
            			<td>
            			    <?= $form->field($model, 'opp_lead')->dropDownList([range(1, 11)],['prompt'=>''])->label($label,['class'=>'hidden']) ?>
            			</td>
            		</tr>
            		<tr>
            			<td> 
            			    <?= $form->field($model, 'home_servewin')->dropDownList([range(1, 11)],['prompt'=>'', 'class' => 'form-control text-right'])->label($label,['class'=>'hidden']) ?>
            			</td>
            			<td class="text-center  col-lg-3 col-md-3">Points won on own serve</td>
            			<td>
            			    <?= $form->field($model, 'opp_servewin')->dropDownList([range(1, 11)],['prompt'=>''])->label($label,['class'=>'hidden']) ?>
            			</td>
            		</tr>
            		<tr>
            			<td> 
            			    <?= $form->field($model, 'home_servelost')->dropDownList([range(1, 11)],['prompt'=>'', 'class' => 'form-control text-right'])->label($label,['class'=>'hidden']) ?>
            			</td>
            			<td class="text-center  col-lg-3 col-md-3">Points lost on own serve</td>
            			<td>
            			    <?= $form->field($model, 'opp_servelost')->dropDownList([range(1, 11)],['prompt'=>''])->label($label,['class'=>'hidden']) ?>
            			</td>
            		</tr>
            		<tr>
            			<td> 
            			    <?= $form->field($model, 'home_cons')->dropDownList([range(1, 11)],['prompt'=>'', 'class' => 'form-control text-right'])->label($label,['class'=>'hidden']) ?>
            			</td>
            			<td class="text-center  col-lg-3 col-md-3">Most consecutive points won</td>
            			<td>
            			    <?= $form->field($model, 'opp_cons')->dropDownList([range(1, 11)],['prompt'=>''])->label($label,['class'=>'hidden']) ?>
            			</td>
            		</tr>
            		<tr>
            			<td> 
            			    <?= $form->field($model, 'home_overcome')->dropDownList([range(1, 11)],['prompt'=>'', 'class' => 'form-control text-right'])->label($label,['class'=>'hidden']) ?>
            			</td>
            			<td class="text-center  col-lg-3 col-md-3">Greatest deficit overcome</td>
            			<td>
            			    <?= $form->field($model, 'opp_overcome')->dropDownList([range(1, 11)],['prompt'=>''])->label($label,['class'=>'hidden']) ?>
            			</td>
            		</tr>
            	</tbody>
            </table>
            
            	    
    <?= $form->field($model, 'games')->dropDownList([ArrayHelper::map(app\models\PertandinganGame::find()->select(['id' , 'id'])->all(), 'id' , 'id')],['prompt'=>'']); ?>

    <?= $form->field($model, 'game_duration')->textInput()->label('Game Duration (in minutes)') ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

            <?php ActiveForm::end(); ?>
	    </div>
	</div>

   
    
	</div>
</div>


    
 
</div>
