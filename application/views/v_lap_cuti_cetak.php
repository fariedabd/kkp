<section id="main-content">
          <section class="wrapper site-min-height">
              <!-- invoice start-->
              <section>
                  <div class="panel panel-primary">
                      <!--<div class="panel-heading navyblue"> INVOICE</div>-->
                      <div class="panel-body">
                          <div class="row invoice-list">
                              <div class="text-center corporate-id">
                                  <img src="img/ekreasi.jpg" alt="">
                              </div>
                              <div class="col-lg-4 col-sm-4">
                                  <h4>PT. Integrasi Media Kreasi</h4>
                                  <p>
                                  Wisma Staco 5th Floor, Unit B<br>
                                  Jl.Casablanca Kav.18, Jakarta Selatan 12870, Indonesia<br>
                                  Email : contact@eKreasi.com<br>
                                  Telp : +6221 2854 2025<br>
                                  </p>
                              </div>
                            </div>
                          <table class="table table-striped table-hover">
                              <thead>
                              <tr>
                                  <th>ID Cuti</th>
                                  <th>ID Karyawan</th>
                                  <th>Nama Karyawan</th>
                                  <th>Tanggal Cuti</th>
                                  <th>Aproval</th>
                                  <th>Lama Cuti</th>
                              </tr>
                              </thead>
                              <tbody>
                              <?php
                                foreach ($lap_cuti as $row) {
                                  ?>
                                    <tr>
                                        <td><?php echo $row->id_fcuti; ?></td>
                                        <td><?php echo $row->id_karyawan; ?></td>
                                        <td class="hidden-phone"><?php echo $row->nm_karyawan; ?></td>
                                        <td class=""><?php echo $row->tgl_mulai; ?></td>
                                        <td class=""><?php echo $row->id_manager; ?></td>
                                        <td><?php echo $row->lama_cuti; ?></td>
                                    </tr>
                                  <?php
                                }
                              ?>
                              
                              </tbody>
                          </table>
                          <div class="row">
                              <div class="col-lg-4 invoice-block pull-right">
                                  <ul class="unstyled amounts">
                                      <li><strong>Sub - Total amount :</strong> $6820</li>
                                  </ul>
                              </div>
                          </div>
                          <div class="text-center invoice-btn">
                              <!-- <a class="btn btn-default no-print" href="javascript:printDiv('area-1');">Print</a> -->
                              <!-- <a class="btn btn-danger btn-lg"><i class="fa fa-check"></i> Submit Invoice </a> -->
                              <!-- 
                              <a href="<?php echo base_url(); ?>C_lap_cuti" class="btn btn-primary btn-lg"><i class="fa fa-check"></i> Batal </a> -->
                          </div>
                      </div>
                  </div>
              </section>
              <!-- invoice end-->
          </section>
      </section>
<!-- <a id="print" class="btn btn-info btn-lg" onclick="javascript:window.print();"><i class="fa fa-print"></i> Print </a> -->
      <script>
        $(document).ready(function(){
          javascript:window.print();
            // $("#print").click(function(){
              
            // });
        });
      </script>