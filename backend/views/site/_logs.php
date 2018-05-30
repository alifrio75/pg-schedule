<?php
use yii\helpers\Url;
use yii\helpers\Html;
/*-- Use Database --*/
use yii\db\Query;
$connection = \Yii::$app->db;

/*-- Select Data In Array --*/
$sql_data = $connection->createCommand('
SELECT `id`,
( SELECT pertandingan_nomer.noper FROM pertandingan_nomer WHERE pertandingan_nomer.id = pertandingan_jadwal.nomer) AS nomer,
( SELECT pertandingan_kelas.kelas FROM pertandingan_kelas WHERE pertandingan_kelas.id = pertandingan_jadwal.kelas) AS kelas, 
( SELECT pertandingan_gender.gender FROM pertandingan_gender WHERE pertandingan_gender.id = pertandingan_jadwal.gender) AS gender, 
( SELECT venue.name FROM venue WHERE venue.id = pertandingan_jadwal.venue) AS venue, 
( SELECT pertandingan_wasit.name FROM pertandingan_wasit WHERE pertandingan_wasit.id = pertandingan_jadwal.wasit) AS wasit, 
( SELECT pertandingan_tahap.name FROM pertandingan_tahap WHERE pertandingan_tahap.id = pertandingan_jadwal.tahap) AS tahap, 
( SELECT atlet.name FROM atlet WHERE atlet.id = pertandingan_jadwal.home) AS home,
( SELECT atlet.umur FROM atlet WHERE atlet.id = pertandingan_jadwal.home) AS home_age,
( SELECT atlet.country FROM atlet WHERE atlet.id = pertandingan_jadwal.home) AS home_country_id,
( SELECT `country_name` FROM `countries` WHERE countries.id = home_country_id) as home_country_name, `home_score`, 
( SELECT atlet.name FROM atlet WHERE atlet.id = pertandingan_jadwal.opponent) AS op,
( SELECT atlet.umur FROM atlet WHERE atlet.id = pertandingan_jadwal.opponent) AS op_age,
( SELECT atlet.country FROM atlet WHERE atlet.id = pertandingan_jadwal.opponent) AS op_country_id, 
( SELECT `country_name` FROM `countries` WHERE countries.id = op_country_id ) as op_country_name, `opponent_score`, `date`, `time`, `hasil` FROM `pertandingan_jadwal` ORDER BY date
');
$result = $sql_data->queryAll();

?>

<!--START LOGS-->
<div class="card card-nav-tabs">
	<div class="card-header" data-background-color="purple">
		<div class="nav-tabs-navigation">
			<div class="nav-tabs-wrapper">
				<span class="nav-tabs-title">Logs:</span>
				<ul class="nav nav-tabs" data-tabs="tabs">
					<li class="active">
						<a href="#profile" data-toggle="tab">
							<i class="material-icons">bug_report</i>
							Jadwal Pertandingan
						<div class="ripple-container"></div></a>
					</li>
					<!--<li class="">-->
					<!--	<a href="#messages" data-toggle="tab">-->
					<!--		<i class="material-icons">code</i>-->
					<!--		Hasil Pertandingan-->
					<!--	<div class="ripple-container"></div></a>-->
					<!--</li>-->
				</ul>
			</div>
		</div>
	</div>

	<div class="card-content">
		<div class="tab-content">
			<div class="tab-pane active" id="profile">
				<table class="table">
					<tbody>
                        <?php
                            foreach ($result as $value) 
                            {
                        ?>
						<tr>
							<td><?php echo $value['gender']; ?>-<?php echo $value['nomer']; ?>-<?php echo $value['kelas']; ?></td>
							<td><?php echo $value['home']; ?> VS <?php echo $value['op']; ?></td>
							<td class="td-actions text-right">
								<?= Html::a('
                                <button type="button" rel="tooltip" title="View" class="btn btn-primary btn-simple btn-xs">
									<i class="material-icons">visibility</i>
								</button>
								    ', Url::toRoute(['/pertandingan-jadwal/view', 'id' => $value['id']]), ['data-method' => 'post']) ?>
							</td>
						</tr>
                        <?php	
                            }
                        ?>
					</tbody>
				</table>
			</div>
			<div class="tab-pane" id="messages">
				<?= \Yii::$app->view->renderFile('@app/views/site/_logs2.php'); ?>
			</div>
		</div>
	</div>
</div>
<!--END LOGS-->
