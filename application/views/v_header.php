<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>EKREASI</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/bootstrap-fileupload/bootstrap-fileupload.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/bootstrap-datepicker/css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/bootstrap-timepicker/compiled/timepicker.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/bootstrap-colorpicker/css/colorpicker.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/bootstrap-daterangepicker/daterangepicker-bs3.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/bootstrap-datetimepicker/css/datetimepicker.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/jquery-multi-select/css/multi-select.css" />
    <link href="<?php echo base_url(); ?>assets/advanced-datatable/media/css/demo_page.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/advanced-datatable/media/css/demo_table.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/data-tables/DT_bootstrap.css" />


    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/style-responsive.css" rel="stylesheet" />
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

  <section id="container">
      <!--header start-->
      <header class="header white-bg">
          <div class="sidebar-toggle-box">
              <div data-original-title="Toggle Navigation" data-placement="right" class="fa fa-bars tooltips"></div>
          </div>
          <!--logo start-->
          <a href="<?php echo base_url(); ?>C_index" class="logo" >PT<span>INTEGRASI MEDIA KREASI</span></a>
          <!--logo end-->
          <div class="top-nav ">
              <ul class="nav pull-right top-menu">
                  <!-- user login dropdown start-->
                  <li class="dropdown">
                      <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                          <span class="username">
                            <?php
                              foreach ($karyawan as $row) {
                                echo $row->nm_karyawan;
                              }
                            ?>
                          </span>
                          <b class="caret"></b>
                      </a>
                      <ul class="dropdown-menu extended logout">
                          <div class="log-arrow-up"></div>
                          <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                          <li><a href="<?php echo base_url(); ?>C_login/logout"><i class="fa fa-key"></i> Log Out</a></li>
                      </ul>
                  </li>
                  <!-- user login dropdown end -->
              </ul>
          </div>
      </header>
      <!--header end-->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
                  <?php
                    foreach ($karyawan as $row) {
                      if($row->id_jabatan == '02'){
                        ?>
                          <li class="sub-menu">
                              <a href="index.html">
                                  <i class="fa fa-book"></i>
                                  <span>Data Master</span>
                              </a>
                              <ul class="sub" disabled="true">
                                  <li><a href="<?php echo base_url(); ?>C_karyawan">Karyawan</a></li>
                                  <li><a href="<?php echo base_url(); ?>C_dpt">Departemen</a></li>
                                  <li><a href="<?php echo base_url(); ?>C_jbt">Jabatan</a></li>
                              </ul>
                          </li>

                          <li class="sub-menu">
                              <a href="index.html">
                                  <i class="fa fa-tasks"></i>
                                  <span>Laporan</span>
                              </a>
                              <ul class="sub">
                                  <li><a  href="<?php echo base_url(); ?>C_lap_cuti_karyawan">Laporan Cuti Karyawan</a></li>
                                  <li><a  href="<?php echo base_url(); ?>C_lap_spl">Laporan SPL</a></li>
                                  <li><a  href="<?php echo base_url(); ?>C_dpt/index">Laporan Project</a></li>
                              </ul>
                          </li>
                        <?php
                      } else if($row->id_jabatan == '01'){
                        ?>
                          <li class="sub-menu">
                              <a href="index.html">
                                  <i class="fa fa-laptop"></i>
                                  <span>Transaksi</span>
                              </a>
                              <ul class="sub">
                                  <li><a  href="<?php echo base_url(); ?>C_form_cuti">Form Cuti</a></li>
                                  <li><a  href="<?php echo base_url(); ?>C_konfirmasi_cuti">Konfirmasi Cuti</a></li>
                                  <li><a  href="<?php echo base_url(); ?>C_spl">SPL</a></li>
                                  <li><a  href="<?php echo base_url(); ?>C_project">Project</a></li>
                              </ul>
                          </li>

                          <li class="sub-menu">
                              <a href="index.html">
                                  <i class="fa fa-tasks"></i>
                                  <span>Laporan</span>
                              </a>
                              <ul class="sub">
                                  <li><a  href="<?php echo base_url(); ?>C_lap_cuti_karyawan">Laporan Cuti Karyawan</a></li>
                                  <li><a  href="<?php echo base_url(); ?>C_lap_spl">Laporan SPL</a></li>
                                  <li><a  href="<?php echo base_url(); ?>C_dpt/index">Laporan Project</a></li>
                              </ul>
                          </li>
                         <?php
                      } else {
                        ?>
                        <li class="sub-menu">
                            <a href="index.html">
                                <i class="fa fa-laptop"></i>
                                <span>Transaksi</span>
                            </a>
                            <ul class="sub">
                                <li><a  href="<?php echo base_url(); ?>C_form_cuti">Form Cuti</a></li>
                                <li><a  href="<?php echo base_url(); ?>C_spl">SPL</a></li>
                                <li><a  href="<?php echo base_url(); ?>C_project">Project</a></li>
                            </ul>
                        </li>

                        <li class="sub-menu">
                            <a href="index.html">
                                <i class="fa fa-tasks"></i>
                                <span>Laporan</span>
                            </a>
                            <ul class="sub">
                                <li><a  href="<?php echo base_url(); ?>C_lap_cuti_karyawan">Laporan Cuti Karyawan</a></li>
                                <li><a  href="<?php echo base_url(); ?>C_lap_spl">Laporan SPL</a></li>
                                <li><a  href="<?php echo base_url(); ?>C_dpt/index">Laporan Project</a></li>
                            </ul>
                        </li>
                       <?php
                    }
                  }
                  ?>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>