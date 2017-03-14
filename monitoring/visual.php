<!DOCTYPE html>
<html lang="en">

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Monitoring Sampah</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    
    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
      <style>
          .gedung{
              text-align: center;
              width: 100%;
              height: 150px;
              background-color: bisque;
              border: 1px solid black;
              margin-left: auto;
              margin-right: auto;
              
          }
          .tong{
              position: absolute;
              width: 60px;
              height: 66px;
              background-color: chocolate;
              bottom: 3px;
              
          }
          .tutup{
              
              width: 80px;
              height: 10px;
              background-color: chocolate;
              
          }
          .relatif{
              position: relative;
          }
          .atap{
              width: 50%;
              
              height: 100px;
              background-color: bisque;
              border: 1px solid black;
              margin-left: auto;
              margin-right: auto;
              
          }
          .pucuk{
              
              margin-top: 150px;
  width: 0; 
  height: 0; 
  border-left: 265px solid transparent;
  border-right: 265px solid transparent;
  
  border-bottom: 55px solid bisque;
margin-left: auto;
              margin-right: auto;
          }
      </style>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-desktop"></i> <span>Monitoring</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Selamat datang,</span>
                <h2>Admin</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="protel.php"><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a></li>
                  <li><a href="sampah.php"><i class="fa fa-trash"></i> Tempat Sampah <span class="fa fa-chevron-down"></span></a></li>
                    <li><a href="#"><i class="fa fa-building"></i> Denah <span class="fa fa-chevron-down"></span></a></li>
                </ul>
                
                 
                
              </div>


            </div>
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
          </div>    
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Denah</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings 1</a>
                        </li>
                        <li><a href="#">Settings 2</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">

                  <!-- modals -->
                  <!-- Large modal -->
                  <div class="row">
                      <div class="col-md-3">
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg"></button>
                      </div>
                      <div class="col-md-3">
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg"></button>
                      </div>
                     <div class="col-md-3">
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg"></button>
                      </div>
                        <div class="col-md-3">
                         
                      </div>
                  </div><br><br><br><br><br>
                  <div class="row">
                      <div class="col-md-3">
                          
                      </div>
                      <div class="col-md-3">
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg"></button>
                      </div>
                     <div class="col-md-3">
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg"></button>
                      </div>
                        <div class="col-md-3">
                         <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg"></button>
                      </div>
                  </div><br><br><br><br><br>
                  <div class="row">
                      <div class="col-md-3">
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg"></button>
                      </div>
                      <div class="col-md-3">
                          
                      </div>
                     <div class="col-md-3">
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg"></button>
                      </div>
                        <div class="col-md-3">
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg"></button>
                      </div>
                  </div>
                  

                  <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel">ID 1</h4>
                        </div>
                        <div class="modal-body">
                                <div class="row">
                                <div class="progress_title">
                                  <span class="left">Tong sampah 1</span>
                                  <div class="clearfix"></div>
                                </div>
                                <div class="col-xs-2">
                                  <span>Isi</span>
                                </div>
                                <div class="col-xs-8">
                                  <div class="progress progress_sm">
                                    <div id="persen" class="progress-bar bg-blue" role="progressbar" data-transitiongoal="<?php include 'data.php'; ?>"></div>
                                  </div>
                                </div>
                                <div class="col-xs-2 more_info">
                                  <span><div id="sampah1"></div></span>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-xs-2">
                                  <span>Bau</span>
                                </div>
                                <div class="col-xs-8">
                                  <div class="progress progress_sm">
                                    <div id="persen" class="progress-bar bg-red" role="progressbar" data-transitiongoal="<?php include 'data4.php'; ?>"></div>
                                  </div>
                                </div>
                                <div class="col-xs-2 more_info">
                                  <span><div id="bau1"></div></span>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-xs-2">
                                  <span>Status</span>
                                </div>
                                <div class="col-xs-1 more_info">
                                  <span><div id="status1"></div></span>
                                </div>
                                <div class="col-xs-9 more_info"></div>
                              </div>

                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>

                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
            
        </div>
        </div>
        
        <footer>
          <div class="pull-right">
            Proyek Telematika oleh Kelompok 1
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
  

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- jQuery Sparklines -->
    <script src="../vendors/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <!-- morris.js -->
    <script src="../vendors/raphael/raphael.min.js"></script>
    <script src="../vendors/morris.js/morris.min.js"></script>
    <!-- gauge.js -->
    <script src="../vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- Skycons -->
    <script src="../vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="../vendors/Flot/jquery.flot.js"></script>
    <script src="../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../vendors/DateJS/build/date.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
      
    <script type="text/javascript">
		$(document).ready(function() {
			setInterval(function () {
				$('#sampah1').load('data.php')
			}, 500);
		});
	</script>
    <script type="text/javascript">
		$(document).ready(function() {
			setInterval(function () {
				$('#bau1').load('data4.php')
			}, 500);
		});
	</script>
    <script type="text/javascript">
		$(document).ready(function() {
			setInterval(function () {
				$('#sampah2').load('data2.php')
			}, 500);
		});
	</script>
        <script type="text/javascript">
		$(document).ready(function() {
			setInterval(function () {
				$('#bau2').load('data5.php')
			}, 500);
		});
	</script>
        <script type="text/javascript">
		$(document).ready(function() {
			setInterval(function () {
				$('#sampah3').load('data3.php')
			}, 500);
		});
	</script>
    <script type="text/javascript">
		$(document).ready(function() {
			setInterval(function () {
				$('#bau3').load('data6.php')
			}, 500);
		});
	</script>
    <script type="text/javascript">
		$(document).ready(function() {
			setInterval(function () {
				$('#status1').load('data-status1.php')
			}, 500);
		});
	</script>
    <script type="text/javascript">
		$(document).ready(function() {
			setInterval(function () {
				$('#status2').load('data-status2.php')
			}, 500);
		});
	</script>
    <script type="text/javascript">
		$(document).ready(function() {
			setInterval(function () {
				$('#status3').load('data-status3.php')
			}, 500);
		});
	</script>

  </body>
</html>