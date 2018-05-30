<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\PertandinganHasil */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Pertandingan Hasils', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pertandingan-hasil-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'jadwal',
            'games',
            'home_point',
            'home_lead',
            'home_servewin',
            'home_servelost',
            'home_cons',
            'home_overcome',
            'opp_point',
            'opp_lead',
            'opp_servewin',
            'opp_servelost',
            'opp_cons',
            'opp_overcome',
            'game_duration',
            'last_update',
        ],
    ]) ?>

</div>
