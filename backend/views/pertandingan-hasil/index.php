<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PertandinganHasilSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pertandingan Hasils';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pertandingan-hasil-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Pertandingan Hasil', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'jadwal',
            'games',
            'home_point',
            'home_lead',
            //'home_servewin',
            //'home_servelost',
            //'home_cons',
            //'home_overcome',
            //'opp_point',
            //'opp_lead',
            //'opp_servewin',
            //'opp_servelost',
            //'opp_cons',
            //'opp_overcome',
            //'game_duration',
            //'last_update',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
