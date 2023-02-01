<!-- page content -->
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Data Kelas</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6  ">
            <?php echo $this->session->flashdata('pesan'); ?>
                <div class="x_panel">
                  <div class="x_title">
                    <a href="<?php echo site_url('kelas/add');?>" class="btn btn-secondary btn-sm">
                      Tambah Data Kelas</a>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table class="table table-striped ">
                      <thead>
                        <tr>
                          <th>No. </th>
                          <th>Nama Kelas</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($kelas as $item); {?>
                        <tr>
                          <td><?php echo $item->idKelas;?></td>
                          <td><?php echo $item->nama_kelas;?></td>
                          <td><a href="<?php echo site_url('kelas/getid/' .$item->idKelas); ?>" class="btn btn-warning">Edit</a>
                          <a href="<?php echo site_url('kelas/delete/' .$item->idKelas); ?>" class="btn btn-danger">Hapus</a></td>
                        </tr>
                        <?php }?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
                </div>
              </div>
            </div>
        </div>
        
        <!-- /page content -->