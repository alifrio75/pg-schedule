<?php
$getSort = Yii::$app->getRequest()->getQueryParam('status');
$viewData = app\models\Article::find()->select(['*'])->where(['status' => $getSort])->All();
?>
<div class="card">
    <div class="card-header" data-background-color="purple">
        <h4 class="title">Article</h4>
        <p class="category">Article</p>
    </div>
    <div class="card-content table-responsive">
        <?php
            if (empty($viewData)) {
               echo ("<br /><span data-background-color='red' class='alert center-block text-center' style='width: 25%'>No Data Available</span>");
            }
        ?>
        <hr />
        <!--START REPEAT-->
        <?php foreach ($viewData as $value) {?>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-6">
                <div class="card card-stats">
                	<div class="card-header" data-background-color="">
                	    
                		<img src=<?php 
                	        if (empty($value['img1'])) {
                	            echo("'uploads/John Doe.jpg'");
                	        } else {
                	            echo $value['img1'];
                	        }
                	    ?> class="img-thumbnail" style="height: 100px;width: 100px;"> 
                	</div>
                	<div class="card-content" style="text-align: left">
        	            <h3 class="title"><?php echo $value['title']; ?></h3>
                	</div>
                	<div class="card-footer">
                		<div class="stats">
                		    <i class="material-icons">label</i> <?php echo $model->status0->status; ?>
                			<i class="material-icons">date_range</i> <?php echo $model['last_update']; ?>
                		</div>
                		<div class="stats pull-right">
                    	<i class="material-icons">visibility</i> <?= yii\helpers\Html::a(' View ', yii\helpers\Url::toRoute(['/article/view', 'id' => $value['id']]), ['data-method' => 'post']) ?>
                    	<i class="material-icons">open_in_new</i> <?= yii\helpers\Html::a(' Edit ', yii\helpers\Url::toRoute(['/article/update', 'id' => $value['id']]), ['data-method' => 'post']) ?>
                		</div>
                	</div>
                </div>
            </div>
        </div>
        <hr />
        <?php } ?>
        <!--END REPEAT-->
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-6"></div>
        </div>
    </div>
</div>