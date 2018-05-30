<?php

/* @var $this yii\web\View */

$this->title = 'News';

$getSort = Yii::$app->getRequest()->getQueryParam('status');
$posts = app\models\Article::find()->select(['*'])->where(['status' => $getSort])->All();
?>


<!--News Grid-->
<div class="page-heading-breadcrumbs">
	<div class="container">
		<h2>News</h2>
		<ul class="breadcrumbs">
			<li><a href="#">Home</a></li>
			<li>News</li>
		</ul>
	</div>
</div>
<div class="overlay-dark theme-padding parallax-window" data-appear-top-offset="600" data-parallax="scroll" data-image-src="images/inner-banner/img-01.jpg"></div>
<main class="main-content">

		<!-- Blog -->
		<div class="theme-padding white-bg">
			<div class="container">

				<!-- Blog Grid View -->
				<div class="blog-grid-view style-2">
					<div class="row">
                        <?php foreach ($posts as $value) {?>
						<!-- Post Start -->
						<div class="col-lg-4 col-xs-12">
							<div class="blog-grid-figure">
								<!-- Post Img -->
								<div class="large-post-img">
									<img src=<?php 
                            	        if (empty($value['img1'])) {
                            	            echo('../../backend/web/uploads/John Doe.jpg');
                            	        } else {
                            	            echo ('../../backend/web/' . $value['img1']);
                            	        }
                            	    ?>> 
								</div>
								<!-- Post Img -->
								<!-- Post Detail -->
								<div class="large-post-detail style-3">
									<span class="red-color"></span>
									<h2><a href="#"><?php echo $value['title']; ?></a></h2>
									<?php echo $value['intro']; ?>
								</div>
								<!-- Post Detail -->
								<!-- Post Detail Bottom -->
								<div class="detail-btm">
									<span>On <?php echo $value['last_update']; ?></span>
									<div class="pull-right">
									    <a href="#" class="" data-toggle="modal" data-target="#article-id"><i class="fa fa-reply"></i> Read More</a>
									    <!--Start Modal-->
                    						<div class="modal fade login-modal" id="article-id" style="background: rgba( 0,0,0,.9);">
                    						  	<div class="col-lg-10 col-md-12 article-details login-form position-center-center">
                                                    <div class="blog-detail-holder">
                                                    	<div class="author-header">
                                                    	    <button class="close" data-dismiss="modal"><i class="red-color fa fa-angle-right"></i></button>
                                                    		<h2><?php echo $value['title']; ?></h2>
                                                    		<div class="aurhor-img-name pull-left">
                                                    			<img src="images/aurthor-img.jpg" alt="">
                                                    			<strong>by <i class="red-color">Admin</i></strong>
                                                    			<span>on <?php echo $value['last_update']; ?></span>
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
                                                    		<?php echo $value['intro']; ?>
                                                    	</article>
                                                    	<div class="blog-detail">
                                                    		<figure>
                                                    			<img src="images/blog-detail/img-01.jpg" alt="">
                                                    		</figure>
                                                    		<article>
                                                    			<?php echo $value['article']; ?>
                                                    		</article>
                                                    		
                                                    	</div>
                                                    	<div class="tags-holder">
                                                    	    <button class="btn red-btn pull-left" data-dismiss="modal">Back</button>
                                                    		<ul class="social-icons pull-right"><li>Share this post</li><li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li><li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li><li><a class="youtube" href="#"><i class="fa fa-youtube-play"></i></a></li><li><a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a></li></ul>
                                                    	</div>
                                                    </div>
                    							</div>
                    						</div>
                    					<!--End Modal-->
									</div>
								</div>
								<!-- Post Detail Bottom -->
								</div>
							</div>
							<?php } ?>
						<!-- Post End -->

					</div>
				</div>
				<!-- Blog Grid View -->
			</div>
		</div>
		<!-- Blog -->
	</main>

<!--End News Grid-->
