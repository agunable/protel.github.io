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
                  <li><a href="#"><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a></li>
                  <li><a href="sampah.php"><i class="fa fa-trash"></i> Tempat Sampah <span class="fa fa-chevron-down"></span></a></li>
                  <li><a href="visual.php"><i class="fa fa-building"></i> Denah <span class="fa fa-chevron-down"></span></a></li>
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



            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12 widget_tally_box">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Status Sampah</h2>
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


<!-- TONG SAMPAH 1 -->
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
                      <br>
                      
<!-- TONG SAMPAH 2 -->
                    <div class="row">
                        <div class="progress_title">
                          <span class="left">Tong sampah 2</span>
                          <div class="clearfix"></div>
                        </div>
                        <div class="col-xs-2">
                          <span>Isi</span>
                        </div>
                        <div class="col-xs-8">
                          <div class="progress progress_sm">
                            <div id="persen" class="progress-bar bg-blue" role="progressbar" data-transitiongoal="<?php include 'data2.php'; echo "$apaa"; ?>"></div>
                          </div>
                        </div>
                        <div class="col-xs-2 more_info">
                          <span><div id="sampah2"></div></span>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-2">
                          <span>Bau</span>
                        </div>
                        <div class="col-xs-8">
                          <div class="progress progress_sm">
                            <div id="persen" class="progress-bar bg-red" role="progressbar" data-transitiongoal="<?php include 'data5.php'; ?>"></div>
                          </div>
                        </div>
                        <div class="col-xs-2 more_info">
                          <span><div id="bau2"></div></span>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-2">
                          <span>Status</span>
                        </div>
                        <div class="col-xs-1 more_info">
                          <span><div id="status2"></div></span>
                        </div>
                        <div class="col-xs-9 more_info"></div>
                      </div>
                      <br>
                      
<!-- TONG SAMPAH 3 -->
                    <div class="row">
                        <div class="progress_title">
                          <span class="left">Tong sampah 3</span>
                          <div class="clearfix"></div>
                        </div>
                        <div class="col-xs-2">
                          <span>Isi</span>
                        </div>
                        <div class="col-xs-8">
                          <div class="progress progress_sm">
                            <div id="persen" class="progress-bar bg-blue" role="progressbar" data-transitiongoal="<?php include 'data3.php'; echo "$apaa"; ?>"></div>
                          </div>
                        </div>
                        <div class="col-xs-2 more_info">
                          <span><div id="sampah3"></div></span>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-2">
                          <span>Bau</span>
                        </div>
                        <div class="col-xs-8">
                          <div class="progress progress_sm">
                            <div id="persen" class="progress-bar bg-red" role="progressbar" data-transitiongoal="<?php include 'data6.php'; ?>"></div>
                          </div>
                        </div>
                        <div class="col-xs-2 more_info">
                          <span><div id="bau3"></div></span>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-2">
                          <span>Status</span>
                        </div>
                        <div class="col-xs-1 more_info">
                          <span><div id="status3"></div></span>
                        </div>
                        <div class="col-xs-9 more_info"></div>
                      </div>
                      <br>
                      


                    </div>
                  </div>
                </div>
              </div>
              
            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Pegawai</h2>
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


                    <!-- start project list -->
                    <table class="table table-striped projects">
                      <thead>
                        <tr>
                          <th style="width: 1%">NO</th>
                          <th style="width: 10%">Nama</th>
                          <th style="width: 5%">Foto</th>
                          <th style="width: 10%">Notification</th>
                          <th style="width: 20%">Data</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>
                            <a>A.A.Ngurah Surya Laksman</a>
                            <br />
                            <small>Pegawai lantai 1</small>
                          </td>
                          <td>
                            <ul class="list-inline">
                              <li>
                                <img src="images/user.png" class="avatar" alt="Avatar">
                              </li>
                            </ul>
                          </td>
                          <td>
                            <a href="https://maker.ifttt.com/trigger/agung/with/key/JxrAEybRVmuu1SPxf7Foe" target="_blank"><button type="button" class="btn btn-success btn-xs">Notify</button></a>
                          </td>
                          <td>
                            <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                            <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                          </td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>
                            <a>Aldiansyah Ramadlan</a>
                            <br />
                            <small>Pegawai lantai 2</small>
                          </td>
                          <td>
                            <ul class="list-inline">
                              <li>
                                <img src="images/user.png" class="avatar" alt="Avatar">
                              </li>
                            </ul>
                          </td>
                          <td>
                            <a href="https://maker.ifttt.com/trigger/aldi/with/key/JxrAEybRVmuu1SPxf7Foe" target="_blank"><button type="button" class="btn btn-success btn-xs">Notify</button></a>
                          </td>
                          <td>
                            <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                            <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                          </td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>
                            <a>Rifqi Juli</a>
                            <br />
                            <small>Pegawai lantai 3</small>
                          </td>
                          <td>
                            <ul class="list-inline">
                              <li>
                                <img src="images/user.png" class="avatar" alt="Avatar">
                              </li>
                            </ul>
                          </td>
                          <td>
                            <a href="https://maker.ifttt.com/trigger/qijul/with/key/JxrAEybRVmuu1SPxf7Foe" target="_blank"><button type="button" class="btn btn-success btn-xs">Notify</button></a>
                          </td>
                          <td>
                            <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                            <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                          </td>
                        </tr>
                        <tr>
                          <td>4</td>
                          <td>
                            <a>Virbyansah Achmadan</a>
                            <br />
                            <small>Pegawai lantai 4</small>
                          </td>
                          <td>
                            <ul class="list-inline">
                              <li>
                                <img src="images/user.png" class="avatar" alt="Avatar">
                              </li>
                            </ul>
                          </td>
                          <td>
                            <a href="https://maker.ifttt.com/trigger/byan/with/key/JxrAEybRVmuu1SPxf7Foe" target="_blank"><button type="button" class="btn btn-success btn-xs">Notify</button></a>
                          </td>
                          <td>
                            <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                            <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                    

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