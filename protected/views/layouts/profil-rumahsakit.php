<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="MediPress - Health & Medical HTML Template" />
<meta name="keywords" content="keyword1,keyword2,keyword3,keyword4,keyword5" />
<meta name="author" content="ThemeMascot" />

<!-- Page Title -->
<title>E-Health | Kabupaten Bandung Barat</title>

<link href="template/images/favicon.png" rel="shortcut icon" type="image/png">
<link href="template/images/apple-touch-icon.png" rel="apple-touch-icon">
<link href="template/images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
<link href="template/images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
<link href="template/images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

<!-- Stylesheet -->
<link href="<?php echo Yii::app()->baseUrl; ?> /template/css/bootstrap.min.css" rel="stylesheet">

<link href="<?php echo Yii::app()->baseUrl; ?> /template/css/jquery-ui.min.css" rel="stylesheet">

<link href="<?php echo Yii::app()->baseUrl; ?> /template/css/animate.css" rel="stylesheet">

<link href="<?php echo Yii::app()->baseUrl; ?> /template/css/css-plugin-collections.css" rel="stylesheet">

<!-- CSS | menuzord megamenu skins -->
<link href="<?php echo Yii::app()->baseUrl; ?> /template/css/menuzord-megamenu.css" rel="stylesheet">

<link href="<?php echo Yii::app()->baseUrl; ?> /template/css/menuzord-skins/menuzord-rounded-boxed.css" rel="stylesheet">
<!-- CSS | Main style file -->
<link href="<?php echo Yii::app()->baseUrl; ?> /template/css/style-main.css" rel="stylesheet">
<!-- CSS | Preloader Styles -->
<link href="<?php echo Yii::app()->baseUrl; ?> /template/css/preloader.css" rel="stylesheet">
<!-- CSS | Custom Margin Padding Collection -->
<link href="<?php echo Yii::app()->baseUrl; ?> /template/css/custom-bootstrap-margin-padding.css" rel="stylesheet">
<!-- CSS | Responsive media queries -->
<link href="<?php echo Yii::app()->baseUrl; ?> /template/css/responsive.css" rel="stylesheet">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

<!-- CSS | Theme Color -->
<link href="<?php echo Yii::app()->baseUrl; ?> /template/css/colors/theme-skin-color-set1.css" rel="stylesheet">

<!-- Revolution Slider 5.x CSS settings -->
<link href="<?php echo Yii::app()->baseUrl; ?> /template/js/revolution-slider/css/settings.css" rel="stylesheet">

<link href="<?php echo Yii::app()->baseUrl; ?> /template/js/revolution-slider/css/layers.css" rel="stylesheet">

<link href="<?php echo Yii::app()->baseUrl; ?> /template/js/revolution-slider/css/navigation.css" rel="stylesheet">

<!-- external javascripts -->
<script src="<?php echo Yii::app()->baseUrl; ?> /template/js/jquery-2.2.4.min.js"></script>
<script src="<?php echo Yii::app()->baseUrl; ?> /template/js/jquery-ui.min.js"></script>
<script src="<?php echo Yii::app()->baseUrl; ?> /template/js/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="<?php echo Yii::app()->baseUrl; ?> /template/js/jquery-plugin-collection.js"></script>

<!-- CSS | noneed RevSlider -->
<link href="<?php echo Yii::app()->baseUrl; ?> /template/js/revolution-slider/noneed.css" rel="stylesheet">
<link href="<?php echo Yii::app()->baseUrl; ?> /template/js/revolution-slider/js/jquery.themepunch.tools.min.js" rel="stylesheet">

<!-- Revolution Slider 5.x SCRIPTS -->
<script src="<?php echo Yii::app()->baseUrl; ?> /template/js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>

<script src="<?php echo Yii::app()->baseUrl; ?> /template/js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<style>
.demo-figure {
  background: #fff none repeat scroll 0 0;
  border-radius: 15px;
  padding: 30px;
  transition: all 300ms ease-in-out 0s;
}
.demo-figure:hover {
  box-shadow: 4px -1px 21px 2px #aaa;
}
.demo-single-block {
  display: block;
  height: 480px;
  overflow: hidden;
  text-align: center;
}
.demo-single-block img {
  max-width: 100%;
  transition: transform 5200ms ease 0s, opacity 0.9s ease 0s;
}
.demo-single-block:hover img {
  transform: translateY(calc(-100% + 480px));
}
</style>

