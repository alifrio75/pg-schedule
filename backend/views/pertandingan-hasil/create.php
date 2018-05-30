<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\PertandinganHasil */

$this->title = 'Input Hasil Pertandingan';
$this->params['breadcrumbs'][] = ['label' => 'Pertandingan Hasils', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pertandingan-hasil-create">

<?php 
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use kartik\widgets\TimePicker;
use app\models\PertandinganJadwal;
use app\models\Atlet;

$jadwal = PertandinganJadwal::find()->where(['id' =>  Yii::$app->getRequest()->getQueryParam('id')])->one();
$home = Atlet::find()->where(['id' => $jadwal['home']])->one();
$op = Atlet::find()->where(['id' => $jadwal['opponent']])->one();
$label = $home['name'] . ' VS ' .  $op['name'];


$currentGame = Yii::$app->getRequest()->getQueryParam('id');

$game1 = app\models\PertandinganHasil::find()->select(['*'])->where(['jadwal' => $currentGame, 'games' => 1])->One();
$game2 = app\models\PertandinganHasil::find()->select(['*'])->where(['jadwal' => $currentGame, 'games' => 2])->One();
$game3 = app\models\PertandinganHasil::find()->select(['*'])->where(['jadwal' => $currentGame, 'games' => 3])->One();
$game4 = app\models\PertandinganHasil::find()->select(['*'])->where(['jadwal' => $currentGame, 'games' => 4])->One();
$game5 = app\models\PertandinganHasil::find()->select(['*'])->where(['jadwal' => $currentGame, 'games' => 5])->One();
                    
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
			 
                <?php
                    if (!empty($game1['games'])) {
                        echo ($this->render('_tablex.php', ['detail' => 1]));
                    } else {
                        echo ($this->render('_form', ['model' => $model, 'gm' => 1]));
                    }
                ?>
                
			</div>
			<div class="tab-pane" id="game2">
				<?php
                    if (!empty($game2['games'])) {
                        echo ($this->render('_tablex.php', ['detail' => 2]));
                    } else {
                        echo ($this->render('_form', ['model' => $model, 'gm' => 2]));
                    }
                ?>
			</div>
			<div class="tab-pane" id="game3">
				<?php
                    if (!empty($game3['games'])) {
                        echo ($this->render('_tablex.php', ['detail' => 3]));
                    } else {
                        echo ($this->render('_form', ['model' => $model, 'gm' => 3]));
                    }
                ?>
			</div>
			<div class="tab-pane" id="game4">
				<?php
                    if (!empty($game4['games'])) {
                        echo ($this->render('_tablex.php', ['detail' => 4]));
                    } else {
                        echo ($this->render('_form', ['model' => $model, 'gm' => 4]));
                    }
                ?>
			</div>
			<div class="tab-pane" id="game5">
				<?php
                    
                    if (!empty($game5['games'])) {
                        echo ($this->render('_tablex.php', ['detail' => 5]));
                    } else {
                        echo ($this->render('_form', ['model' => $model, 'gm' => 5]));
                    }
                ?>
			</div>
		</div>
	</div>
</div>
<!--END STATISTIC-->


</div>
