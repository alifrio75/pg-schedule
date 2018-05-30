<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
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
<!-- StyleSheets -->
<link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
<link rel="stylesheet" href="css/main.css">	
<link rel="stylesheet" href="css/icomoon.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/transition.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/color.css">
<link rel="stylesheet" href="css/responsive.css">
<!-- FontsOnline -->
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i,800|Open+Sans:400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
<!-- JavaScripts -->
<script src="js/vendor/modernizr.js"></script>
</head>
<body>
<?php $this->beginBody() ?>

<!-- Wrapper -->
<div class="wrap push">

	<!-- Header -->
	<header class="header style-3">

		<!-- Top bar -->
		<div class="topbar-and-logobar">
			<div class="container">

				<!-- Responsive Button -->
				<div class="responsive-btn pull-right">
					<a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
				</div>
				<!-- Responsive Button -->

				<!-- User Login Option -->
				<ul class="user-login-option pull-right">
					<li class="social-icon">
						<ul class="social-icons style-5">
							<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a class="youtube" href="#"><i class="fa fa-youtube-play"></i></a></li>
						</ul>
					</li>
					<li class="login-modal">
						<a href="#" class="login" data-toggle="modal" data-target="#login-modal"><i class="fa fa-user"></i>member Login</a>
						<div class="modal fade" id="login-modal">
						  	<div class="login-form position-center-center">
								<h2>Login<button class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button></h2>
								<form>
									<div class="form-group">
										<input type="text" class="form-control" name="user" placeholder="domain@live.com">
										<i class=" fa fa-envelope"></i>	
									</div>
									<div class="form-group">
										<input type="password" class="form-control" name="pass" placeholder="**********">
										<i class=" fa fa-lock"></i>	
									</div>
									<div class="form-group custom-checkbox">
									    <label>
									    	<input type="checkbox"> Stay login
									    </label>
									    <a class="pull-right forgot-password" href="#"></a>
									    <a href="#" class="pull-right forgot-password" data-toggle="modal" data-target="#login-modal-2">Forgot password?</a>
									</div>
									<div class="form-group">
									    <button class="btn full-width red-btn">Login</button>
									</div>
								</form>
							</div>
						</div>
						<div class="modal fade" id="login-modal-2">
						  	<div class="login-form position-center-center">
								<h2>Forgot password<button class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button></h2>
								<form>
									<div class="form-group">
										<input type="text" class="form-control" name="user" placeholder="domain@live.com">
										<i class=" fa fa-envelope"></i>	
									</div>
									<div class="form-group">
										<input type="password" class="form-control" name="pass" placeholder="**********">
										<i class=" fa fa-lock"></i>	
									</div>
									<div class="form-group">
									    <button class="btn full-width red-btn">Login</button>
									</div>
								</form>
							</div>
						</div>
					</li>
				</ul>
				<!-- User Login Option -->
				
			</div>	
		</div>
		<!-- Top bar -->

		<!-- Nav -->
		<div class="nav-holder">
			<div class="container">
				<div class="maga-drop-wrap">

					<!-- Logo -->
					<div class="logo">
						<a href="#"><img src="images/logo-4.png" alt=""></a>
					</div>
					<!-- Logo -->

					<!-- Search Bar -->
					<div class="search-bar-holder pull-right">
						<div class="search-bar">
							<input type="text" class="form-control" placeholder="search enter please...">
							<i class="fa fa-search"></i>
						</div>
					</div>
					<!-- Search Bar -->

					<!-- Nav List -->
					<ul class="nav-list pull-right">
						<li>
					    	<?= yii\helpers\Html::a('Home', yii\helpers\Url::toRoute(['/'])) ?>
						</li>
						<li>
					    	<?= yii\helpers\Html::a('Atlet', yii\helpers\Url::toRoute(['/atlet'])) ?>
						</li>
						<li>
					    	<?= yii\helpers\Html::a('Schedule', yii\helpers\Url::toRoute(['/schedule'])) ?>
						</li>
						<li>
						    <?= yii\helpers\Html::a('About', yii\helpers\Url::toRoute(['/pages', 'id' => 1])) ?>
						    <ul>
							    <li><?= yii\helpers\Html::a('Visi & Misi', yii\helpers\Url::toRoute(['/pages', 'id' => 2])) ?></li>
							    <li> <?= yii\helpers\Html::a('Struktur Organisasi', yii\helpers\Url::toRoute(['/pages', 'id' => 3])) ?></li>
							    <li> <?= yii\helpers\Html::a('Tugas Pokok & Fungsi', yii\helpers\Url::toRoute(['/pages', 'id' => 4])) ?></li>
							    <li> <?= yii\helpers\Html::a('Sejarah', yii\helpers\Url::toRoute(['/pages', 'id' => 5])) ?></li>
						  	</ul>
						</li>
						<li>
					    	<a href="#">Information</a>
					    	<ul>
							    <li> <?= yii\helpers\Html::a('News', yii\helpers\Url::toRoute(['/post', 'status' => 1])) ?></li>
							    <li> <?= yii\helpers\Html::a('Artikel', yii\helpers\Url::toRoute(['/post', 'status' => 2])) ?></li>
							    <li> <?= yii\helpers\Html::a('Pengumuman', yii\helpers\Url::toRoute(['/pages', 'id' => 6])) ?></li>
							    <li> <?= yii\helpers\Html::a('Peraturan Pertandingan', yii\helpers\Url::toRoute(['/pages', 'id' => 7])) ?></li>
							    <li> <?= yii\helpers\Html::a('Peraturan Internasional', yii\helpers\Url::toRoute(['/pages', 'id' => 8])) ?></li>
						  	</ul>
						</li>
						<li>
						<a href="#" class="" data-toggle="modal" data-target="#contact">Contact</a>
									    <!--Start Modal-->
                    						<div class="modal fade login-modal" id="contact" style="background: rgba( 0,0,0,.9);">
                    						  	<div class="col-lg-10 col-md-12 article-details login-form position-center-center">
                                                            <h2>Send us an email</h2> 
                                                                <div class="row">
                                                                
                                                                	<!-- Form -->
                                                                	<form id="contact-form" class="contact-form col-sm-6">
                                                                		<div class="form-group">
                                                                	    	<input class="form-control" required="required" placeholder="Name" type="text">
                                                                	    	<i class="fa fa-user"></i>
                                                                	   	</div>
                                                                	   	<div class="form-group">
                                                                	    	<input class="form-control" required="required" placeholder="Email *" type="text">
                                                                	   		<i class="fa fa-envelope"></i>
                                                                	   	</div>
                                                                	   	<div class="form-group">
                                                                	    	<input class="form-control" required="required" placeholder="Phone" type="text">
                                                                	   		<i class="fa fa-phone"></i>
                                                                	   	</div>
                                                                		<div class="form-group">
                                                                			<textarea class="form-control style-d" rows="6" id="comment" placeholder="Write Comments here..."></textarea>
                                                                			<i class="fa fa-pencil-square-o"></i>
                                                                		</div>
                                                                	   	<button class="btn red-btn pull-right">Send Comments</button>
                                                                	</form>
                                                                	<!-- Form -->
                                                                	<!-- Img -->
                                                                    <div class="col-sm-4">
                                                                        <div class="address-widget">
                                                                        	<span class="address-icon"><i class="fa fa-phone"></i></span>
                                                                        	<h5>Hotline</h5>
                                                                        	<p>49 30 47373795<span class="red-color">Alise Vivienne ( manager )</span></p>
                                                                        	<p>49 30 47373795<span class="red-color">Tina Rollandos ( secretary )</span></p>
                                                                        	<p>Call at any time convenient for you. We are available for you 24/7</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                    <button class="btn red-btn pull-left" data-dismiss="modal">Back</button>
                                                </div>
                    						</div>
                    					<!--End Modal-->
						</li>                                                                  
					</ul>
					<!-- Nav List -->

				</div>
			</div>
		</div>
		<!-- Nav -->

	</header>
	<!-- Header -->

