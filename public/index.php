<?php
include "../vendor/autoload.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Server Admin | </title>

    <!-- Bootstrap -->
    <link href="bower/gentelella/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="bower/gentelella/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="bower/gentelella/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="bower/gentelella/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- jVectorMap -->
    <link href="bower/gentelella/production/css/maps/jquery-jvectormap-2.0.3.css" rel="stylesheet"/>

    <!-- Custom Theme Style -->
    <link href="bower/gentelella/build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
<?php $disk = new \ServerInfo\Disk(); ?>
<div class="container body">
    <div class="main_container">

        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="#" class="site_title"><i class="fa fa-server"></i> <span>Server Admin</span></a>
                </div>

                <div class="clearfix"></div>
            </div>
        </div>


        <div class="right_col" role="main">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="dashboard_graph">
                        <div class="col-md-3 col-sm-3 col-xs-12 bg-white">
                            <div class="x_title">
                                <h2>Info</h2>
                                <div class="clearfix"></div>
                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-6">
                                <div>
                                    <p>Disk Usage</p>
                                    <div class="">
                                        <div class="progress progress_sm" style="width: 76%;">
                                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="<?=round(($disk->freeSpace()/$disk->totalSpace())*100, 0);?>"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="clearfix"></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- jQuery -->
<script src="bower/gentelella/vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="bower/gentelella/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="bower/gentelella/vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="bower/gentelella/vendors/nprogress/nprogress.js"></script>
<!-- Chart.js -->
<script src="bower/gentelella/vendors/Chart.js/dist/Chart.min.js"></script>
<!-- gauge.js -->
<script src="bower/gentelella/vendors/bernii/gauge.js/dist/gauge.min.js"></script>
<!-- bootstrap-progressbar -->
<script src="bower/gentelella/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<!-- iCheck -->
<script src="bower/gentelella/vendors/iCheck/icheck.min.js"></script>
<!-- Skycons -->
<script src="bower/gentelella/vendors/skycons/skycons.js"></script>
<!-- Flot -->
<script src="bower/gentelella/vendors/Flot/jquery.flot.js"></script>
<script src="bower/gentelella/vendors/Flot/jquery.flot.pie.js"></script>
<script src="bower/gentelella/vendors/Flot/jquery.flot.time.js"></script>
<script src="bower/gentelella/vendors/Flot/jquery.flot.stack.js"></script>
<script src="bower/gentelella/vendors/Flot/jquery.flot.resize.js"></script>
<!-- Flot plugins -->
<script src="bower/gentelella/production/js/flot/jquery.flot.orderBars.js"></script>
<script src="bower/gentelella/production/js/flot/date.js"></script>
<script src="bower/gentelella/production/js/flot/jquery.flot.spline.js"></script>
<script src="bower/gentelella/production/js/flot/curvedLines.js"></script>
<!-- jVectorMap -->
<script src="bower/gentelella/production/js/maps/jquery-jvectormap-2.0.3.min.js"></script>
<!-- bootstrap-daterangepicker -->
<script src="bower/gentelella/production/js/moment/moment.min.js"></script>
<script src="bower/gentelella/production/js/datepicker/daterangepicker.js"></script>

<!-- Custom Theme Scripts -->
<script src="bower/gentelella/build/js/custom.min.js"></script>

<!-- jVectorMap -->
<script src="bower/gentelella/production/js/maps/jquery-jvectormap-world-mill-en.js"></script>
<script src="bower/gentelella/production/js/maps/jquery-jvectormap-us-aea-en.js"></script>
<script src="bower/gentelella/production/js/maps/gdp-data.js"></script>
</body>
</html>