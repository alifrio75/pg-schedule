<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Pages */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Pages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pages-view">

<div class="card">
    <div class="card-header" data-background-color="purple">
        <h4 class="title"><?= Html::encode($this->title) ?></h4>
        <p class="category"><i class="material-icons">date_range</i>  <?php echo $model->last_update ?></p>
    </div>
    <div class="card-content table-responsive">
        <div class="col-lg-8 col-md-8 col-sm-6"><?php echo $model->intro ?> <br /> <?php echo $model->pages ?></div>
        <div class="col-lg-4 col-md-4 col-sm-6 pull-right"><img src=<?php if (empty($model->thumb)) { echo("'uploads/John Doe.jpg'"); } else { echo $model->thumb; }?> class="img-thumbnail img-reponsive"></div>
    </div>
    <div class="card-footer">
    	<div class="stats pull-right">
    	 <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], ['class' => 'btn btn-danger','data' => ['confirm' => 'Are you sure you want to delete this item?', 'method' => 'post',],]) ?>
    	<br />
    	</div>
    </div>
    </div>
</div>
