<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\GeneralSetting */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'General Settings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="general-setting-view">

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
            'title',
            'name',
            'logo',
            'logoalt',
            'slide',
            'video:ntext',
            'address',
            'phone1',
            'phone2',
            'email:email',
            'facebook',
            'twitter',
            'youtube',
        ],
    ]) ?>

</div>