</head>
<body class="">
<div id="wrapper">
	<!-- preloader -->
	<div id="preloader">
		<div id="spinner">
			<div class="preloader-dot-loading">
				<div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
			</div>
		</div>
		<div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
	</div>
  
  <!-- Header -->
  <header id="header" class="header header-floating header-floating-text-dark">
    <div class="header-nav navbar-sticky navbar-sticky-animated">
      <div class="header-nav-wrapper">
        <div class="container">
          <nav id="menuzord-right" class="default no-bg">
            <a class="menuzord-brand switchable-logo pull-left flip mb-15" href="index-mp-layout1.html">
              <img class="logo-default" src="images/logo-ehealth-2.png" alt="">
              <img class="logo-scrolled-to-fixed" src="images/logo-ehealth.png" alt="">
            </a>
            <div class="pull-right mb-sm-15">
            </div>
          </nav>
        </div>
      </div>
    </div>
  </header>	
	<!-- Start main-content -->
	<div class="main-content">

  <?php echo $content; ?> 

	<!-- Footer -->
	<footer id="footer" class="footer bg-black-111">
		<div class="container pt-70 pb-40">
			<div class="row border-bottom-black">
				<div class="col-sm-6 col-md-3">
					<div class="widget dark">
						<img class="mt-10 mb-20" alt="" src="images/logo-wide-white.png">
						<p>Lorem ipsum dolor adipisicing amet, consectetur sit elit. Aspernatur incidihil quo officia.</p>
						<ul class="list-inline mt-5">
							<li class="m-0 pl-10 pr-10"> <i class="fa fa-map-marker text-theme-colored mr-5"></i> <a class="text-gray" href="#">203, Envato Labs, Behind Alis Steet, Melbourne, Australia</a> </li>
							<li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-theme-colored mr-5"></i> <a class="text-gray" href="#">123-456-789</a> </li>
							<li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o text-theme-colored mr-5"></i> <a class="text-gray" href="#">contact@yourdomain.com</a> </li>
							<li class="m-0 pl-10 pr-10"> <i class="fa fa-globe text-theme-colored mr-5"></i> <a class="text-gray" href="#">www.yourdomain.com</a> </li>
						</ul>
					</div>
					<div class="widget dark">
						<h5 class="widget-title mb-10">Connect With Us</h5>
						<ul class="styled-icons icon-dark icon-circled icon-sm">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-skype"></i></a></li>
							<li><a href="#"><i class="fa fa-youtube"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-6 col-md-3">
					<div class="widget dark">
						<h5 class="widget-title line-bottom">Useful Links</h5>
						<ul class="list-border">
							<li><a href="index-mp-layout1.html">Home</a></li>
							<li><a href="page-about1.html">About us</a></li>
							<li><a href="page-contact1.html">Contact</a></li>
						</ul>
					</div>
					<div class="widget dark">
						<h5 class="widget-title line-bottom">Other Links</h5>
						<ul class="list-border">
							<li><a href="shortcode-sitemap.html">FAQ</a></li>
							<li><a href="shortcode-sitemap.html">Sitemap</a></li>
							<li><a href="page-contact1.html">Policy</a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-6 col-md-3">
					<div class="widget dark">
						<h5 class="widget-title line-bottom">Latest News</h5>
						<div class="latest-posts">
							<article class="post media-post clearfix pb-0 mb-10">
								<a href="blog-single-right-sidebar.html" class="post-thumb"><img alt="" src="http://placehold.it/80x55"></a>
								<div class="post-right">
									<h5 class="post-title mt-0 mb-5"><a href="blog-single-right-sidebar.html">Sustainable Construction</a></h5>
									<p class="post-date mb-0 font-12">Mar 08, 2015</p>
								</div>
							</article>
							<article class="post media-post clearfix pb-0 mb-10">
								<a href="blog-single-right-sidebar.html" class="post-thumb"><img alt="" src="http://placehold.it/80x55"></a>
								<div class="post-right">
									<h5 class="post-title mt-0 mb-5"><a href="blog-single-right-sidebar.html">Industrial Coatings</a></h5>
									<p class="post-date mb-0 font-12">Mar 08, 2015</p>
								</div>
							</article>
							<article class="post media-post clearfix pb-0 mb-10">
								<a href="blog-single-right-sidebar.html" class="post-thumb"><img alt="" src="http://placehold.it/80x55"></a>
								<div class="post-right">
									<h5 class="post-title mt-0 mb-5"><a href="blog-single-right-sidebar.html">Storefront Installations</a></h5>
									<p class="post-date mb-0 font-12">Mar 08, 2015</p>
								</div>
							</article>
						</div>
					</div>
					<div class="widget dark">
						<h5 class="widget-title line-bottom">Call Us Now</h5>
						<div class="text-gray">
							+61 3 1234 5678 <br>
							+12 3 1234 5678
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-3">
					<div class="widget dark">
						<h5 class="widget-title line-bottom">Opening Hours</h5>
						<div class="opening-hours">
							<ul class="list-border">
								<li class="clearfix"> <span> Mon - Tues :  </span>
									<div class="value pull-right flip"> 6.00 am - 10.00 pm </div>
								</li>
								<li class="clearfix text-white"> <span> Wednes - Thurs :</span>
									<div class="value pull-right flip"> 8.00 am - 6.00 pm </div>
								</li>
								<li class="clearfix"> <span> Fri : </span>
									<div class="value pull-right flip"> 3.00 pm - 8.00 pm </div>
								</li>
								<li class="clearfix"> <span> Sun : </span>
									<div class="value pull-right flip"> Closed </div>
								</li>
								<li class="clearfix"> <span> Sat : </span>
									<div class="value pull-right flip"> 10.00 am - 2.00 pm </div>
								</li>
							</ul>
						</div>
					</div>
					<div class="widget dark">
						<h5 class="widget-title line-bottom">Subscribe Us</h5>
						<!-- Mailchimp Subscription Form Starts Here -->
						<form id="mailchimp-subscription-form-footer" class="newsletter-form">
							<div class="input-group">
								<input type="email" value="" name="EMAIL" placeholder="Your Email" class="form-control input-lg font-16" data-height="45px" id="mce-EMAIL-footer">
								<span class="input-group-btn">
									<button data-height="45px" class="btn btn-colored btn-theme-colored btn-xs m-0 font-14" type="submit">Subscribe</button>
								</span>
							</div>
						</form>
						<!-- Mailchimp Subscription Form Validation-->
						<script type="text/javascript">
							$('#mailchimp-subscription-form-footer').ajaxChimp({
									callback: mailChimpCallBack,
									url: '//thememascot.us9.list-manage.com/subscribe/post?u=a01f440178e35febc8cf4e51f&amp;id=49d6d30e1e'
							});

							function mailChimpCallBack(resp) {
									// Hide any previous response text
									var $mailchimpform = $('#mailchimp-subscription-form-footer'),
											$response = '';
									$mailchimpform.children(".alert").remove();
									if (resp.result === 'success') {
											$response = '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
									} else if (resp.result === 'error') {
											$response = '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
									}
									$mailchimpform.prepend($response);
							}
						</script>
						<!-- Mailchimp Subscription Form Ends Here -->
					</div>
				</div>
			</div>
		</div>
		<div class="footer-bottom bg-black-222">
			<div class="container pt-10 pb-0">
				<div class="row">
					<div class="col-md-6 sm-text-center">
						<p class="font-13 text-black-777 m-0">Copyright &copy;2017 ThemeMascot. All Rights Reserved</p>
					</div>
					<div class="col-md-6 text-right flip sm-text-center">
						<div class="widget no-border m-0">
							<ul class="styled-icons icon-dark icon-circled icon-sm">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-skype"></i></a></li>
								<li><a href="#"><i class="fa fa-youtube"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram"></i></a></li>
								<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="<?php echo Yii::app()->baseUrl; ?> /template/js/custom.js"></script>