<!--CONTENT WRAPPER-->
<?= Alert::widget() ?>
<?= $content ?>
<!--END CONTENT WRAPPER-->

	<!-- Footer -->
	<footer class="main-footer style-2">

		<!-- Footer Columns -->
		<div class="container">

			<!-- Footer columns -->
			<div class="footer-column border-0">
				<div class="row">
					
					<!-- Footer Column -->
					<div class="col-sm-4 col-xs-6 r-full-width-2 r-full-width">
						<div class="column-widget h-white">
							<div class="logo-column p-white">
								<img class="footer-logo" src="images/footer-logo.png" alt="">
								<ul class="address-list style-2">
									<li><span>Address:</span>Ruko Amara Botanica Avenue Bintaro Blok A No. 6. Jl. Menjangan Raya, Kota Tangerang Selatan</li>
									<li><span>Phone Number:</span>(021) 74709063</li>
									<li><span>Email Address:</span>admin@sasmaka.co.id</li>
								</ul>
								<span class="follow-us">follow us </span>
								<ul class="social-icons">
									<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a class="youtube" href="#"><i class="fa fa-youtube-play"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- Footer Column -->

					<!-- Footer Column -->
					<div class="col-sm-4 col-xs-6 r-full-width-2 r-full-width">

					</div>
					<!-- Footer Column -->

					<!-- Footer Column -->
					<div class="col-sm-4 col-xs-6 r-full-width-2 r-full-width">
						<div class="column-widget h-white">
							<h5>Sponsors</h5>
							<ul id="brand-icons-slider-2" class="brand-icons-slider-2">
								<li>
									<a href="#"><img src="images/brand-icons/img-1-1.png" alt=""></a>
									<a href="#"><img src="images/brand-icons/img-1-1.png" alt=""></a>
									<a href="#"><img src="images/brand-icons/img-1-1.png" alt=""></a>
									<a href="#"><img src="images/brand-icons/img-1-1.png" alt=""></a>
								</li>
								<li>
									<a href="#"><img src="images/brand-icons/img-1-1.png" alt=""></a>
									<a href="#"><img src="images/brand-icons/img-1-1.png" alt=""></a>
									<a href="#"><img src="images/brand-icons/img-1-1.png" alt=""></a>
									<a href="#"><img src="images/brand-icons/img-1-1.png" alt=""></a>
								</li>
								<li>
									<a href="#"><img src="images/brand-icons/img-1-1.png" alt=""></a>
									<a href="#"><img src="images/brand-icons/img-1-1.png" alt=""></a>
									<a href="#"><img src="images/brand-icons/img-1-1.png" alt=""></a>
									<a href="#"><img src="images/brand-icons/img-1-1.png" alt=""></a>
								</li>
							</ul>
						</div>
					</div>
					<!-- Footer Column -->

				</div>
			</div>
			<!-- Footer columns -->

		</div>
		<!-- Footer Columns -->

		<!-- Copy Rights -->
		<div class="copy-rights">
			<div class="container">
				<p>© Copyright by <i class="red-color">Enfield</i> All rights reserved.</p>
				<a class="back-to-top scrollup" href="#"><i class="fa fa-angle-up"></i></a>
			</div>
		</div>
		<!-- Copy Rights -->

	</footer> 
	<!-- Footer -->

