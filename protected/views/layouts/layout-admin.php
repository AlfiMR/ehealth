<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="20x20" href="<?php echo Yii::app()->baseUrl; ?>/images/logo-posyandu.png">
    <title>Admin Panel - E-Health KBB</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo Yii::app()->baseUrl; ?>/admin/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->baseUrl; ?>/admin/plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="<?php echo Yii::app()->baseUrl; ?>/admin/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- morris CSS -->
    <link href="<?php echo Yii::app()->baseUrl; ?>/admin/plugins/bower_components/morrisjs/morris.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="<?php echo Yii::app()->baseUrl; ?>/admin/css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo Yii::app()->baseUrl; ?>/admin/css/style.min.css" rel="stylesheet">

    <!-- color CSS -->
    <link href="<?php echo Yii::app()->baseUrl; ?>/admin/css/colors/megna.css" id="theme" rel="stylesheet">

    <link href="<?php echo Yii::app()->baseUrl; ?>/admin/plugins/bower_components/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/sweet-alert/sweet-alert.css">

    <link href="<?php echo Yii::app()->baseUrl; ?>/admin/plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />

    <link href="<?php echo Yii::app()->baseUrl; ?>/admin/plugins/bower_components/custom-select/custom-select.css" rel="stylesheet" type="text/css" />

    <link href="<?php echo Yii::app()->baseUrl; ?>/admin/plugins/bower_components/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" />

    <link href="<?php echo Yii::app()->baseUrl; ?>/admin/plugins/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.css" rel="stylesheet" />

    <link href="<?php echo Yii::app()->baseUrl; ?>/admin/plugins/bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />

    <link href="<?php echo Yii::app()->baseUrl; ?>/admin/plugins/bower_components/multiselect/css/multi-select.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>

    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
                <div class="top-left-part">
                <a class="logo" href="index.html">
                <b>
                <?php echo
                '<img src='.Yii::app()->request->baseUrl.'/images/kbb-logo.png width="50" height="50" alt="home" />';
                ?>
                </b><span class="hidden-xs"><strong>E-HEALTH</strong>KBB</span></a></div>
                <ul class="nav navbar-top-links navbar-left hidden-xs">
                    <li><a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i class="icon-arrow-left-circle ti-menu"></i></a></li>

                </ul>
                <ul class="nav navbar-top-links navbar-right pull-right">

                    <li class="dropdown">
                        <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"><?= Yii::app()->user->name ?>
                        <?php echo
                        '<img src='.Yii::app()->request->baseUrl.'/images/206853.png alt="user-img" width="36" class="img-circle">';
                        ?>
                        <b class="hidden-xs"></b> </a>
                        <ul class="dropdown-menu dropdown-user animated flipInY">
                            <li>
                            <?php echo CHtml::link('<i class="fa fa-power-off"></i> Keluar',array('site/logout')) ?>
                            </li>
                        </ul>
                        <!-- /.dropdown-user -->
                    </li>

                    <!-- /.dropdown -->
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- Left navbar-header -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse slimscrollsidebar">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                        <!-- input-group -->
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search..."> <span class="input-group-btn">
            <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
            </span> </div>
                        <!-- /input-group -->
                    </li>
                    <li class="user-pro">
                    <a href="#" class="waves-effect">
                    <?php echo
                    '<img src='.Yii::app()->request->baseUrl.'/images/206853.png alt="user-img" class="img-circle">';?>
                    <span class="hide-menu"></span>
                    </a>
                    </li>
                    <!--<li class="nav-small-cap m-t-10">--- Main Menu</li>-->
                    <li>
                        <a class="active" href="site/index"><i class="fa fa-dashboard p-r-10"></i><span class="sidebar-mini-hide">Beranda</span></a>
                    </li>

                    
                    <li> <a href="#" class="waves-effect"><i data-icon="7" class="fa fa-hospital-o p-r-10"></i> <span class="hide-menu">Rumah Sakit<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <?php echo CHtml::link('Kelola Rumah Sakit',array('rumahSakit/admin')); ?> </li>
                        </ul>
                    </li>
                    


                    <li> <a href="#" class="waves-effect"><i data-icon="7" class="fa fa-medkit p-r-10"></i> <span class="hide-menu">Puskesmas<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <?php echo CHtml::link('Kelola Puskesmas',array('puskesmas/admin')); ?> </li>
                        </ul>
                    </li>


                    <li> <a href="#" class="waves-effect"><i data-icon="7" class="fa fa-stethoscope p-r-10"></i> <span class="hide-menu">Poli/Klinik<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                        <li> <?php echo CHtml::link('Kelola Poli/Klinik',array('poliKlinik/admin')); ?> </li>
                        </ul>
                    </li>

                    <li> <a href="#" class="waves-effect"><i data-icon="7" class="icon-people p-r-10"></i> <span class="hide-menu">Pasien<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                        <li> <?php echo CHtml::link('Kelola Pasien',array('pasien/admin')); ?> </li>
                        </ul>
                    </li>

                    <li> <a href="#" class="waves-effect"><i data-icon="7" class="fa fa-wechat p-r-10"></i> <span class="hide-menu">Testimonial<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                        <li> <?php echo CHtml::link('Kelola Testimoni',array('testimoni/admin')); ?> </li>
                        </ul>
                    </li>


                    <li> <a href="#" class="waves-effect"><i data-icon="7" class="fa fa-user p-r-10"></i> <span class="hide-menu">User<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <?php echo CHtml::link('Kelola User',array('user/admin')); ?> </li>
                            
                        </ul>
                    </li>


                
                    <li> <a href="#" class="waves-effect"><i data-icon="7" class="fa fa-file-pdf-o p-r-10"></i> <span class="hide-menu">Laporan<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <?php echo CHtml::link('Format 1',array('master1/cetakFormat1')); ?> </li>
                            <li> <?php echo CHtml::link('Format 2',array('master1/cetakFormat2')); ?> </li>
                            <li> <?php echo CHtml::link('Format 3',array('master1/cetakFormat3')); ?> </li>
                            <li> <?php echo CHtml::link('Format 4',array('master1/cetakFormat4')); ?> </li>
                            <li> <?php echo CHtml::link('Format 5',array('site/cetakFormat5')); ?> </li>
                            <li> <?php echo CHtml::link('Format 6',array('master1/cetakFormat6')); ?> </li>
                            <!--<li> <?php echo CHtml::link('Report Format',array('master2/admin')); ?> </li>-->
                        </ul>
                    </li>
                

            </div>
        </div>
        <!-- Left navbar-header end -->
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-12 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">ADMIN PANEL E - HEALTH KBB</h4> </div>
                </div>

                <?php echo $content; ?>
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2017 &copy; Dinas Komunikasi Informatika & Statistik Kabupaten Bandung Barat  </footer>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
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
    <!--Morris JavaScript -->
    <script src="<?php echo Yii::app()->baseUrl; ?>/admin/plugins/bower_components/raphael/raphael-min.js"></script>
    <script src="<?php echo Yii::app()->baseUrl; ?>/admin/plugins/bower_components/morrisjs/morris.js"></script>
    <!-- Sparkline chart JavaScript -->
    <script src="<?php echo Yii::app()->baseUrl; ?>/admin/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!-- jQuery peity -->
    <script src="<?php echo Yii::app()->baseUrl; ?>/admin/plugins/bower_components/flot/excanvas.min.js"></script>
    <script src="<?php echo Yii::app()->baseUrl; ?>/admin/plugins/bower_components/flot/jquery.flot.js"></script>
    <script src="<?php echo Yii::app()->baseUrl; ?>/admin/plugins/bower_components/flot/jquery.flot.pie.js"></script>
    <script src="<?php echo Yii::app()->baseUrl; ?>/admin/plugins/bower_components/flot/jquery.flot.resize.js"></script>
    <script src="<?php echo Yii::app()->baseUrl; ?>/admin/plugins/bower_components/flot/jquery.flot.time.js"></script>
    <script src="<?php echo Yii::app()->baseUrl; ?>/admin/plugins/bower_components/flot/jquery.flot.stack.js"></script>
    <script src="<?php echo Yii::app()->baseUrl; ?>/admin/plugins/bower_components/flot/jquery.flot.crosshair.js"></script>
    <script src="<?php echo Yii::app()->baseUrl; ?>/admin/plugins/bower_components/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo Yii::app()->baseUrl; ?>/admin/js/custom.min.js"></script>
    <script>

    "use strict";

    Morris.Area({
            element: 'morris-area-chart2',
            data: [{
                period: '2010',
                OPD: 0,
                ICU: 0,

            }, {
                period: '2011',
                OPD: 130,
                ICU: 100,

            }, {
                period: '2012',
                OPD: 30,
                ICU: 60,

            }, {
                period: '2013',
                OPD: 30,
                ICU: 200,

            }, {
                period: '2014',
                OPD: 200,
                ICU: 150,

            }, {
                period: '2015',
                OPD: 105,
                ICU: 90,

            },
             {
                period: '2016',
                OPD: 250,
                ICU: 150,

            }],
            xkey: 'period',
            ykeys: ['OPD', 'ICU'],
            labels: ['OPD $', 'ICU $'],
            pointSize: 0,
            fillOpacity: 0.4,
            pointStrokeColors:['#b4becb', '#00c292'],
            behaveLikeLine: true,
            gridLineColor: '#e0e0e0',
            lineWidth: 0,
            smooth: false,
            hideHover: 'auto',
            lineColors: ['#b4becb', '#00c292'],
            resize: true

        });
    Morris.Bar({
            element: 'morris-area-chart1',
            data: [{
                period: '2010',
                OPD: 40,
                ICU: 50,

            }, {
                period: '2011',
                OPD: 130,
                ICU: 100,

            }, {
                period: '2012',
                OPD: 30,
                ICU: 60,

            }, {
                period: '2013',
                OPD: 30,
                ICU: 200,

            }, {
                period: '2014',
                OPD: 200,
                ICU: 150,

            }, {
                period: '2015',
                OPD: 105,
                ICU: 90,

            },
             {
                period: '2016',
                OPD: 250,
                ICU: 150,

            }],
            xkey: 'period',
            ykeys: ['OPD', 'ICU'],
            labels: ['OPD', 'ICU'],
            pointSize: 0,

            pointStrokeColors:['#469fb4', '#01c0c8'],
            barColors:['#469fb4', '#01c0c8'],
            behaveLikeLine: true,
            gridLineColor: '#e0e0e0',
            lineWidth: 0,
            smooth: false,
            hideHover: 'auto',
            lineColors: ['#469fb4', '#01c0c8'],
            resize: true

        });

    var sparklineLogin = function () {
      <?php
          $tahun = date('Y');
      ?>
    $("#sparkline8").sparkline([<?= $tahun?>,4,4,6,8,5,6,4,8,6,6,2 ], {
                type: 'line',
                width: '100%',
                height: '130',
                lineColor: '#00c292',
                fillColor: 'rgba(0, 194, 146, 0.2)',
                maxSpotColor: '#00c292',
                highlightLineColor: 'rgba(0, 0, 0, 0.2)',
                highlightSpotColor: '#00c292'
            });
            $("#sparkline9").sparkline([2,4,8,6,8,5,6,4,8,6,6,2 ], {
                type: 'line',
                width: '100%',
                height: '130',
                lineColor: '#03a9f3',
                fillColor: 'rgba(3, 169, 243, 0.2)',
                minSpotColor:'#03a9f3',
                maxSpotColor: '#03a9f3',
                highlightLineColor: 'rgba(0, 0, 0, 0.2)',
                highlightSpotColor: '#03a9f3'
            });
            $("#sparkline10").sparkline([2,4,4,6,8,5,6,4,8,6,6,2], {
                type: 'line',
                width: '100%',
                height: '130',
                lineColor: '#fb9678',
                fillColor: 'rgba(251, 150, 120, 0.2)',
                maxSpotColor: '#fb9678',
                highlightLineColor: 'rgba(0, 0, 0, 0.2)',
                highlightSpotColor: '#fb9678'
            });
    }
    var sparkResize;
    $(window).resize(function (e) {
        clearTimeout(sparkResize);
        sparkResize = setTimeout(sparklineLogin, 100);
    });
    sparklineLogin();
    </script>
    <script src="<?php echo Yii::app()->baseUrl; ?>/admin/js/jasny-bootstrap.js"></script>
    <!--Style Switcher -->
    <script src="<?php echo Yii::app()->baseUrl; ?>/admin/plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>

    <script src="<?php echo Yii::app()->baseUrl; ?>/admin/plugins/bower_components/datatables/jquery.dataTables.min.js"></script>
    <!-- start - This is for export functionality only -->
    <script src="<?php echo Yii::app()->baseUrl; ?>/https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo Yii::app()->baseUrl; ?>/admin/plugin-baru/buttons.flash.min.js"></script>
    <script src="<?php echo Yii::app()->baseUrl; ?>/admin/plugin-baru/jszip.min.js"></script>
    <script src="<?php echo Yii::app()->baseUrl; ?>/admin/plugin-baru/pdfmake.min.js"></script>
    <script src="<?php echo Yii::app()->baseUrl; ?>/admin/plugin-baru/vfs_fonts.js"></script>
    <script src="<?php echo Yii::app()->baseUrl; ?>/admin/plugin-baru/buttons.html5.min.js"></script>
    <script src="<?php echo Yii::app()->baseUrl; ?>/admin/plugin-baru/buttons.print.min.js"></script>

    <script src="<?php echo Yii::app()->baseUrl; ?>/admin/plugins/bower_components/custom-select/custom-select.min.js" type="text/javascript"></script>
    <script src="<?php echo Yii::app()->baseUrl; ?>/admin/plugins/bower_components/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>
    <script src="<?php echo Yii::app()->baseUrl; ?>/admin/plugins/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
    <script src="<?php echo Yii::app()->baseUrl; ?>/admin/plugins/bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="admin/plugins/bower_components/multiselect/js/jquery.multi-select.js"></script>
    <script src="<?php echo Yii::app()->baseUrl; ?>/admin/plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>

    <!-- Sweet alert -->

    <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/sweet-alert/sweet-alert.min.js"></script>



    <script>
        $(document).ready(function () {
            $('.table').DataTable({
					"language": {
						"search": "Cari:",
						"paginate": {
							"first":      "Pertama",
							"last":       "Terakhir",
							"next":       "Selanjutnya",
							"previous":   "Sebelumnya"
						},
						"zeroRecords":    "Data tidak ditemukan",
						"emptyTable":     "Data tidak tersedia",
						"info":           "Menampilkan _START_ hingga _END_ dari _TOTAL_ entri",
						"infoEmpty":      "Menampilkan 0 hingga 0 dari 0 entri",
						"infoFiltered":   "(disaring dari _MAX_ total entri)",
						"lengthMenu":     "Menampilkan _MENU_ entri",
						"loadingRecords": "Memuat...",
						"processing":     "Memroses..."
					}

			});
            $('#myTable').DataTable();
            $('#myTable1').DataTable();
            $('#myTable2').DataTable();
            $(document).ready(function () {
                var table = $('#example').DataTable({
                    "columnDefs": [
                        {
                            "visible": false
                            , "targets": 2
                        }
          ]
                    , "order": [[2, 'asc']]
                    , "displayLength": 25
                    , "drawCallback": function (settings) {
                        var api = this.api();
                        var rows = api.rows({
                            page: 'current'
                        }).nodes();
                        var last = null;
                        api.column(2, {
                            page: 'current'
                        }).data().each(function (group, i) {
                            if (last !== group) {
                                $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                                last = group;
                            }
                        });
                    }
                });
                // Order by the grouping
                $('#example tbody').on('click', 'tr.group', function () {
                    var currentOrder = table.order()[0];
                    if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                        table.order([2, 'desc']).draw();
                    }
                    else {
                        table.order([2, 'asc']).draw();
                    }
                });
            });
        });
        $('#example23').DataTable({
            dom: 'Bfrtip'
            , buttons: [
            //'copy', 'csv', 'excel', 'pdf', 'print'
        ]
        });
    </script>

    <script>

        // Date Picker
        jQuery('.mydatepicker, #datepicker').datepicker();
        jQuery('#datepicker-autoclose').datepicker({
            autoclose: true,
            format: 'yyyy-mm-dd',
            todayHighlight: true
        });
        jQuery('#datepicker-autoclose1').datepicker({
            autoclose: true,
            format: 'yyyy-mm-dd',
            todayHighlight: true
        });
        jQuery('#date-range').datepicker({
            toggleActive: true
        });
        jQuery('#datepicker-inline').datepicker({
            todayHighlight: true
        });
        // Daterange picker
        $('.input-daterange-datepicker').daterangepicker({
            buttonClasses: ['btn', 'btn-sm']
            , applyClass: 'btn-danger'
            , cancelClass: 'btn-inverse'
        });
        $('.input-daterange-timepicker').daterangepicker({
            timePicker: true
            , format: 'MM/DD/YYYY h:mm A'
            , timePickerIncrement: 30
            , timePicker12Hour: true
            , timePickerSeconds: false
            , buttonClasses: ['btn', 'btn-sm']
            , applyClass: 'btn-danger'
            , cancelClass: 'btn-inverse'
        });
        $('.input-limit-datepicker').daterangepicker({
            format: 'MM/DD/YYYY'
            , minDate: '06/01/2015'
            , maxDate: '06/30/2015'
            , buttonClasses: ['btn', 'btn-sm']
            , applyClass: 'btn-danger'
            , cancelClass: 'btn-inverse'
            , dateLimit: {
                days: 6
            }
        });
    </script>

   <script>
        
    </script>
    <?php echo CHtml::script("
        jQuery(document).ready(function () {
            // Switchery
            var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
            $('.js-switch').each(function () {
                new Switchery($(this)[0], $(this).data());
            });
            // For select 2
            $('.select2').select2();
            $('.selectpicker').selectpicker();
            //Bootstrap-TouchSpin
            $('.vertical-spin').TouchSpin({
                verticalbuttons: true
                , verticalupclass: 'ti-plus'
                , verticaldownclass: 'ti-minus'
            });
            var vspinTrue = $('.vertical-spin').TouchSpin({
                verticalbuttons: true
            });
            if (vspinTrue) {
                $('.vertical-spin').prev('.bootstrap-touchspin-prefix').remove();
            }
            $('input[name='tch1']').TouchSpin({
                min: 0
                , max: 100
                , step: 0.1
                , decimals: 2
                , boostat: 5
                , maxboostedstep: 10
                , postfix: '%'
            });
            $('input[name='tch2']').TouchSpin({
                min: -1000000000
                , max: 1000000000
                , stepinterval: 50
                , maxboostedstep: 10000000
                , prefix: '$'
            });
            $('input[name='tch3']').TouchSpin();
            $('input[name='tch3_22']').TouchSpin({
                initval: 40
            });
            $('input[name='tch5']').TouchSpin({
                prefix: 'pre'
                , postfix: 'post'
            });
            // For multiselect
            $('#pre-selected-options').multiSelect();
            $('#optgroup').multiSelect({
                selectableOptgroup: true
            });
            $('#public-methods').multiSelect();
            $('#select-all').click(function () {
                $('#public-methods').multiSelect('select_all');
                return false;
            });
            $('#deselect-all').click(function () {
                $('#public-methods').multiSelect('deselect_all');
                return false;
            });
            $('#refresh').on('click', function () {
                $('#public-methods').multiSelect('refresh');
                return false;
            });
            $('#add-option').on('click', function () {
                $('#public-methods').multiSelect('addOption', {
                    value: 42
                    , text: 'test 42'
                    , index: 0
                });
                return false;
            });
        });
    "); ?>


</body>

</html>