<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
      (Load Extensions only on Local File Systems ! 
       The following part can be removed on Server for On Demand Loading) -->
<script src="<?php echo Yii::app()->baseUrl; ?> /template/js/revolution-slider/js/extensions/revolution.extension.actions.min.js"></script>

<script src="<?php echo Yii::app()->baseUrl; ?> /template/js/revolution-slider/js/extensions/revolution.extension.carousel.min.js"></script>

<script src="<?php echo Yii::app()->baseUrl; ?> /template/js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js"></script>

<script src="<?php echo Yii::app()->baseUrl; ?> /template/js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js"></script>

<script src="<?php echo Yii::app()->baseUrl; ?> /template/js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js"></script>

<script src="<?php echo Yii::app()->baseUrl; ?> /template/js/revolution-slider/js/extensions/revolution.extension.migration.min.js"></script>

<script src="<?php echo Yii::app()->baseUrl; ?> /template/js/revolution-slider/js/extensions/revolution.extension.navigation.min.js"></script>

<script src="<?php echo Yii::app()->baseUrl; ?> /template/js/revolution-slider/js/extensions/revolution.extension.parallax.min.js"></script>

<script src="<?php echo Yii::app()->baseUrl; ?> /template/js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js"></script>

<script src="<?php echo Yii::app()->baseUrl; ?> /template/js/revolution-slider/js/extensions/revolution.extension.video.min.js"></script>

</body>
</html>