</div>
<!-- Wrapper -->

<!-- Slide Menu -->
<nav id="menu" class="responive-nav">
	<a class="r-nav-logo" href="home-1.html">Tenis Meja<!--<img src="images/logo-1.png" alt="">--></a>
    <ul class="respoinve-nav-list">
		<li>
			<a data-toggle="collapse" href="#list-1"><i class="pull-right fa fa-angle-down"></i>Home</a>
			<ul class="collapse" id="list-1">
			 	<li><a href="home-1.html">Home 1</a></li>
			 	<li><a href="index-2.html">Home 2</a></li>
			 	<li><a href="index-3.html">Home 3</a></li>
			</ul>
		</li>
		<li>
			<a href="about.html">About</a>
		</li>
		<li>
			<a data-toggle="collapse" href="#list-2"><i class="pull-right fa fa-angle-down"></i>Team</a>
			<ul class="collapse" id="list-2">
			    <li><a href="team.html">Team</a></li>
			 	<li><a href="team-detail.html">Team Detail</a></li>
			    <li><a href="team-widthsidebar.html">team widthsidebar</a></li>
			</ul>
		</li>
		<li>
			<a href="gallery.html">Gallery</a>
		</li>
		<li>
			<a href="#">News</a>
		</li>
		<li>
			<a data-toggle="collapse" href="#list-3"><i class="pull-right fa fa-angle-down"></i>Match</a>
			<ul class="collapse" id="list-3">
			 	<li><a href="match.html">match</a></li>
			    <li><a href="match-detail.html">match detail</a></li>
			    <li><a href="match-result.html">match result</a></li>
			</ul>
		</li>
		<li>
			<a data-toggle="collapse" href="#list-4"><i class="pull-right fa fa-angle-down"></i>Shop</a>
			<ul class="collapse" id="list-4">
			 	<li><a href="shop.html">shop</a></li>
			    <li><a href="cart.html">cart</a></li>
			    <li><a href="shop-detail.html">shop detail</a></li>
			</ul>
		</li>
		<li>
			<a data-toggle="collapse" href="#list-5"><i class="pull-right fa fa-angle-down"></i>Pages</a>
			<ul class="collapse" id="list-5">
			 	<li><a href="404.html">404</a></li>
			    <li><a href="underconstraction.html">underconstraction</a></li>
			</ul>
		</li> 
		<li>
			<a data-toggle="collapse" href="#list-6"><i class="pull-right fa fa-angle-down"></i>Blog</a>
			<ul class="collapse" id="list-6">
			 	<li><a href="blog.html">blog</a></li>
			 	<li><a href="blog-detail.html">blog detail</a></li>
			</ul>
		</li> 
		<li><a href="contact.html">Contact</a></li>                       
	</ul>
</nav>
<!-- Slide Menu -->




<?php $this->endBody() ?>

<!-- Java Script -->
<script src="js/vendor/jquery.js"></script>        
<script src="js/vendor/bootstrap.min.js"></script>		
<script src="js/bigslide.js"></script>		
<script src="js/slick.js"></script>	
<script src="js/waterwheelCarousel.js"></script>
<script src="js/contact-form.js"></script>	
<script src="js/countTo.js"></script>		
<script src="js/datepicker.js"></script>		
<script src="js/rating-star.js"></script>							
<script src="js/range-slider.js"></script>				
<script src="js/spinner.js"></script>			
<script src="js/parallax.js"></script>			   	 
<script src="js/countdown.js"></script>	
<script src="js/appear.js"></script>		 		
<script src="js/prettyPhoto.js"></script>			
<script src="js/wow-min.js"></script>						
<script src="js/main.js"></script>	
</body>
</html>
<?php $this->endPage() ?>
