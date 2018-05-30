<?php

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
( SELECT `country_name` FROM `countries` WHERE countries.id = op_country_id ) as op_country_name, `opponent_score`, `date`, `time`, `hasil` FROM `pertandingan_jadwal` ORDER BY date LIMIT 1
');
$result = $sql_data->queryAll();
$test = app\models\Pages::find()->select(['title'])->one();
echo $test['title'];
?>

<?php
    foreach ($result as $value) 
    	{
?>
<!--START FIXTURE-->
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="card-header text-center" data-background-color="red">
                <h2 class="title ">Next Match</h2>
                <p class="category">Next Playing Time</p>
            </div>
            <div class="card-content">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header" style="float: right!important;" data-background-color="orange">
                             <img src="logo.png" style="width: 50px;"> 
                        </div>
                        <div class="card-content">
                            <p class="category"><?php echo $value['home_country_name']; ?></p>
                            <h3 class="title"><?php echo $value['home']; ?><small></small></h3>
                        </div>
                        <div class="card-footer text-right">
                            <div class="stats">
                                (<?php echo $value['home_age']; ?>) <i class="material-icons">navigate_next</i> 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header" data-background-color="blue">
                            <img src="logo.png" style="width: 50px;"> 
                        </div>
                        <div class="card-content" style="text-align: left!important;" >
                            <p class="category"><?php echo $value['op_country_name']; ?></p>
                            <h3 class="title"><?php echo $value['op']; ?></h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">navigate_before</i> (<?php echo $value['op_age']; ?>)
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--END FIXTURE-->
<?php	
	}
?>