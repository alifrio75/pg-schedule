<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;


/*-- Use Database --*/
use yii\db\Query;
$connection = \Yii::$app->db;

/*-- Select Data In Array --*/
$sql_data = $connection->createCommand('SELECT `id`, `user_id`, `last_update`, `title`, `intro`, `article` FROM `article` ');
$result = $sql_data->queryAll();


$this->title = 'Articles';
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="article-index">

    <p>
        <?= Html::a('Create Article', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <p>
        <?= Html::a('View Profile', Url::toRoute(['/article/view', 'id' => '1']), ['class' => 'btn btn-success']) ?>
    </p>

<!--BEGIN foreach REPEAT COMPONENT-->
    <div class="panel-body">
		   <?php
			foreach ($result as $value) 
				{
			?>
				<div class="col-md-3" style="padding:5px">
					<div class="box box-primary">
                    <div class="box-header with-border">
						<center>
							<h5><strong><?php echo $value['title']; ?></strong></h5>
							<p><?php echo $value['title']; ?></p>
                                <?= Html::a('View', Url::toRoute(['/article/view', 'id' => $value['id']]), ['data-method' => 'post']) ?>
							<p><?php echo $value['intro']; ?> (<?php echo $value['user_id']; ?>) <br>Medali <?php echo $value['intro']; ?></p>
						</center>
					</div>
					</div>
				</div>
			<?php	
				}
		   ?>
    </div>
<!--END foreach REPEAT COMPONENT-->

</div>
