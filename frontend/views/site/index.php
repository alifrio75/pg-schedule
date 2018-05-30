<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<?= \Yii::$app->view->renderFile('@app/views/site/_slider.php'); ?>

	<!-- Main Content -->
	<main class="main-content">
		
		<!-- Match Detail -->
		<section class="theme-padding-bottom bg-fixed">
			<div class="container">

				<!-- Add Banners -->
				<div class="add-banners">

				<!-- Match Detail Content -->
				<div class="match-detail-content">
					<div class="row">
						<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
							<div class="row">
								<!-- Upcoming Fixture -->
								<div class="col-sm-12 col-xs-12 r-full-width">
									<h3><span><i class="red-color">UPCOMING </i>FIXTURE</span><a class="view-all pull-right" href="#">view all<i class="fa fa-angle-double-right"></i></a></h3>
									<div class="upcoming-fixture">
										<div class="table-responsive">
											<table class="table table-bordered">
											    <tbody>
											        <?php
                                                        $fixtures = app\models\PertandinganJadwal::find()->select(['*'])->All();
                                                        foreach ($fixtures as $value) 
                                                        {
                                                            $home = app\models\Atlet::find()->select(['id','name'])->where(['id' => $value['home']])->All();
                                                            $away = app\models\Atlet::find()->select(['id','name'])->where(['id' => $value['opponent']])->All();
                                                            $hc = app\models\Countries::find()->select(['country_code'])->where(['id' => $home['0']['id']])->All();
                                                            $oc = app\models\Countries::find()->select(['country_code'])->where(['id' => $away['0']['id']])->All();
                                                            $venue = app\models\Venue::find()->select(['name'])->where(['id' => $value['venue']])->All();
                                                        ?>
                                                    <tr>
												        <td>
												        	<div class="logo-width-name"><?php echo $home['0']['name']; ?></div>
												        </td>
												        <td class="upcoming-fixture-date"><span><?php echo $value['date']; ?></span></td>
												        <td>
												        	<div class="logo-width-name w-icon"><?php echo $away['0']['name']; ?></div>
												        </td>
												    </tr>
                                                    <?php }?>
											    </tbody>
											</table>
										</div>
									</div>
								</div>
								<!-- Upcoming Fixture -->

								<!-- Latest News -->
								<div class="col-xs-12">
									<div class="latest-news-holder">
										<h3><span>Latest News</span></h3>

										<!-- latest-news Slider -->
										<div class="row no-gutters white-bg">

											<!-- Slider -->
											<div class="col-sm-9">
												<ul id="latest-news-slider" class="latest-news-slider">
                                                    <?php
                                                        $posts = app\models\Article::find()->select(['*'])->where(['status' => 1])->All();
                                                        foreach ($posts as $value) {
                                                    ?>
                                                    <li>
														<img style="height: 346px; width: 615px; object-fit: contain;" src=<?php 
                                                    	        if (empty($value['img1'])) {
                                                    	            echo('../../backend/web/uploads/John Doe.jpg');
                                                    	        } else {
                                                    	            echo('../../backend/web/'.$value['img1']);
                                                    	        }
                                                    	    ?>>
													    <?php echo mb_strimwidth($value['intro'], 0, 100, "...");  ?> <a href="#">Read more</a>
												    </li>
                                                    <?php } ?>
												</ul>
											</div>
											<!-- Slider -->

											<!-- Thumnail -->
											<div class="col-sm-3">
												<ul id="latest-news-thumb" class="latest-news-thumb">
													<?php
													foreach ($posts as $value) {
                                                    ?>
                                                    <li>
														<p><?php echo $value['title']; ?></p>
														<span><?php echo $value['last_update']; ?></span>
													</li>
                                                    <?php } ?>
												</ul>
												<ul class="news-thumb-arrows">
													<li class="prev"><span class="fa fa-angle-up"></span></li>
													<li class="next"><span class="fa fa-angle-down"></span></li>
												</ul>
											</div>
											<!-- Thumnail -->

										</div>
										<!-- latest-news Slider -->

									</div>
								</div>
								<!-- Latest News -->
							</div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
							<div class="row">
							<!-- Next Matches -->
								<div class="col-sm-12 col-xs-12 r-full-width">
									<div class="next-matches">
										<h4>Next Match</h4> 
										<div id="matches-detail-slider" class="matches-detail-slider">
											<?php
                                                        $fixtures = app\models\PertandinganJadwal::find()->select(['*'])->All();
                                                        foreach ($fixtures as $value) 
                                                        {
                                                            $home = app\models\Atlet::find()->select(['id','name'])->where(['id' => $value['home']])->All();
                                                            $away = app\models\Atlet::find()->select(['id','name'])->where(['id' => $value['opponent']])->All();
                                                            $hc = app\models\Countries::find()->select(['country_code'])->where(['id' => $home['0']['id']])->All();
                                                            $oc = app\models\Countries::find()->select(['country_code'])->where(['id' => $away['0']['id']])->All();
                                                            $venue = app\models\Venue::find()->select(['name'])->where(['id' => $value['venue']])->All();
                                             ?>
											<!-- Item -->
											<div class="item matches-detail">
												<div class="time-left">
													<span><?php echo $value['date']; ?></span>
												</div>
												<span class="left-date">12/02/2016 / 19:00</span>
												<div class="team-btw-match">
													<ul>
														<li>
															<img src="images/team-logos/img-01.png" alt="">
															<span>Footbal<span>Team</span></span>
														</li>
														<li>
															<img src="images/team-logos/img-02.png" alt="">
															<span>Super Team<span>Club</span></span>
														</li>
													</ul>
												</div>
											</div>
											<!-- Item -->
                                            <?php } ?>
										</div>
									</div>
								</div>
								<!-- Next Matches -->
							</div> 
						</div>
					</div>
				</div>
				<!-- Match Detail Content -->
				</div>
				<!-- Add Banners -->


			</div>
		</section>
		<!-- Match Detail -->


	</main>
	<!-- Main Content -->
	
	


<!--Start Gallery
<div class="page-heading-breadcrumbs">
	<div class="container">
		<h2>Gallery</h2>
		<ul class="breadcrumbs">
			<li><a href="#">Home</a></li>
			<li>Gallery</li>
		</ul>
	</div>
</div>
<div class="overlay-dark theme-padding parallax-window" data-appear-top-offset="600" data-parallax="scroll" data-image-src="images/inner-banner/img-01.jpg">
</div>
<main class="main-content">
<div class="container-fluid">
		<div class="products-holder gray-bg theme-padding">
			<div id="product-slider" class="product-slider nav-style-1">
			     Product Column 
				<div class="product-column">
					<figure class="gallery-figure">
    					<img src="images/banner-bgs/img-02.jpg" alt="">
    					<figcaption class="overlay">
    						<div class="position-center-center">
    							<ul class="btn-list">
    								<li><a href="images/banner-bgs/img-02.jpg" data-rel="prettyPhoto[gallery-v3]" rel="prettyPhoto[gallery-v3]"><i class="fa fa-search"></i></a></li>
    								<li><a class="fa fa-eye" href="#"></a></li>
    							</ul>
    						</div>
    					</figcaption>
    				</figure>
				</div>
				 Product Column 
	        </div>
	    </div>
</div>
</main>
End Gallery-->
