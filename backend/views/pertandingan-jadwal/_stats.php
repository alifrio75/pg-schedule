<?php 
use app\models\PertandinganHasil;
use app\models\PertandinganJadwal;
use app\models\Atlet;

$jadwal = PertandinganJadwal::find()->where(['id' =>  Yii::$app->getRequest()->getQueryParam('id')])->one();
$home = Atlet::find()->where(['id' => $jadwal['home']])->one();
$op = Atlet::find()->where(['id' => $jadwal['opponent']])->one();
$label = $home['name'] . ' VS ' .  $op['name'];

$res = app\models\PertandinganHasil::find()->select(['*'])->where(['jadwal' =>  Yii::$app->getRequest()->getQueryParam('id')])->All();

$game1 = app\models\PertandinganHasil::find()->select(['*'])->where(['jadwal' => Yii::$app->getRequest()->getQueryParam('id'), 'games' => 1])->One();
$game2 = app\models\PertandinganHasil::find()->select(['*'])->where(['jadwal' => Yii::$app->getRequest()->getQueryParam('id'), 'games' => 2])->One();
$game3 = app\models\PertandinganHasil::find()->select(['*'])->where(['jadwal' => Yii::$app->getRequest()->getQueryParam('id'), 'games' => 3])->One();
$game4 = app\models\PertandinganHasil::find()->select(['*'])->where(['jadwal' => Yii::$app->getRequest()->getQueryParam('id'), 'games' => 4])->One();
$game5 = app\models\PertandinganHasil::find()->select(['*'])->where(['jadwal' => Yii::$app->getRequest()->getQueryParam('id'), 'games' => 5])->One();


$score = 0;
if ($game1['home_point'] < $game1['opp_point']) {
    $score =+ 1;
}
if ($game2['home_point'] < $game2['opp_point']) {
    $score =+ 1;
}
if ($game3['home_point'] < $game3['opp_point']) {
    $score =+ 1;
}
echo $score;

?>

<hr />
  <!--START RESULTS-->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-header" data-background-color="blue">
                            <h3 class="title">0-0</h3>
                            <p class="category">Final Score</p>
                        </div>
                        <div class="card-content">
                            <table class="table table-hover">
                                <thead class="text-primary">
                                	<th class="col-lg-6">Player</th>
                                	<th class="text-right"></th>
                                	<th class="text-right">Game 1</th>
    								<th class="text-right">Game 2</th>
    								<th class="text-right">Game 3</th>
    								<th class="text-right">Game 4</th>
    								<th class="text-right">Game 5</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><?php echo($home['name']) ?></td>
                                        <td class="text-right"></td>
                                        <td class="text-right"><?php echo $game1['home_point'] ?></td>
                                        <td class="text-right"><?php echo $game2['home_point'] ?></td>
                                        <td class="text-right"><?php echo $game3['home_point'] ?></td>
                                        <td class="text-right"><?php echo $game4['home_point'] ?></td>
                                        <td class="text-right"><?php echo $game5['home_point'] ?></td>
                                    </tr>
                                    <tr>
                                        <td><?php echo($op['name']) ?></td>
                                        <td class="text-right"></td>
                                        <td class="text-right"><?php echo $game1['opp_point'] ?></td>
                                        <td class="text-right"><?php echo $game2['opp_point'] ?></td>
                                        <td class="text-right"><?php echo $game3['opp_point'] ?></td>
                                        <td class="text-right"><?php echo $game4['opp_point'] ?></td>
                                        <td class="text-right"><?php echo $game5['opp_point'] ?></td>
                                    </tr>
                                </tbody>
	                        </table>
                        </div>
                        <div class="card-footer text-right">
                            <div class="stats">
                                <i class="material-icons">update</i>  Last Update
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    
    

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
                        echo ($this->render('_res.php', ['detail' => 1]));
                    } else {
                        echo ('Data Not Available');
                    }
                ?>
                
			</div>
			<div class="tab-pane" id="game2">
				<?php
                    if (!empty($game2['games'])) {
                        echo ($this->render('_res.php', ['detail' => 2]));
                    } else {
                        echo ('Data Not Available');
                    }
                ?>
			</div>
			<div class="tab-pane" id="game3">
				<?php
                    if (!empty($game3['games'])) {
                        echo ($this->render('_res.php', ['detail' => 3]));
                    } else {
                       echo ('Data Not Available');
                    }
                ?>
			</div>
			<div class="tab-pane" id="game4">
				<?php
                    if (!empty($game4['games'])) {
                        echo ($this->render('_res.php', ['detail' => 4]));
                    } else {
                        echo ('Data Not Available');
                    }
                ?>
			</div>
			<div class="tab-pane" id="game5">
				<?php
                    
                    if (!empty($game5['games'])) {
                        echo ($this->render('_res.php', ['detail' => 5]));
                    } else {
                        echo ('Data Not Available');
                    }
                ?>
			</div>
		</div>
	</div>
</div>
<!--END STATISTIC-->
                    
                </div>
            </div>
            <!--END RESULTS-->