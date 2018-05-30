<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;
use yii\helpers\Url;

AppAsset::register($this);

    if (class_exists('ramosisw\CImaterial\web\MaterialAsset')) {
        ramosisw\CImaterial\web\MaterialAsset::register($this);
    }
!empty($viewPath) || $viewPath = '@app/views/layouts';
!empty($viewNavbar) || $viewNavbar = $viewPath . '/_navbar';
!empty($viewSidebar) || $viewSidebar = $viewPath . '/_sidebar';
?>


<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
	<div class="wrapper">

<div style="margin-top: 10vh;" class="container">
    <div class="row align-items-center">
        <div class="col-lg-4"></div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header" data-background-color="purple">
                    <h4 class="title">LOGIN</h4>
                    <p class="category">Use your login credentials</p>
                </div>
                <div class="card-content">
                    <?= $content ?>
                </div>
            </div>
        </div>
        <div class="col-lg-3"></div>
    </div>
</div>
	


    </div>
    

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
