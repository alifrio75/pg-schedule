<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/*-- Use Database --*/
use yii\db\Query;
$connection = \Yii::$app->db;

/*-- Select Data In Array --*/
$sql_data = $connection->createCommand('SELECT `id`, `user_id`, `last_update`, `title`, `intro`, `pages` FROM `pages` ');
$result = $sql_data->queryAll();


$this->title = 'Pages';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pages-index">

    <h1><?= Html::encode($this->title) ?> <?= Html::a('Create Pages', ['create'], ['class' => 'btn btn-success']) ?></h1>

    
<!--BEGIN foreach REPEAT COMPONENT-->
    <div class="panel-body">
		   <?php
			foreach ($result as $value) 
				{
			?>
			
<div class="col-md-6">
	<div class="card">
        <div class="card-header" data-background-color="orange">
            <h4 class="title"><?php echo $value['title']; ?></h4>
            <p class="category"><?php echo $value['last_update']; ?></p>
        </div>
		<div class="card-content">
			<p class="category"><?php echo $value['intro']; ?> </p>
		</div>
		<div class="card-footer">
			<div class="stats">
				<?= Html::a('View', Url::toRoute(['/pages/view', 'id' => $value['id']]), ['data-method' => 'post']) ?>
			</div>
		</div>
	</div>
</div>
			<?php	
				}
		   ?>
    </div>
<!--END foreach REPEAT COMPONENT-->
    
<!--
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'user_id',
            'last_update',
            'title',
            'intro:ntext',
            //'pages:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
-->
</div>
