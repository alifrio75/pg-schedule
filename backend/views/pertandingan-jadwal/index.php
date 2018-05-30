<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PertandinganJadwalSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Jadwal Pertandingan';
$this->params['breadcrumbs'][] = $this->title;


/*-- Use Database --*/
use yii\db\Query;
$connection = \Yii::$app->db;

/*-- Select Data In Array --*/
$sql_data = $connection->createCommand('SELECT `id`,( SELECT pertandingan_nomer.noper FROM pertandingan_nomer WHERE pertandingan_nomer.id = pertandingan_jadwal.nomer) AS nomer, ( SELECT pertandingan_kelas.kelas FROM pertandingan_kelas WHERE pertandingan_kelas.id = pertandingan_jadwal.kelas) AS kelas, ( SELECT pertandingan_gender.gender FROM pertandingan_gender WHERE pertandingan_gender.id = pertandingan_jadwal.gender) AS gender, ( SELECT venue.name FROM venue WHERE venue.id = pertandingan_jadwal.venue) AS venue, ( SELECT pertandingan_wasit.name FROM pertandingan_wasit WHERE pertandingan_wasit.id = pertandingan_jadwal.wasit) AS wasit, ( SELECT pertandingan_tahap.name FROM pertandingan_tahap WHERE pertandingan_tahap.id = pertandingan_jadwal.tahap) AS tahap, ( SELECT atlet.name FROM atlet WHERE atlet.id = pertandingan_jadwal.home) AS home, ( SELECT atlet.country FROM atlet WHERE atlet.id = pertandingan_jadwal.home) AS home_country_id, ( SELECT `country_name` FROM `countries` WHERE countries.id = home_country_id) as home_country_name, `home_score`, ( SELECT atlet.name FROM atlet WHERE atlet.id = pertandingan_jadwal.opponent) AS op, ( SELECT atlet.country FROM atlet WHERE atlet.id = pertandingan_jadwal.opponent) AS op_country_id, ( SELECT `country_name` FROM `countries` WHERE countries.id = op_country_id ) as op_country_name, `opponent_score`, `date`, `time`, `hasil` FROM `pertandingan_jadwal` ORDER BY date');
$result = $sql_data->queryAll();

?>

<div class="pertandingan-jadwal-index">


    <h1><?= Html::encode($this->title) ?> <?= Html::a('Input Jadwal', ['create'], ['class' => 'btn btn-success']) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


<div class="card">
    <div class="card-header" data-background-color="red">
        <h4 class="title">Jadwal Pertandingan</h4>
        <p class="category">Table jadwal pertandingan</p>
    </div>
    <div class="card-content table-responsive">
        <table class="table">
            <thead class="text-primary">
                <th>Gender</th>
                <th>Nomer</th>
                <th>Kelas</th>
                <th>Home</th>
                <th>Opponent</th>
                <th></th>
            </thead>
            <tbody>
            
		   <?php
			foreach ($result as $value) 
				{
			?>
                <tr>
                    <td class="text-primary"><?php echo $value['gender']; ?></td>
                    <td><?php echo $value['nomer']; ?></td>
                    <td><?php echo $value['kelas']; ?></td>
                    <td><?php echo $value['home']; ?> (<?php echo $value['home_country_name']; ?>)</td>
                    <td><?php echo $value['op']; ?> (<?php echo $value['op_country_name']; ?>)</td>
                    <td>
                        
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
</div>
                    

<!--
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//             'id',
            [
                'attribute' => 'gender',
                'value' => 'gender0.gender',
               'label' => 'Gender'
            ],
            [
                'attribute' => 'nomer',
                'value' => 'nomer0.noper',
               'label' => 'Nomer'
            ],
            [
                'attribute' => 'kelas',
                'value' => 'kelas0.kelas',
               'label' => 'Kelas'
            ],
//             [
//                 'attribute' => 'venue',
//                 'value' => 'venue0.name',
//                'label' => 'venue'
//             ],
            //'wasit',
            //'tahap',
            [
                'attribute' => 'home',
                'value' => 'home0.name',
               'label' => 'Home'
            ],
            //'home_score',
            [
                'attribute' => 'opponent',
                'value' => 'opponent0.name',
               'label' => 'Opponent'
            ],
            //'opponent_score',
            //'date',
            //'time',
            //'hasil',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
-->
</div>
