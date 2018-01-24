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
                      echo form_open_multipart(site_url("C_konfirmasi_cuti/konfirmasi_cuti"), $attributes);
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
                          <div class="col-md-9">
                            <label class="control-label col-md-12">
                              <b class="tgl_mulai"></b> s/d <b class="tgl_akhir"></b>
                            </label>
                          </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3">Lama Cuti</label>
                          <div class="col-md-9">
                            <label class="control-label col-md-3"><b><div class="lm_cuti"></div></b></label>
                          </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3">Alasan</label>
                          <div class="col-md-9">
                            <label class="control-label col-md-12">
                              <b><div class="alasan"></div></b>
                            </label>
                          </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3">Status</label>
                          <div class="col-md-5">
                            <select class="form-control" id="status" name="status">
                              <option value="1">Menunggu Konfirmasi</option>
                              <option value="2">Disetujui</option>
                              <option value="3">Ditolak</option>
                            </select>
                          </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3">Keterangan</label>
                          <div class="col-md-9">
                            <textarea class="form-control" id="ket_dir" name="ket_dir"></textarea>
                          </div>
                      </div>
                      <div class="form-group">
                        <div class="col-lg-offset-3 col-lg-10">
                          <input type="submit" name="btn_confirm" id="btn_confirm" class="btn btn-success" value="Save">
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
                          if($row->status_pengajuan == "1"){
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
                                      $cls = "label label-warning";
                                    }else if($row->status_pengajuan == 2){
                                      $sts = "Disetujui";
                                      $cls = "label label-primary";
                                    }else if($row->status_pengajuan == 3){
                                      $sts = "Tidak disetujui";
                                      $cls = "label label-danger";
                                    }else{
                                      $sts = "";
                                      $cls = "";
                                    }
                                  ?>
                                  <span class="<?php echo $cls; ?>"><?php echo $sts; ?></span>
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
  function get_karyawan_cuti(id_cuti){
    
    $(document).ready(function(){
        $.ajax({
          url: "<?php echo base_url("C_konfirmasi_cuti/get_konfirmasi_cuti"); ?>",
          type: "post",
          dataType: 'json',
          data: {id_cuti:id_cuti},
          success:function(data){
            // var src = data;
            var obj = JSON.parse(JSON.stringify(data));
            $("#id_fcuti").val(obj.id_fcuti);
            $(".nm_karyawan").html(obj.nm_karyawan);
            $("#status").val(obj.status_pengajuan);
            $(".tgl_mulai").html(obj.tgl_mulai);
            $(".tgl_akhir").html(obj.tgl_akhir);
            $(".lm_cuti").html(obj.lama_cuti+" hari");
            $(".alasan").html(obj.alasan);
            console.log(obj);
          }
        });
    });
  }
  // Untuk hitung jumlah cuti
  
</script>