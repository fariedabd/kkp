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
            
            <!-- Modal -->
              <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Konfirmasi Cuti</h4>
                    </div>
                    <div class="panel-body">
                      <?php
                      $attributes = array('class' => 'cmxform form-horizontal tasi-form');
                      echo form_open_multipart(site_url("C_form_cuti/add_form_cuti"), $attributes);
                      ?>
                      <?php
                        foreach ($last_id as $row) {
                          $id = $row->id_fcuti + 1;
                        }
                      ?>
                      <div class="form-group">
                        <label class="control-label col-md-3">ID Cuti</label>
                          <div class="col-md-2">
                            <input type="text" class="form-control" name="id_fcuti" id="id_fcuti" value="<?php echo $id; ?>" readonly />
                          </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3">Nama</label>
                          <div class="col-md-5">
                            <label class="control-label col-md-3"><b><div class="nm_karyawan"></div></b></label>
                          </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3">Tanggal Cuti</label>
                          <div class="col-md-7">
                            <label class="control-label col-md-12"><b>2018-01-01</b> s/d <b>2018-01-03</b></label>
                          </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3">Lama Cuti</label>
                          <div class="col-md-9">
                            <label class="control-label col-md-3"><b>3</b></label>
                          </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3">Alasan</label>
                          <div class="col-md-9">
                            <label class="control-label col-md-12">
                              asdasdasdas asdddddddddd asdddddddddddddddddddddd aaaaaaaaaaaaaaaaaa assssssssssssss qweeeeeeeeeeee qwe
                            </label>
                          </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3">Status</label>
                          <div class="col-md-5">
                            <select class="form-control">
                              <option>Menunggu Konfirmasi</option>
                              <option>Disetujui</option>
                              <option>Ditolak</option>
                            </select>
                          </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3">Keterangan</label>
                          <div class="col-md-9">
                            <textarea class="form-control"></textarea>
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
                        <th>ID Karyawan</th>
                        <th>Nama</th>
                        <th>Jabatan</th>
                        <th>Tgl Pengajuan</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        foreach ($list_cuti as $row) {
                          ?>
                            <tr>
                              <td><?php echo $row->id_karyawan; ?></td>
                              <td><?php echo $row->nm_karyawan; ?></td>
                              <td><?php echo $row->nm_jabatan; ?></td>
                              <td><?php echo $row->tgl_pengajuan; ?></td>
                              <td align="center">
                                <?php
                                  if($row->status_pengajuan == 1){
                                    $sts = "Menunggu konfirmasi";
                                  }else if($row->status_pengajuan == 2){
                                    $sts = "Disetujui";
                                  }else if($row->status_pengajuan == 3){
                                    $sts = "Tidak disetujui";
                                  }else{
                                    $sts = "";
                                  }
                                ?>
                                <span class="label label-warning"><?php echo $sts; ?></span>
                              </td>
                              <td>
                                <div class="btn btn-default">
                                  <a data-toggle="modal" href="#myModal" id="btn_view" onclick="get_karyawan_cuti('<?php echo $row->id_fcuti; ?>')">
                                  <i class="fa fa-eye"></i></a>
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
  function get_karyawan_cuti(id){
    $.ajax({
      url: "<?php echo base_url("c_konfirmasi_cuti/konfirmasi_cuti"); ?>",
      method: "POST",
      dataType: 'json',
      data: {id:id},
      success:function(data){
        var src = data;
        // var obj = JSON.parse(data);
        // var nm_karyawan = obj.name;
        alert(src);
      }
    });
  }
  // Untuk hitung jumlah cuti
  
</script>