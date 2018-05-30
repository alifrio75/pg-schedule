<?php
use yii\helpers\Url;
use yii\helpers\Html;
/*-- Use Database --*/
use yii\db\Query;
$connection = \Yii::$app->db;

/*-- Select Data In Array --*/
$sql_data = $connection->createCommand('
SELECT COUNT(id) AS atlet,(SELECT COUNT(id) FROM pertandingan_wasit AS wasit) AS wasit, (SELECT COUNT(id) FROM pertandingan_hasil AS hasil) AS hasil, (SELECT COUNT(id) FROM pertandingan_jadwal AS jadwal) AS jadwal FROM atlet AS atlet
');
$result = $sql_data->queryAll();
foreach ($result as $value) {
}
?>

<!--START STATUS-->
<div class="row">
	<div class="col-lg-3 col-md-6 col-sm-6">
		<div class="card card-stats">
			<div class="card-header" data-background-color="orange">
				<i class="material-icons">content_copy</i>
			</div>
			<div class="card-content">
				<p class="category">Wasit</p>
				<h3 class="title"><?php echo $value['wasit']; ?><small></small></h3>
			</div>
			<div class="card-footer">
				<div class="stats">
					<i class="material-icons">date_range</i> Last 24 Hours
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-3 col-md-6 col-sm-6">
		<div class="card card-stats">
			<div class="card-header" data-background-color="green">
				<i class="material-icons">store</i>
			</div>
			<div class="card-content">
				<p class="category">Status Pertandingan</p>
				<h3 class="title"><?php echo $value['hasil']; ?>/<?php echo $value['jadwal']; ?></h3>
			</div>
			<div class="card-footer">
				<div class="stats">
					<i class="material-icons">date_range</i> Jadwal Terlaksana / Total Jadwal
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-3 col-md-6 col-sm-6">
		<div class="card card-stats">
			<div class="card-header" data-background-color="red">
    			<i class="material-icons">assignment_ind</i>
			</div>
			<div class="card-content">
				<p class="category">Atlet Terdaftar</p>
				<h3 class="title"><?php echo $value['atlet']; ?></h3>
			</div>
			<div class="card-footer">
				<div class="stats">
					<i class="material-icons">update</i> Berdasarkan Jumlah Atlet Di Sistem
				</div>
			</div>
		</div>
	</div>

	<div class="col-lg-3 col-md-6 col-sm-6">
		<div class="card card-stats">
			<div class="card-header" data-background-color="blue">
				<i class="material-icons">language</i>
			</div>
			<div class="card-content">
				<p class="category">Negara Partisipan</p>
				<h3 class="title">43</h3>
			</div>
			<div class="card-footer">
				<div class="stats">
					<i class="material-icons">update</i> Berdasarkan Jumlah Atlet Di Sistem
				</div>
			</div>
		</div>
	</div>
</div>
<!--END STATUS-->