<section id="main-content">
  <section class="wrapper site-min-height">
  <!-- page start-->
    <section class="panel">
      <header class="panel-heading">
        Data Departmen
          <span class="tools pull-right">
            <a href="javascript:;" class="fa fa-chevron-down"></a>
            <!-- <a href="javascript:;" class="fa fa-timer"></a> -->
          </span>
      </header>
      <div class="panel-body" >
              <a data-toggle="modal" href="#myModal" class="btn btn-primary" id="btn_tambah">Tambah Data Departmen</a>
            </div>
            <!-- Modal -->
              <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Isi Data Departmen</h4>
                    </div>
                    <div class="panel-body">
                    <?php
                    $attributes = array('class' => 'cmxform form-horizontal tasi-form');
                    echo form_open_multipart(site_url("C_dpt/add_dpt"), $attributes);
                    ?>
                    <div class="form-group">
                      <label class="control-label col-md-3">ID Departmen</label>
                        <div class="col-md-4">
                          <input type="text" class="form-control" placeholder="ID Departmen" name="id_departmen" id="id_departmen" />
                        </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3">Nama Departmen</label>
                        <div class="col-md-7">
                          <input type="text" class="form-control" placeholder="Nama Departmen" name="nm_departmen" id="nm_departmen" />
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
      <div class="panel-body">
        <div class="adv-table">
          <table  class="display table table-bordered table-striped" id="example">
            <thead>
              <tr>
                <th>ID Departmen</th>
                <th>Nama Departmen</th>
                <th>ID Manager</th>
                <th>Action</th>
              </tr>
            </thead>
              <tbody>
                <?php
                  foreach ($data_dpt as $row_data) {
                ?>
                <tr>
                  <td><?php echo $row_data->id_departmen;?></td>
                  <td><?php echo $row_data->nm_departmen;?></td>
                  <td><?php echo $row_data->id_manager;?></td>
                  <td>
                  <div class="btn btn-default">
                          <a data-toggle="modal" href="#myModal" id="btn_ubah" onclick="get_dpt('<?php echo $row_data->id_departmen; ?>',
                                                                                                '<?php echo $row_data->nm_departmen; ?>', 
                                                                                                '<?php echo $row_data->id_manager; ?>')">
                          <i class="fa fa-edit"></i></a>
                        </div>
                        <div class="btn btn-danger">
                          <a href="<?php echo base_url(); ?>C_dpt/delete/<?php echo $row_data->id_departmen; ?>" onclick="return confirm('Are you sure you want to delete this?')"><i class="fa fa-times"></i></a>
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

        function get_dpt(id,nama,manager){
            $(document).ready(function(){
              $('#id_departmen').val(id);
              $('#nm_departmen').val(nama);
              $('#id_manager').val(manager);
              $("#btn_update").removeAttr("disabled");
              $('#btn_save').attr("disabled", true);
            });
        }
</script>