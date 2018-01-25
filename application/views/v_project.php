<section id="main-content">
  <section class="wrapper site-min-height">
  <!-- page start-->
    <div class="row">
      <div class="col-md-12">
        <section class="panel">
          <header class="panel-heading">
            Data Project
            <span class="tools pull-right">
              <a href="javascript:;" class="fa fa-chevron-down"></a>
              <!-- <a href="javascript:;" class="fa fa-timer"></a> -->
            </span>
          </header>
          <div class="panel-body" >
            <a data-toggle="modal" href="#myModal" class="btn btn-primary"><i class="fa fa-plus-square"> Tambah Data Project</i></a>
          </div>
            <div class="panel-body">
              <div class="adv-table">
                <table  class="display table table-bordered table-striped" id="example">
                  <thead>
                    <tr>
                      <th>ID Project</th>
                      <th>Nama Project</th>
                      <th>Awal Project</th>
                      <th>Akhir Project</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    foreach ($data_project as $row_project) {
                    ?>
                    <tr>
                      <td><?php echo $row_project->id_project;?></td>
                      <td><?php echo $row_project->nm_project;?></td>
                      <td><?php echo $row_project->awal_project;?></td>
                      <td><?php echo $row_project->akhir_project;?></td>
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
          <section class="panel">
            <header class="panel-heading">
              Detail Project
              <span class="tools pull-right">
                <a href="javascript:;" class="fa fa-chevron-down"></a>
              <!-- <a href="javascript:;" class="fa fa-timer"></a> -->
              </span>
            </header>
            <div class="panel-body" >
              <a data-toggle="modal" href="#myModal2" class="btn btn-primary"><i class="fa fa-plus-square"> Tambah Detail Project</i></a>
            </div>
              <div class="panel-body">
                <div class="adv-table">
                  <table class="display table table-bordered table-striped" id="example2">
                    <thead>
                      <tr>
                        <th>ID Project</th>
                        <th>ID Karyawan</th>
                        <th>Tanggal Awal Kerja</th>
                        <th>Tanggal Akhir Kerja</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      foreach ($detil_project as $row_detil) {
                      ?>
                      <tr>
                        <td><?php echo $row_detil->id_project;?></td>
                        <td><?php echo $row_detil->id_karyawan;?></td>
                        <td><?php echo $row_detil->tgl_awal_kerja;?></td>
                        <td><?php echo $row_detil->tgl_akhir_kerja;?></td>
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
              <!-- Modal -->
            <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title">Isi Data Project</h4>
                  </div>
                  <div class="panel-body">
                    <?php
                      $attributes = array('class' => 'cmxform form-horizontal tasi-form');
                      echo form_open_multipart(site_url("C_project/add_project"), $attributes);
                    ?>
                    <?php
                      foreach ($last_project as $row) {
                        $id = $row->id_project + 1;
                        }
                    ?>
                    <div class="form-group">
                      <label class="control-label col-md-3">ID Project</label>
                        <div class="col-md-4">
                          <input type="text" class="form-control" name="id_project" id="id_project" value="<?php echo $id; ?>" readonly />
                        </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3">Nama Project</label>
                        <div class="col-md-7">
                          <input type="text" class="form-control" placeholder="Nama Project" name="nm_project" id="nm_project" />
                        </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3">Masa Project</label>
                        <div class="col-md-6">
                          <div class="input-group input-large" data-date="2013-07-13" data-date-format="yyyy MM dd">
                            <input type="text" class="form-control dpd1" name="awal_project" id="awal_project">
                              <span class="input-group-addon">s/d</span>
                            <input type="text" class="form-control dpd2" name="akhir_project" id="akhir_project">
                          </div>
                        </div>
                    </div>
                    <div class="form-group">
                      <div class="col-lg-offset-3 col-lg-10">
                        <input type="submit" name="input" class="btn btn-success" value="Save">
                        <input type="reset" name="reset" class="btn btn-danger" value="Reset">
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
                      <h4 class="modal-title">Isi Detail Project</h4>
                  </div>
                  <div class="panel-body">
                    <?php
                      $attributes = array('class' => 'cmxform form-horizontal tasi-form');
                      echo form_open_multipart(site_url("C_project/add_detil_project"), $attributes);
                    ?>
                    <div class="form-group">
                      <label class="control-label col-md-3">ID Project</label>
                        <div class="col-md-7">
                          <select class="form-control" placeholder="ID Project" name="id_project" id="id_project">
                            <?php
                              foreach ($data_project as $row_project) {
                            ?>
                            <option value="<?php echo $row_project->id_project;?>">
                            <?php echo $row_project->nm_project;?>
                            </option>
                            <?php
                              }
                            ?> 
                          </select>
                        </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3">ID Karyawan</label>
                        <div class="col-md-7">
                          <input type="text" class="form-control" placeholder="ID Karyawan" name="id_karyawan" />
                        </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3">lama Masa Kerja</label>
                        <div class="col-md-6">
                          <div class="input-group input-large" data-date="2013-07-13" data-date-format="yyyy MM dd">
                            <input type="text" class="form-control dpd1" name="tgl_awal_kerja" id="tgl_awal_kerja">
                              <span class="input-group-addon">s/d</span>
                            <input type="text" class="form-control dpd2" name="tgl_akhir_kerja" id="tgl_akhir_kerja">
                          </div>
                        </div>
                    </div>
                    <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">
                        <input type="submit" name="input" class="btn btn-success" value="Save">
                        <input type="reset" name="reset" class="btn btn-danger" value="Reset">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
              <!-- modal2 -->
          <!-- page end-->
          </section>
        </section>