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

            <?php
                if(Yii::$app->user->isGuest){
                    echo 'User is not logged!';
                } else {
                    echo $this->render($viewSidebar) ;
                }
            ?>

	    <div class="main-panel">
	    
            <?php
                if(Yii::$app->user->isGuest){
                    echo 'User is not logged!';
                } else {
                    echo $this->render($viewNavbar);
                }
            ?>
            
			<div class="content" data-color="orange">
				<div class="container-fluid">
    				<?= Alert::widget() ?>
    				<?= $content ?>
				</div>
			</div>

			<footer class="footer">
    <div class="container-fluid">
        <p class="pull-left">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>
		</div>
	</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
