<section id="main-content">
  <section class="wrapper site-min-height">
  <!-- page start-->
    <div class="row">
      <div class="col-md-12">
        <section class="panel">
          <header class="panel-heading">
            Data Karyawan
            <span class="tools pull-right">
              <a href="javascript:;" class="fa fa-chevron-down"></a>
              <!-- <a href="javascript:;" class="fa fa-timer"></a> -->
            </span>
          </header>
            <div class="panel-body" >
              <a data-toggle="modal" href="#myModal" class="btn btn-primary"><i class="fa fa-plus-square"> Tambah Data Karyawan</i></a>
            </div>
            <!-- Modal -->
              <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Isi Data Karyawan</h4>
                    </div>
                    <div class="panel-body">
                      <?php
                      $attributes = array('class' => 'cmxform form-horizontal tasi-form');
                      echo form_open_multipart(site_url("C_karyawan/add_karyawan"), $attributes);
                      ?>
                      <div class="form-group">
                        <label class="control-label col-md-3">ID Karyawan</label>
                          <div class="col-md-4">
                            <input type="text" class="form-control" placeholder="ID Karyawan" name="id_karyawan" />
                          </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3">Nama Karyawan</label>
                          <div class="col-md-7">
                            <input type="text" class="form-control" placeholder="Nama Karyawan" name="nm_karyawan" />
                          </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3">Alamat</label>
                          <div class="col-md-9">
                            <textarea class="form-control" cols="30" rows="3" name="alamat" placeholder="Alamat"></textarea>
                          </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3">Telepon</label>
                          <div class="col-md-5">
                            <input type="text" class="form-control" placeholder="Telepon" name="telepon" />
                          </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3">Password</label>
                          <div class="col-md-5">
                            <input type="text" class="form-control" placeholder="Password" name="password" />
                          </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3">ID Manager</label>
                          <div class="col-md-4">
                            <input type="text" class="form-control" placeholder="ID Manager" name="id_manager" disabled="true" />
                          </div>
                            <a data-toggle="modal" href="#myModal3" class="btn btn-primary"><i class="fa fa-search"> Cari</i></a>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3">ID Departmen</label>
                          <div class="col-md-4">
                            <input type="text" class="form-control" placeholder="ID Departmen" name="id_departmen" disabled="true" />
                          </div>
                            <a data-toggle="modal" href="#myModal3" class="btn btn-primary"><i class="fa fa-search"> Cari</i></a>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3">Sisa Cuti</label>
                          <div class="col-md-3">
                            <input type="text" class="form-control" placeholder="Sisa Cuti" name="sisa_cuti" />
                          </div>
                      </div>
                      <div class="form-group">
                        <div class="col-lg-offset-3 col-lg-10">
                          <input type="submit" name="input" class="btn btn-success" value="Save">
                          <input type="reset" name="reset" class="btn btn-danger" value="Reset">
                          <input data-dismiss="modal" class="btn btn-default" type="button" value="Cancel">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- modal -->
              <!-- modal2 -->
              <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal2" class="modal fade">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Isi Data Karyawan</h4>
                    </div>
                    <div class="panel-body">
                      <?php
                      $attributes = array('class' => 'cmxform form-horizontal tasi-form');
                      echo form_open_multipart(site_url("C_karyawan/add_karyawan"), $attributes);
                      ?>
                      <div class="form-group">
                        <label class="control-label col-md-3">ID Karyawan</label>
                          <div class="col-md-4">
                            <input type="text" class="form-control" placeholder="ID Karyawan" name="id_karyawan" />
                          </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3">Nama Karyawan</label>
                          <div class="col-md-7">
                            <input type="text" class="form-control" placeholder="Nama Karyawan" name="nm_karyawan" />
                          </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3">Alamat</label>
                          <div class="col-md-9">
                            <input type="text" class="form-control" placeholder="Alamat" name="alamat" />
                          </div>
                      </div>
                      <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                          <input type="submit" name="input" class="btn btn-success" value="Save">
                          <input type="reset" name="reset" class="btn btn-danger" value="Reset">
                          <input data-dismiss="modal" class="btn btn-default" type="button" value="Cancel">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- modal2 -->
              <div class="panel-body">
                <div class="adv-table">
                  <table  class="display table table-bordered table-striped" id="example">
                    <thead>
                      <tr>
                        <th>ID Karyawan</th>
                        <th>Nama Karyawan</th>
                        <th>Alamat</th>
                        <th>Telepon</th>
                        <th>Email</th>
                        <th>ID Manager</th>
                        <th>ID Departmen</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      foreach ($data_karyawan as $row_data) {
                      ?>
                      <tr>
                        <td><?php echo $row_data->id_karyawan;?></td>
                        <td><?php echo $row_data->nm_karyawan;?></td>
                        <td><?php echo $row_data->alamat;?></td>
                        <td><?php echo $row_data->no_telp;?></td>
                        <td><?php echo $row_data->email;?></td>
                        <td><?php echo $row_data->id_manager;?></td>
                        <td><?php echo $row_data->id_departmen?></td>
                        <td>
                        <div class="btn btn-default">
                          <a href="#"><i class="fa fa-edit"></i></a>
                        </div>
                        <div class="btn btn-danger">
                          <a href="#"><i class="fa fa-times"></i></a>
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