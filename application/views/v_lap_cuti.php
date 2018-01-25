<!--main content start-->
<section id="main-content">
  <section class="wrapper site-min-height">
  <!--state overview start-->
    <section class="panel">
      <header class="panel-heading">
        Laporan Cuti Periode
        <span class="tools pull-right">
        <a href="javascript:;" class="fa fa-chevron-down"></a>
        <!-- <a href="javascript:;" class="fa fa-timer"></a> -->
        </span>
      </header>
      <div class="panel-body">
      <?php
                      $attributes = array('class' => 'cmxform form-horizontal tasi-form');
                      echo form_open_multipart(site_url("C_lap_cuti/get_data"), $attributes);
                      ?>
                <div class="form-group">
                  <div class="col-md-6">
                    <div class="input-group input-large" data-date="13/07/2013" data-date-format="mm/dd/yyyy">
                      <input type="text" class="form-control dpd1" name="tgl_awal" id="tgl_awal" placeholder="Tanggal Awal">
                      <span class="input-group-addon">To</span>
                      <input type="text" class="form-control dpd2" name="tgl_akhir" id="tgl_akhir" placeholder="Tanggal Akhir">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-lg-offset-1 col-lg-10">
                      <input type="submit" name="input" id="btn_cetak" class="btn btn-success" value="Cetak">
                      <input type="reset" name="reset" class="btn btn-danger" value="Reset">
                    </div>
                  </div>
                </div>
              </div>
      </div>
    </section><section class="panel">
      <header class="panel-heading">
        Laporan Cuti Per Karyawan
        <span class="tools pull-right">
        <a href="javascript:;" class="fa fa-chevron-down"></a>
        <!-- <a href="javascript:;" class="fa fa-timer"></a> -->
        </span>
      </header>
      <div class="panel-body">
                <div class="form-group">
                        <label class="control-label col-md-3">ID Karyawan</label>
                          <div class="col-md-4">
                            <select class="form-control" placeholder="ID Jabatan" name="id_karyawan" id="id_karyawan" readonly />
                              <?php
                              foreach ($data_karyawan as $rowkaryawan) {
                               ?>
                               <option value="<?php echo $rowkaryawan->id_karyawan;?>"><?php echo $rowkaryawan->id_karyawan;?></option>
                               <?php
                              }
                              ?>
                              
                            </select>
                          </div>
                      </div>

                            <div class="form-group">
                        <label class="control-label col-md-3">Nama Karyawan</label>
                          <div class="col-md-7">
                            <input type="text" class="form-control" placeholder="Nama Karyawan" name="nm_karyawan" id="nm_karyawan" value="<?php echo $rowkaryawan->nm_karyawan;?>" />
                          </div>
                      </div>
                  <div class="form-group">
                    <div class="col-lg-offset-1 col-lg-10">
                      <input type="submit" name="submit" id="btn_save" class="btn btn-success" value="Save">
                      <input type="reset" name="reset" class="btn btn-danger" value="Reset">
                    </div>
                  </div>
                </div>
              </div>
      </div>
    </section>
   </section>
</section>
<!--main content end-->