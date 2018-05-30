<?php
/* @var $this yii\web\View */
$this->title = $model->title ;
?>

<div class="page-heading-breadcrumbs">
	<div class="container">
		<h2><?php echo $model->title ?></h2>
		<ul class="breadcrumbs">
			<li><a href="#">Home</a></li>
			<li><?php echo $model->title ?></li>
		</ul>
	</div>
</div>
<div class="overlay-dark theme-padding parallax-window" data-appear-top-offset="600" data-parallax="scroll" data-image-src="<?php echo $model->thumb ?>"></div>
<!--Match Content-->
<main class="main-content">	

		<!-- Match -->
		<div class="theme-padding white-bg">
			<div class="container">
				<div class="row">
					
					<!-- match Contenet -->
					<div class="matches-shedule-holder">
						<div class="col-lg-9 col-sm-8">
                            <div class="blog-detail-holder">
                            	<div class="author-header">
                            		<h2><?php echo $model->title ?></h2>
                            		<div class="aurhor-img-name pull-left">
                            			<img src="images/aurthor-img.jpg" alt="">
                            			<strong>by <i class="red-color">Admin</i></strong>
                            			<span><?php echo $model->last_update ?></span>
                            		</div>
                            		<div class="share-option pull-right">
                            			<span id="share-btn1"><i class="fa fa-share-alt"></i>Share</span>
                            			<div id="show-social-icon1" class="on-hover-share">
                            				<ul class="social-icons">
                            					<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                            					<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                            					<li><a class="youtube" href="#"><i class="fa fa-youtube-play"></i></a></li>
                            					<li><a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a></li>
                            				</ul>
                            			</div>
                            		</div>
                            	</div>
                            	<article>
                            		<?php echo $model->intro ?>
                            	</article>
                            	<div class="blog-detail">
                            		<figure>
                            			<img src="images/blog-detail/img-01.jpg" alt="">
                            		</figure>
                            		<article>
                            		    <?php echo $model->pages ?>
                            		</article>
                            		
                            	</div>
                            	<div class="tags-holder">
                            		<ul class="social-icons pull-right"><li>Share this post</li><li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li><li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li><li><a class="youtube" href="#"><i class="fa fa-youtube-play"></i></a></li><li><a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a></li></ul>
                            	</div>
                            </div>
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