<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="admin/plugins/images/favicon.png">
    <title>Login | E - Health</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo Yii::app()->baseUrl; ?>/admin/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="<?php echo Yii::app()->baseUrl; ?>/admin/plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css" rel="stylesheet">

    <!-- animation CSS -->
    <link href="<?php echo Yii::app()->baseUrl; ?>/admin/css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo Yii::app()->baseUrl; ?>/admin/css/style.min.css" rel="stylesheet">

    <!-- color CSS -->
    <link href="<?php echo Yii::app()->baseUrl; ?>/admin/css/colors/megna.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- Preloader -->
    <section id="wrapper" class="login-register">
        <div class="login-box login-sidebar">
            <div class="white-box">
                <?php $form=$this->beginWidget('CActiveForm', array(
                'id'=>'login-form',
                'enableClientValidation'=>true,
                'clientOptions'=>array(
                    'validateOnSubmit'=>true,
                ),
            )); ?>
            <div class="form-horizontal form-material">
                    <a href="javascript:void(0)" class="text-center db"><img src="<?php echo Yii::app()->baseUrl; ?> /images/kbb-logo.png" width="150" height="150" alt="Home" />
                        <br/><b>E - Health KBB</b></a>
                    <div class="form-group m-t-40">
                        <div class="col-xs-12">

                            <?php echo $form->textField($model,'username',array('class'=>'form-control','placeholder'=>'Nama Pengguna')); ?>
                            <?php echo $form->error($model,'username'); ?> </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <?php echo $form->passwordField($model,'password',array('class'=>'form-control','placeholder'=>'Kata Sandi')); ?>
                            <?php echo $form->error($model,'password'); ?> </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="checkbox checkbox-primary pull-left p-t-0">
                                <input id="checkbox-signup" type="checkbox">
                                <label for="checkbox-signup"> Ingat saya </label>
                            </div> <a href="javascript:void(0)" id="to-recover" class="text-dark pull-right"><i class="fa fa-lock m-r-5"></i> Lupa password?</a> </div>
                    </div>
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-danger btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Masuk</button>
                        </div>
                    </div>
                    <div class="form-group m-b-0">
                        <div class="col-sm-12 text-center">
                            <p>Belum punya akun? <a href="index.php?r=user/create" class="text-primary m-l-5"><b>Daftar di sini</b></a></p>
                        </div>
                    </div>
                </div>
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                        </div>
                    </div>
                <?php $this->endWidget(); ?>
            </div>
        </div>
    </section>
    <!-- jQuery -->
    <script src="<?php echo Yii::app()->baseUrl; ?>/admin/plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo Yii::app()->baseUrl; ?>/admin/bootstrap/dist/js/tether.min.js"></script>
    <script src="<?php echo Yii::app()->baseUrl; ?>/admin/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo Yii::app()->baseUrl; ?>/admin/plugins/bower_components/bootstrap-extension/js/bootstrap-extension.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="<?php echo Yii::app()->baseUrl; ?>/admin/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="<?php echo Yii::app()->baseUrl; ?>/admin/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo Yii::app()->baseUrl; ?>/admin/js/waves.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo Yii::app()->baseUrl; ?>/admin/js/custom.min.js"></script>
    <!--Style Switcher -->
    <script src="<?php echo Yii::app()->baseUrl; ?>/admin/plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>
