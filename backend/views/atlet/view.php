<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Atlet */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Atlets', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="atlet-view">

<div class="row">
    <div class="col-lg-8 col-md-8 col-sm-6">
        <div class="card">
            <div class="card-content">
                <h4 class="title"><?php echo $model->name ?>  
                <div class="pull-right" style="margin-top: -10px;"><?= Html::a('<button type="button" rel="tooltip" title="Edit" class="btn btn-primary btn-simple btn-xs">
									<i class="material-icons">mode_edit</i>
								</button>', ['update', 'id' => $model->id]) ?>
                    <?= Html::a('<button type="button" rel="tooltip" title="Delete" class="btn btn-primary btn-simple btn-xs">
									<i class="material-icons">delete</i>
								</button>', ['delete', 'id' => $model->id], [
                        'data' => [
                            'confirm' => 'Are you sure you want to delete this item?',
                            'method' => 'post',
                        ],
                        ['title' => 'delete'],
                    ]) ?>
                </div>
                </h4>
       
                <hr />
                <table class="table table-hover">
            		<tr><td style="width: 20%">Gender</td><td>: <?php echo $model->gender ?></td></tr>
            		<tr><td>Country</td><td>: <?php echo $model->country0->country_name ?></td></tr>
            		<tr><td>Birthday</td><td>: <?php echo $model->birthday ?></td></tr>
            		<tr><td>Age</td><td>: <?php echo $model->umur ?></td></tr>
                </table>
            </div>
            <div class="card-footer"></div>
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-6">
        <div class="card card-stats">
            <div class="card-header" data-background-color="purple">
                <img src=<?php if (empty($model->avatar)) { echo("'uploads/John Doe.jpg'"); } else { echo ("'$model->avatar'"); }?> class="img-thumbnail img-reponsive">
            </div>
            <div class="card-footer">
                <div class="stats pull-right"><?php echo $model->name ?> / <?php echo $model->umur ?>thn</div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    
</div>


</div>
