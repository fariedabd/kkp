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
              <a data-toggle="modal" href="#myModal" class="btn btn-primary" id="btn_tambah"><i class="fa fa-plus-square"> Tambah Data Jabatan</i></a>
            </div>
            
              <!-- modal2 -->
              <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Isi Data Jabatan</h4>
                    </div>
                    <div class="panel-body">
                      <?php
                      $attributes = array('class' => 'cmxform form-horizontal tasi-form');
                      echo form_open_multipart(site_url("C_jbt/add_jbt"), $attributes);
                      ?>
                      <div class="form-group">
                        <label class="control-label col-md-3">ID Jabatan</label>
                          <div class="col-md-4">
                            <input type="text" class="form-control" placeholder="ID Jabatan" name="id_jabatan" id="id_jabatan" />
                          </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3">Nama Jabatan</label>
                          <div class="col-md-7">
                            <input type="text" class="form-control" placeholder="Nama Jabatan" name="nm_jabatan" id="nm_jabatan" />
                          </div>
                      </div>
                      <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                          <input type="submit" name="input" id="btn_save" class="btn btn-success" value="Save">
                          <input type="submit" name="update" id="btn_update" class="btn btn-warning" value="Update">
                          <input type="reset" name="reset" class="btn btn-danger" value="Reset">
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
                        <th>ID Jabatan</th>
                        <th>Nama Jabatan</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      foreach ($data_jbt as $row_data) {
                      ?>
                      <tr>
                        <td><?php echo $row_data->id_jabatan;?></td>
                        <td><?php echo $row_data->nm_jabatan;?></td>
                        <td>
                        <div class="btn btn-default">
                          <a data-toggle="modal" href="#myModal" id="btn_ubah" onclick="get_jbt('<?php echo $row_data->id_jabatan; ?>', '<?php echo $row_data->nm_jabatan; ?>')"><i class="fa fa-edit"></i></a>
                        </div>
                        <div class="btn btn-danger">
                          <a href="<?php echo base_url(); ?>C_jbt/delete/<?php echo $row_data->id_jabatan; ?>" onclick="return confirm('Are you sure you want to delete this?')"><i class="fa fa-times"></i></a>
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
              $("#btn_tambah").click(function(){
                  $("#btn_save").removeAttr("disabled");
                  $('#btn_update').attr("disabled", true);
              });
            });

                function get_jbt(id,nama){
                    $(document).ready(function(){
                      $('#id_jabatan').val(id);
                      $('#nm_jabatan').val(nama);
                      $("#btn_update").removeAttr("disabled");
                      $('#btn_save').attr("disabled", true);
                    });
                }
        </script>