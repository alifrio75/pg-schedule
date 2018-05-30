<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Atlet */

$this->title = 'Update Data' . $model-name;
$this->params['breadcrumbs'][] = ['label' => 'Atlets', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="atlet-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
