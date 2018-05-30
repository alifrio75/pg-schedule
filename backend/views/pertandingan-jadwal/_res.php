<?php
use app\models\PertandinganJadwal;
use app\models\Atlet;

$currentGame = Yii::$app->getRequest()->getQueryParam('id');
$viewData = app\models\PertandinganHasil::find()->select(['*'])->where(['jadwal' => $currentGame, 'games' => $detail])->One();

$jadwal = PertandinganJadwal::find()->where(['id' =>  Yii::$app->getRequest()->getQueryParam('id')])->one();
$home = Atlet::find()->where(['id' => $jadwal['home']])->one();
$op = Atlet::find()->where(['id' => $jadwal['opponent']])->one();
$label = $home['name'] . ' VS ' .  $op['name'];
?>

<table class="table table-hover">
    <thead class="text-primary">
        <th></th>
        <th>
            <div class="text-center field-pertandinganhasil-jadwal">
                <label class="" for="pertandinganhasil-jadwal"><?php echo($label) ?></label>
            </div>
        </th>
        <th></th>
    </thead>
	<tbody>
		<tr>
			<td class="text-right"> 
			    <?php echo $viewData['home_point']; ?>
			</td>
			<td class="text-center  col-lg-4 col-md-4">Points won</td>
			<td>
			    <?php echo $viewData['opp_point']; ?>
			</td>
		</tr>
		<tr>
			<td class="text-right"> 
			    <?php echo $viewData['home_lead']; ?>
			</td>
			<td class="text-center  col-lg-4 col-md-4">Biggest lead</td>
			<td>
			    <?php echo $viewData['opp_lead']; ?>
			</td>
		</tr>
		<tr>
			<td class="text-right"> 
			    <?php echo $viewData['home_servewin']; ?>
			</td>
			<td class="text-center  col-lg-4 col-md-4">Points won on own serve</td>
			<td>
			    <?php echo $viewData['opp_servewin']; ?>
			</td>
		</tr>
		<tr>
			<td class="text-right"> 
			    <?php echo $viewData['home_servelost']; ?>
			</td>
			<td class="text-center  col-lg-4 col-md-4">Points lost on own serve</td>
			<td>
			    <?php echo $viewData['opp_servelost']; ?>
			</td>
		</tr>
		<tr>
			<td class="text-right"> 
			    <?php echo $viewData['home_cons']; ?>
			</td>
			<td class="text-center  col-lg-4 col-md-4">Most consecutive points won</td>
			<td>
			    <?php echo $viewData['opp_cons']; ?>
			</td>
		</tr>
		<tr>
			<td class="text-right"> 
			    <?php echo $viewData['home_overcome']; ?>
			</td>
			<td class="text-center  col-lg-4 col-md-4">Greatest deficit overcome</td>
			<td>
			    <?php echo $viewData['opp_overcome']; ?>
			</td>
		</tr>
	</tbody>
</table>

