<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Atlet */

$this->title = 'Input Atlet';
$this->params['breadcrumbs'][] = ['label' => 'Atlets', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="atlet-create">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
