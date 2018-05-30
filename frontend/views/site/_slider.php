<?php 
    $rules = app\models\Pages::find()->select(['*'])->where(['id' => 7])->All(); 
   
?>
	<!-- Slider Holder -->
	<div class="slider-holder">

		<!-- Banner slider -->
		<ul id="main-slides" class="main-slides">

            <!-- Itme -->
			<li>
				<img src="images/banner-bgs/img-02.jpg" alt="">
				<div class="position-center-center">
					<div class="container theme-padding">
						<div class="pager-heading match-detail h-white">
							<span class="pull-left win-tag"><img src="images/team-logos/img-01.png" alt=""></span>
							<div class="vs-match-heading position-center-center">
								<strong class="vs-match-result">3<span>Vs</span>1</strong>
								<span class="end-time"><i class="fa fa-clock-o"></i>13:57 min (IST)</span>
							</div>
							<span class="pull-right loss-tag"><img src="images/team-logos/img-02.png" alt=""></span>
						</div>
					</div>
				</div>
			</li>
			<!-- Itme -->

			<!-- Itme -->
			<li>
			    <iframe src="https://www.youtube.com/embed/kOkQ4T5WO9E" allow="autoplay; encrypted-media" allowfullscreen="" width="854" height="630" frameborder="0"></iframe>
			</li>
			<!-- Itme -->

			<!-- Itme -->
			<li>
			    <div id="animated-slider" class="carousel slide carousel-fade">

			        <!-- Wrapper for slides -->
			        <div id="headline" class="carousel-inner" role="listbox">

                        <?php
                            $posts = app\models\Article::find()->select(['*'])->where(['status' => 1])->limit(3)->All();
                            foreach ($posts as $value) {
                        ?>
			            <!-- Item -->
			            <div class="item">
			            	<img src="<?php 
                                	        if (empty($value['img1'])) {
                                	            echo('../../backend/web/uploads/John Doe.jpg');
                                	        } else {
                                	            echo('../../backend/web/'.$value['img1']);
                                	        }
                                	    ?>" style="height: 630px;object-fit: contain;">
				               <div class="position-center-x full-width">
								<div class="container">
									<div class="banner-caption style-2 p-white h-white pull-left">
										<h1 class="animated fadeInUp delay-1s"><?php echo $value['title'] ?></h1>
										<p class="animated fadeInUp delay-2s"><?php echo mb_strimwidth($value['intro'], 0, 100, " ...");  ?> </p>
										<a class="btn lg red-btn animated fadeInRight delay-3s" href="#"><i>+</i>Read More</a>
									</div>
								</div>
							</div>
			            </div> 
			            <!-- Item -->
			            <?php  } ?>

			        </div>
			        <!-- Wrapper for slides -->

			        <!-- Indicators -->
			        <ul class="carousel-indicators">
			            <li data-target="#animated-slider" data-slide-to="0" class="active"></li>
			            <li data-target="#animated-slider" data-slide-to="1"></li>
			            <li data-target="#animated-slider" data-slide-to="2"></li>
			        </ul>
			        <!-- Indicators -->

			    </div>
			</li>
			<!-- Itme -->

			<!-- Itme -->
			<li>
				<img src="images/banner-bgs/img-03.jpg" alt="">
				<div class="video-banner-caption position-center-center p-white h-white">
					<h1><?php echo mb_strimwidth($value['intro'], 0, 200, "...");  ?></h1>
					<ul class="btn-list">
						<li>	<?= yii\helpers\Html::a('Home >', yii\helpers\Url::toRoute(['/']), ['class' => 'btn lg red-btn']) ?></li>
					</ul>
				</div>
			</li>
			<!-- Itme -->

		</ul>
		<!-- Banner slider -->

		<!-- Slides Thmnail -->
		<div class="main-slides-thumb">
			<div class="container">
				<ul id="slides-thmnail" class="slides-thmnail">
					<li>
						<span><i class="fa fa-sliders"></i>Match</span>
					</li>
					<li>
						<span><i class="fa fa-play-circle"></i>Video</span>
					</li>
					<li>
						<span><i class="fa fa-soccer-ball-o"></i>News</span>
					</li>
					<li>
						<span><i class="fa fa-bar-chart"></i>Rules</span>
					</li>
				</ul>
				<ul class="thmnail-arrows">
					<li class="prev-1"><span class="icon-arrow-01"></span></li>
					<li class="next-1"><span class="icon-arrow-01"></span></li>
				</ul>
			</div>
		</div>
		<!-- Slides Thmnail -->

	</div>
	<!-- Slider Holder -->