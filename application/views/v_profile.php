<section id="main-content">
  <section class="wrapper site-min-height">
  <!-- page start-->
        <section class="panel">
          <header class="panel-heading">
            Data Karyawan
            <span class="tools pull-right">
              <a href="javascript:;" class="fa fa-chevron-down"></a>
              <!-- <a href="javascript:;" class="fa fa-timer"></a> -->
            </span>
          </header>
    <div class="panel-body">
                      <?php
                      $attributes = array('class' => 'cmxform form-horizontal tasi-form');
                      echo form_open_multipart(site_url("C_karyawan/add_karyawan"), $attributes);
                      ?>
                      <?php
                      foreach ($karyawan as $row_data) {
                        $id = $row_data->id_karyawan;
                        $nm = $row_data->nm_karyawan;
                        $alamat = $row_data->alamat;
                        $telepon = $row_data->no_telp;
                        $email = $row_data->email;
                        $pass = $row_data->password;
                      }
                      ?>
                      <tr>
                      <div class="form-group">
                        <label class="control-label col-md-3">ID Karyawan</label>
                          <div class="col-md-2">
                            <input type="text" class="form-control" placeholder="ID Karyawan" name="id_karyawan" id="id_karyawan" value="<?php echo $id; ?>" readonly />
                          </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3">Nama Karyawan</label>
                          <div class="col-md-5">
                            <input type="text" class="form-control" placeholder="Nama Karyawan" name="nm_karyawan" id="nm_karyawan" value="<?php echo $nm; ?>" />
                          </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3">Alamat</label>
                          <div class="col-md-7">
                            <textarea class="form-control" cols="30" rows="3" name="alamat" placeholder="Alamat" id="alamat" ><?php echo $alamat; ?></textarea>
                          </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3">Telepon</label>
                          <div class="col-md-4">
                            <input type="text" class="form-control" placeholder="Telepon" name="telepon" id="telepon" value="<?php echo $telepon; ?>"/>
                          </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3">E-Mail</label>
                          <div class="col-md-4">
                            <input type="text" class="form-control" placeholder="E-Mail" name="email" id="email" value="<?php echo $email; ?>"/>
                          </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3">Password</label>
                          <div class="col-md-4">
                            <input type="text" class="form-control" placeholder="Password" name="password" id="password" value="<?php echo $pass; ?>"/>
                          </div>
                      </div>
                      
                      <div class="form-group">
                        <div class="col-lg-offset-3 col-lg-10">
                          <input type="submit" name="update" id="btn_update" class="btn btn-warning" value="Update">
                          <input type="reset" name="reset" class="btn btn-danger" value="Reset">
                        </div>
                      </div>
                    </div>
    </section>
  </section>
</section>