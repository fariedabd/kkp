<!--main content start-->
<section id="main-content">
  <section class="wrapper site-min-height">
  <!--state overview start-->
  <?php
    foreach ($karyawan as $row) {
      if($row->id_jabatan == '02'){  //HRD
                        ?>
    <div class="row state-overview">
      <div class="col-lg-3 col-sm-6">
        <section class="panel">
          <div class="symbol terques">
            <i class="fa fa-user"></i>
          </div>
          <div class="value">
            <h1 class="count">
              0
            </h1>
            <p>Total Karyawan</p>
          </div>
        </section>
      </div>
      <div class="col-lg-3 col-sm-6">
        <section class="panel">
          <div class="symbol red">
            <i class="fa fa-tags"></i>
          </div>
          <div class="value">
            <h1 class=" count2">
              0
            </h1>
            <p>Total Form Cuti</p>
          </div>
        </section>
      </div>
      <div class="col-lg-3 col-sm-6">
        <section class="panel">
          <div class="symbol yellow">
            <i class="fa fa-shopping-cart"></i>
          </div>
          <div class="value">
            <h1 class=" count3">
              0
            </h1>
            <p>SPL</p>
          </div>
        </section>
      </div>
      <div class="col-lg-3 col-sm-6">
        <section class="panel">
          <div class="symbol blue">
            <i class="fa fa-bar-chart-o"></i>
          </div>
          <div class="value">
            <h1 class=" count4">
              0
            </h1>
            <p>Project</p>
          </div>
        </section>
      </div>
    </div>
    <?php
                      } else if($row->id_jabatan == '01'){   //Direktur
                        ?>
                        <div class="row state-overview">
      <div class="col-lg-3 col-sm-6">
        <section class="panel">
          <div class="symbol terques">
            <i class="fa fa-user"></i>
          </div>
          <div class="value">
            <h1 class="count">
              0
            </h1>
            <p>Total Karyawan</p>
          </div>
        </section>
      </div>
      <div class="col-lg-3 col-sm-6">
        <section class="panel">
          <div class="symbol red">
            <i class="fa fa-tags"></i>
          </div>
          <div class="value">
            <h1 class=" count2">
              0
            </h1>
            <p>Total Form Cuti</p>
          </div>
        </section>
      </div>
      <div class="col-lg-3 col-sm-6">
        <section class="panel">
          <div class="symbol yellow">
            <i class="fa fa-shopping-cart"></i>
          </div>
          <div class="value">
            <h1 class=" count3">
              0
            </h1>
            <p>SPL</p>
          </div>
        </section>
      </div>
      <div class="col-lg-3 col-sm-6">
        <section class="panel">
          <div class="symbol blue">
            <i class="fa fa-bar-chart-o"></i>
          </div>
          <div class="value">
            <h1 class=" count4">
              0
            </h1>
            <p>Project</p>
          </div>
        </section>
      </div>
    </div>
    <?php
                      } else if($row->id_jabatan == '01'){   //Direktur
                        ?>
                        <div class="row state-overview">
      <div class="col-lg-3 col-sm-6">
        <section class="panel">
          <div class="symbol terques">
            <i class="fa fa-user"></i>
          </div>
          <div class="value">
            <h1 class="count">
              0
            </h1>
            <p>Total Karyawan</p>
          </div>
        </section>
      </div>
      <div class="col-lg-3 col-sm-6">
        <section class="panel">
          <div class="symbol red">
            <i class="fa fa-tags"></i>
          </div>
          <div class="value">
            <h1 class=" count2">
              0
            </h1>
            <p>Total Form Cuti</p>
          </div>
        </section>
      </div>
      <div class="col-lg-3 col-sm-6">
        <section class="panel">
          <div class="symbol yellow">
            <i class="fa fa-shopping-cart"></i>
          </div>
          <div class="value">
            <h1 class=" count3">
              0
            </h1>
            <p>SPL</p>
          </div>
        </section>
      </div>
      <div class="col-lg-3 col-sm-6">
        <section class="panel">
          <div class="symbol blue">
            <i class="fa fa-bar-chart-o"></i>
          </div>
          <div class="value">
            <h1 class=" count4">
              0
            </h1>
            <p>Project</p>
          </div>
        </section>
      </div>
    </div>
    <?php
                    } else {
                      ?>
                        <div class="row state-overview">
      <br>
      <div class="col-lg-5 col-sm-6">
      <img src="img/logo.png">
      <br>
      <h2>
        <b>
        Selamat Datang <?php
                              foreach ($karyawan as $row) {
                                echo $row->nm_karyawan;
                              }
                            ?>
        </b>
      </h2>
      <br>
      </div>
      </div>
      <div class="row state-overview">
      <div class="col-lg-5 col-sm-6">
        <section class="panel">
          <a  href="<?php echo base_url(); ?>C_form_cuti">
          <div class="symbol terques">
            <i class="fa fa-user"></i>
          </div>
          <div class="value">
            <h1 class="count">
              0
            </h1>
            <p>Total Karyawan</p>
          </div>
          </a>
        </section>
      </div>
      </div>
      <div class="row state-overview">
      <div class="col-lg-5 col-sm-6">
        <section class="panel">
        <a  href="<?php echo base_url(); ?>C_spl">
          <div class="symbol red">
            <i class="fa fa-tags"></i>
          </div>
          <div class="value">
            <h1 class=" count2">
              0
            </h1>
            <p>Total Form Cuti</p>
          </div>
          </a>
        </section>
      </div>
                      <?php
                    }
                  }
                  ?>
    </div>
    </div>
    
  </section>
</section>
<!--main content end-->