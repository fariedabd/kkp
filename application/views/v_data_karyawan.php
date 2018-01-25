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
            <div class="panel-body" >
              <a data-toggle="modal" href="#myModal" class="btn btn-primary" id="btn_tambah"><i class="fa fa-plus-square"> Tambah Data Karyawan</i></a>
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
                            <input type="text" class="form-control" placeholder="ID Karyawan" name="id_karyawan" id="id_karyawan" />
                          </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3">Nama Karyawan</label>
                          <div class="col-md-7">
                            <input type="text" class="form-control" placeholder="Nama Karyawan" name="nm_karyawan" id="nm_karyawan" />
                          </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3">Alamat</label>
                          <div class="col-md-9">
                            <textarea class="form-control" cols="30" rows="3" name="alamat" placeholder="Alamat" id="alamat"></textarea>
                          </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3">Telepon</label>
                          <div class="col-md-5">
                            <input type="text" class="form-control" placeholder="Telepon" name="telepon" id="telepon" />
                          </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3">E-Mail</label>
                          <div class="col-md-5">
                            <input type="text" class="form-control" placeholder="E-Mail" name="email" id="email" />
                          </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3">Password</label>
                          <div class="col-md-5">
                            <input type="text" class="form-control" placeholder="Password" name="password" id="password" />
                          </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3">Jabatan</label>
                          <div class="col-md-4">
                            <select class="form-control" placeholder="ID Jabatan" name="id_jabatan" id="id_jabatan" />
                              <?php
                              foreach ($jabatan as $row) {
                               ?>
                               <option value="<?php echo $row->id_jabatan;?>"><?php echo $row->nm_jabatan;?></option>
                               <?php
                              }
                              ?>
                              
                            </select>
                          </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3">ID Manager</label>
                          <div class="col-md-4">
                            <select class="form-control" placeholder="ID Manager" name="id_manager" id="id_manager" />
                             <?php
                              foreach ($karyawan as $row) {
                                if ($row->id_jabatan=='02') {
                                  ?>
                                    <option value="<?php echo $row->id_karyawan;?>"><?php echo $row->nm_karyawan;?></option>
                                  <?php
                                }
                               }
                              ?>
                            </select>
                          </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3">ID Departmen</label>
                          <div class="col-md-4">
                            <select class="form-control" placeholder="ID Departmen" name="id_departmen" id="id_departmen" />
                             <?php
                              foreach ($departmen as $row) {
                               ?>
                               <option value="<?php echo $row->id_departmen;?>"><?php echo $row->nm_departmen;?></option>
                               <?php
                              }
                              ?>
                            </select>
                          </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3">Sisa Cuti</label>
                          <div class="col-md-3">
                            <input type="text" class="form-control" placeholder="Sisa Cuti" name="sisa_cuti" id="sisa_cuti" />
                          </div>
                      </div>
                      <div class="form-group">
                        <div class="col-lg-offset-3 col-lg-10">
                          <input type="submit" name="input" id="btn_save" class="btn btn-success" value="Save">
                          <input type="submit" name="update" id="btn_update" class="btn btn-warning" value="Update">
                          <input type="reset" name="reset" class="btn btn-danger" value="Reset">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- modal -->
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
                          <a data-toggle="modal" href="#myModal" id="btn_ubah" onclick="get_karyawan('<?php echo $row_data->id_karyawan; ?>',
                                                                                                '<?php echo $row_data->nm_karyawan; ?>',
                                                                                                '<?php echo $row_data->alamat; ?>',
                                                                                                '<?php echo $row_data->no_telp; ?>',
                                                                                                '<?php echo $row_data->email; ?>',
                                                                                                '<?php echo $row_data->password; ?>',
                                                                                                '<?php echo $row_data->id_jabatan; ?>',
                                                                                                '<?php echo $row_data->id_manager; ?>',
                                                                                                '<?php echo $row_data->sisa_cuti; ?>'
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
        <script>
            $(document).ready(function(){
              $('#btn_tambah').click(function(){
                  $('#btn_save').removeAttr("disabled");
                  $('#btn_update').attr("disabled", true);
              });
            });

                function get_karyawan(id,nama,alamat,telepon,email,password,id_jabatan,id_manager,sisa_cuti){
                    $(document).ready(function(){
                      $('#id_karyawan').val(id);
                      $('#nm_karyawan').val(nama);
                      $('#alamat').val(alamat);
                      $('#telepon').val(telepon);
                      $('#email').val(email);
                      $('#password').val(password);
                      $('#id_jabatan').val(id_jabatan);
                      $('#id_manager').val(id_manager);
                      $('#sisa_cuti').val(sisa_cuti);
                      $('#id_karyawan').removeAttr("disabled");
                      $('#btn_update').removeAttr("disabled");
                      $('#btn_save').attr("disabled", true);
                      $('#password').attr("aria-hidden");
                    });
                }
        </script>