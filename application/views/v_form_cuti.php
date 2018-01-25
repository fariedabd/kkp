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
                      <?php
                        foreach ($last_id as $row) {
                          $id = $row->id_fcuti + 1;
                        }
                      ?>
                      <div class="form-group">
                        <label class="control-label col-md-3">ID Cuti</label>
                          <div class="col-md-4">
                            <input type="text" class="form-control" name="id_fcuti" id="id_fcuti" value="<?php echo $id; ?>" readonly />
                          </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3">Sisa Cuti</label>
                          <div class="col-md-2">
                            <input type="text" class="form-control" name="tot_cuti" id="sisa_cuti" readonly />
                          </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3">Tanggal Pengajuan</label>
                          <div class="col-md-3">
                            <input type="text" class="form-control" name="tgl_pengajuan" value="<?php echo date("Y-m-d")?>" readonly />
                          </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3">Keterangan</label>
                          <div class="col-md-9">
                            <textarea class="form-control" cols="30" rows="3" name="alasan" placeholder="Alamat"></textarea>
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="control-label col-md-3">Tanggal Cuti</label>
                          <div class="col-md-6">
                              <div class="input-group input-large" data-date="2013-07-13" data-date-format="yyyy MM dd">
                                  <input type="text" class="form-control dpd1" name="cuti_awal" id="cuti_awal">
                                  <span class="input-group-addon">s/d</span>
                                  <input type="text" class="form-control dpd2" name="cuti_akhir" id="cuti_akhir">
                              </div>
                              <span class="help-block">Pilih tanggal cuti</span>
                          </div>
                          <div class="col-md-2">
                            <a href="#" class="btn btn-primary" name="btn_hitung" id="btn_hitung">Hitung</a>
                          </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3">Total Cuti</label>
                          <div class="col-md-2">
                            <input type="text" class="form-control" name="tot_cuti" id="tot_cuti" readonly />
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
                        <th>ID Cuti</th>
                        <th>Tgl Pengajuan</th>
                        <th>Tgl Mulai Cuti</th>
                        <th>Tgl Akhir Cuti</th>
                        <th>Total Cuti</th>
                        <th>Keterangan</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        foreach ($data_cuti as $row) {
                          ?>
                            <tr>
                              <td><?php echo $row->id_fcuti; ?></td>
                              <td><?php echo $row->tgl_pengajuan; ?></td>
                              <td><?php echo $row->tgl_mulai; ?></td>
                              <td><?php echo $row->tgl_akhir; ?></td>
                              <td><?php echo $row->lama_cuti; ?></td>
                              <td><?php echo $row->alasan; ?></td>
                              <td>
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
                              <td></td>
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
  // Untuk hitung jumlah cuti
  $(document).ready(function(){
      $("#btn_hitung").click(function(){
          var d1 = $('#cuti_awal').val();
          var d2 = $('#cuti_akhir').val();

          var date1 = new Date(d1);
          var date2 = new Date(d2);

          var date1_ms = date1.getTime();
          var date2_ms = date2.getTime();

          var diff = date2_ms-date1_ms;

          var days = diff/1000/60/60/24;

          $('#tot_cuti').val(days+1); 
      });
  });
</script>