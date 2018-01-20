<section id="main-content">
  <section class="wrapper site-min-height">
  <!-- page start-->
    <div class="row">
      <div class="col-md-12">
        <section class="panel">
          <header class="panel-heading">
            Form Cuti
            <span class="tools pull-right">
              <a href="javascript:;" class="fa fa-chevron-down"></a>
              <!-- <a href="javascript:;" class="fa fa-timer"></a> -->
            </span>
          </header>
            <div class="panel-body" >
              <a data-toggle="modal" href="#myModal" class="btn btn-primary"><i class="fa fa-plus-square"> AJUKAN CUTI</i></a>
            </div>
            <!-- Modal -->
              <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Form Cuti</h4>
                    </div>
                    <div class="panel-body">
                      <?php
                      $attributes = array('class' => 'cmxform form-horizontal tasi-form');
                      echo form_open_multipart(site_url("C_form_cuti/add_form_cuti"), $attributes);
                      ?>
                      <div class="form-group">
                        <label class="control-label col-md-3">ID Form Cuti</label>
                          <div class="col-md-4">
                            <input type="text" class="form-control" placeholder="ID Form Cuti" name="id_fcuti" id="id_fcuti" disabled="true" />
                          </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3">Tanggal Form Cuti</label>
                          <div class="col-md-7">
                            <input type="text" class="form-control" placeholder="Nama Karyawan" name="nm_karyawan" />
                          </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3">Jenis Cuti</label>
                          <div class="col-md-9">
                            <textarea class="form-control" cols="30" rows="3" name="alamat" placeholder="Alamat"></textarea>
                          </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3">Tanggal Mulai Cuti</label>
                          <div class="col-md-5">
                            <input type="text" class="form-control" placeholder="Telepon" name="telepon" />
                          </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3">Tanggal Akhir Cuti</label>
                          <div class="col-md-5">
                            <input type="text" class="form-control" placeholder="Password" name="password" />
                          </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3">Alasan</label>
                          <div class="col-md-4">
                            <input type="text" class="form-control" placeholder="ID Manager" name="id_manager" disabled="true" />
                          </div>
                      </div>
                      <div class="form-group">
                        <div class="col-lg-offset-3 col-lg-10">
                          <input type="submit" name="input" id="btn_save" class="btn btn-success" value="Save">
                          <input type="reset" name="reset" class="btn btn-danger" value="Reset">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- modal -->
              <div class="panel-body">
                <div class="adv-table">
                  <table  class="display table table-bordered table-striped" id="example">
                    <thead>
                      <tr>
                        <th>ID Form Cuti</th>
                        <th>Tanggal Form Cuti</th>
                        <th>Jenis Cuti</th>
                        <th>Tanggal Mulai Cuti</th>
                        <th>Tanggal Akhir Cuti</th>
                        <th>Alasan</th>
                        <th>ID Karyawan</th>
                        <th>Nama Karyawan</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      foreach ($data_form_cuti as $row_data) {
                      ?>
                      <tr>
                        <td><?php echo $row_data->form_cuti.id_fcuti;?></td>
                        <td><?php echo $row_data->tgl_fcuti;?></td>
                        <td><?php echo $row_data->jenis_cuti;?></td>
                        <td><?php echo $row_data->tgl_mulai;?></td>
                        <td><?php echo $row_data->tgl_akhir;?></td>
                        <td><?php echo $row_data->alasan;?></td>
                        <td><?php echo $row_data->id_karyawan?></td>
                        <td><?php echo $row_data->id_karyawan?></td>
                        <td>
                        <div class="btn btn-default">
                          <a data-toggle="modal" href="#myModal" id="btn_ubah" onclick="get_form_cuti('<?php echo $row_data->id_fcuti; ?>',
                                                                                                '<?php echo $row_data->tgl_fcuti; ?>',
                                                                                                '<?php echo $row_data->jenis_cuti; ?>',
                                                                                                '<?php echo $row_data->tgl_mulai; ?>',
                                                                                                '<?php echo $row_data->tgl_akhir; ?>',
                                                                                                '<?php echo $row_data->alasan; ?>',
                                                                                                '<?php echo $row_data->id_karyawan; ?>',
                                                                                                '<?php echo $row_data->nm_karyawan; ?>',
                                                                                                )">
                          <i class="fa fa-edit"></i></a>
                        </div>
                        <div class="btn btn-danger">
                          <a href="<?php echo base_url(); ?>C_karyawan/delete/<?php echo $row_data->id_karyawan; ?>" onclick="return confirm('Are you sure you want to delete this?')"><i class="fa fa-times"></i></a>
                        </div>
                        </td>
                      </tr>
                      <?php
                      }
                      ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </section>
          <!-- page end-->
          </section>
        </section>