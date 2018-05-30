<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\PertandinganJadwal */

use app\models\PertandinganHasil;

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Pertandingan Jadwals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pertandingan-jadwal-view">
   <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a('Input Hasil', Url::toRoute(['/pertandingan-hasil/create', 'id' => $model->id]), ['class' => 'btn btn-warning'], ['data-method' => 'post']) ?>
    </p>
<!--START FIXTURE-->
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="card-header text-center" data-background-color="red">
                <h2 class="title "><?php echo $model->date; ?></h2>
                <p class="category"><?php echo $model->venue0->name; ?> - <?php echo $model->time; ?> - <?php echo $model->wasit0->name; ?></p>
            </div>
            <div class="card-content">
                <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header" style="float: right!important;" data-background-color="orange">
                             <img src="logo.png" style="width: 50px;"> 
                        </div>
                        <div class="card-content">
                            <p class="category"><?php echo $model->home0->country0->country_name; ?></p>
                            <h3 class="title"><?php echo $model->home0->name; ?><small></small></h3>
                            <br />
                        </div>
                        <div class="card-footer text-right">
                            <div class="stats">
                                <?php echo $model->gender0->gender; ?> <i class="material-icons">navigate_next</i> 
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
                            <p class="category"><?php echo $model->opponent0->country0->country_name; ?></p>
                            <h3 class="title"><?php echo $model->opponent0->name; ?></h3>
                            <br />
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">navigate_before</i>  <?php echo $model->gender0->gender; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <?php
                    $dataNotExist = "<hr /><p class='category text-center'>On Going Match</p>";
                    
                    if (app\models\PertandinganHasil::find()->select(['*'])->where(['jadwal' => $model->id])->One()) {
                       echo(\Yii::$app->view->renderFile('@app/views/pertandingan-jadwal/_stats.php')) ;
                    } else {
                        echo($dataNotExist);
                    };
                ?>
            </div>
        </div>
    </div>
</div>
<!--END FIXTURE-->

</div>
