<?php

/* @var $this yii\web\View */

$this->title = 'Schedule';


$fixtures = app\models\PertandinganJadwal::find()->select(['*'])->All();
?>



<div class="page-heading-breadcrumbs">
	<div class="container">
		<h2>Match</h2>
		<ul class="breadcrumbs">
			<li><a href="#">Home</a></li>
			<li>Match</li>
		</ul>
	</div>
</div>
<div class="overlay-dark theme-padding parallax-window" data-appear-top-offset="600" data-parallax="scroll" data-image-src="images/inner-banner/img-03.jpg"></div>
<!--Match Content-->
<main class="main-content">	

		<!-- Match -->
		<div class="theme-padding white-bg">
			<div class="container">
				<div class="row">
					
					<!-- match Contenet -->
					<div class="matches-shedule-holder">
						<div class="col-lg-9 col-sm-8">
                            <?php 
                                foreach ($fixtures as $value) 
                            {
                                $home = app\models\Atlet::find()->select(['id','name'])->where(['id' => $value['home']])->All();
                                $away = app\models\Atlet::find()->select(['id','name'])->where(['id' => $value['opponent']])->All();
                                $hc = app\models\Countries::find()->select(['country_code'])->where(['id' => $home['0']['id']])->All();
                                $oc = app\models\Countries::find()->select(['country_code'])->where(['id' => $away['0']['id']])->All();
                                $venue = app\models\Venue::find()->select(['name'])->where(['id' => $value['venue']])->All();
                            ?>
							<!-- Matches Dates Shedule -->
							<div class="matches-dates-shedule">
								<ul>
									<li>
										<span class="pull-left"><img src="images/matches-logo/img-01.png" alt=""></span>
										<span class="pull-right"><img src="images/matches-logo/img-02.png" alt=""></span>
										<div class="detail">
											<a href="#">Match Detail<i class="fa fa-angle-double-right"></i></a>
											<strong><?php echo $home['0']['name']; ?>(<?php echo ($hc['0']['country_code']); ?>) <i class="red-color"><?php echo $value['date']; ?> <?php echo $value['time']; ?></i> <?php echo $away['0']['name']; ?>(<?php echo ($oc['0']['country_code']); ?>)  </strong>
											<span class="location-marker"><i class="fa fa-map-marker"></i><?php echo $venue['0']['name']; ?></span>
										</div>
									</li>
								</ul>
							</div>
							<!-- Matches Dates Shedule -->
							<?php }?>
						</div>
					</div>
					<!-- match Contenet -->

					<!-- Aside -->
					<div class="col-lg-3 col-sm-4">

						<!-- Aside Widget -->
						<div class="aside-widget">
							<h3><span>Popular News</span></h3>
							<div class="Popular-news">
								<ul>
									<li>
										<img src="images/popular-news/img-01.jpg" alt="">
										<h5><a href="#">Two touch penalties, imaginary cards</a></h5>
										<span class="red-color"><i class="fa fa-clock-o"></i>22 Feb, 2016</span>
									</li>
								</ul>
							</div>
						</div>
						<!-- Aside Widget -->

					</div>
					<!-- Aside -->

				</div>
			</div>
		</div>
		<!-- Match -->

	</main>

<!--Match Content-->
