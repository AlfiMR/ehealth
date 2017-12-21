<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="E-health | Kabupaten Bandung Barat, Dentist & Dental Care HTML5 Template" />
<meta name="keywords" content="keyword1,keyword2,keyword3,keyword4,keyword5" />
<meta name="author" content="ThemeMascot" />

<!-- Page Title -->
<title>E - Health | Kabupaten Bandung Barat</title>

<!-- Favicon and Touch Icons -->
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

<!-- CSS | menuzord megamenu skins -->
<link href="<?php echo Yii::app()->baseUrl; ?> /template/css/menuzord-megamenu.css" rel="stylesheet">
<link href="<?php echo Yii::app()->baseUrl; ?> /template/css/menuzord-skins/menuzord-boxed.css" rel="stylesheet">

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
<div id="wrapper" class="clearfix">
  <!-- preloader -->
  <div id="preloader">
    <div id="spinner">
      <div class="preloader-dot-loading">
        <div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
      </div>
    </div>
    <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
  </div>

  <!-- Start main-content -->
  <div class="main-content"> 
  <?php echo $content; ?>
  </div>
  <!-- end main-content -->

  <!-- Footer -->
  <footer id="footer" class="footer">
    <div class="container p-20">
      <div class="row">
        <div class="col-md-12 text-center">
          <p class="mb-0">Copyright &copy;2017 Diskominfotik Kabupaten Bandung Barat. All Rights Reserved</p>
        </div>
      </div>
    </div>
  </footer>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>

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