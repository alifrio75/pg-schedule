<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use kartik\widgets\TimePicker;


use app\models\PertandinganJadwal;
use app\models\Atlet;
$jadwal = PertandinganJadwal::find()->where(['id' =>  Yii::$app->getRequest()->getQueryParam('id')])->one();
$home = Atlet::find()->where(['id' => $jadwal['home']])->one();
$op = Atlet::find()->where(['id' => $jadwal['opponent']])->one();
$label = $home['name'] . ' VS ' .  $op['name'];


?>

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
            
    <?= $form->field($model, 'game_duration')->textInput()->label('Game Duration (in minutes)') ?>
    
    <?= $form->field($model, 'games' , ['options' => ['class' => 'text-center']])->textInput(['readonly' => true, 'value' => $gm, 'class'=>'hidden'])->label($gm) ?>

    <div class="form-group">
        <?= Html::submitButton('Input Game '.$gm.' Results', ['class' => 'btn btn-success']) ?>
    </div>

            <?php ActiveForm::end(); ?>