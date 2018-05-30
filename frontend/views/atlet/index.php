<?php
/* @var $this yii\web\View */

$this->title = 'Atlet';

$atlets = app\models\Atlet::find()->select(['*'])->All();
?>



<!--Atlet Content-->
<div class="page-heading-breadcrumbs">
	<div class="container">
		<h2>Atlet</h2>
		<ul class="breadcrumbs">
			<li><a href="#">Home</a></li>
			<li>Atlet</li>
		</ul>
	</div>
</div>
<div class="overlay-dark theme-padding parallax-window" data-appear-top-offset="600" data-parallax="scroll" data-image-src="images/inner-banner/img-03.jpg"></div>

<main class="main-content">
    <div class="team-grid theme-padding white-bg">
        <div class="container">
            <h2>Atlet</h2>
            <div class="row">
                <?php foreach ($atlets as $value) {
                    $country = app\models\Countries::find()->select(['country_name'])->where(['id' => $value['country']])->All();
                ?>
                <!--Repeat Coloumn-->
                <div class="col-lg-3 col-sm-4 col-xs-6 r-full-width">
						<div class="team-column">
							<img src="<?php 
                            	        if (empty($value['avatar'])) {
                            	            echo('../../backend/web/uploads/John Doe.jpg');
                            	        } else {
                            	            echo('../../backend/web/'. $value['avatar']);
                            	        }
                            	    ?>" alt="">
							<div class="team-detail">
								<h5><a href="#"><?php echo $value['name']; ?></a></h5>
								<span class="desination"><?php echo $country['0']['country_name']; ?></span>
								<hr />
								<div class="detail-inner">
									<ul>
										<li>Born</li>
										<li>Age</li>
										<li>Country</li>
									</ul>
									<ul>
										<li><?php echo $value['birthday']; ?></li>
										<li><?php echo $value['umur']; ?></li>
										<li><?php echo $country['0']['country_name']; ?></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
                <!--End Repeat Coloumn-->
                <?php } ?>
            </div>
        </div>
    </div>
</main>


<!--Atlet Content-->