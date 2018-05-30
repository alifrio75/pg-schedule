<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PertandinganWasitSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Wasit';
$this->params['breadcrumbs'][] = $this->title;

/*-- Use Database --*/
use yii\db\Query;
$connection = \Yii::$app->db;

/*-- Select Data In Array --*/
$sql_data = $connection->createCommand('SELECT `id`, `name`,( SELECT countries.country_name FROM countries WHERE countries.id = pertandingan_wasit.country) AS country FROM `pertandingan_wasit`');
$result = $sql_data->queryAll();
?>
<div class="pertandingan-wasit-index">

    <h1><?= Html::encode($this->title) ?> <?= Html::a('Input Wasit', ['create'], ['class' => 'btn btn-success']) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    
<div class="card">
    <div class="card-header" data-background-color="red">
        <h4 class="title">Daftar Wasit</h4>
        <p class="category">Table daftar wasit</p>
    </div>
    <div class="card-content table-responsive">
        <table class="table">
            <thead class="text-primary">
                <th>#</th>
                <th>Name</th>
                <th>Country</th>
                <th></th>
            </thead>
            <tbody>
            
		   <?php
			foreach ($result as $value) 
				{
			?>
                <tr>
                    <td class="text-primary"><?php echo $value['id']; ?></td>
                    <td><?php echo $value['name']; ?></td>
                    <td><?php echo $value['country']; ?></td>
                    <td><?= Html::a('
                                <button type="button" rel="tooltip" title="View" class="btn btn-primary btn-simple btn-xs">
									<i class="material-icons">visibility</i>
								</button>
								    ', Url::toRoute(['/pertandingan-wasit/view', 'id' => $value['id']]), ['data-method' => 'post']) ?></td>
                </tr>
            <?php	
				}
		   ?>
            </tbody>
        </table>
    </div>
</div>
</div>
