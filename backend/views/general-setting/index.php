<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\GeneralSettingSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'General Settings';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="general-setting-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create General Setting', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'name',
            'logo',
            'logoalt',
            //'slide',
            //'video:ntext',
            //'address',
            //'phone1',
            //'phone2',
            //'email:email',
            //'facebook',
            //'twitter',
            //'youtube',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
