<!-- page content -->
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Data Profile Guru</h3>
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
            <div class="col-md-12 col-sm-12  ">
            <?php echo $this->session->flashdata('pesan'); ?>
                <div class="x_panel">
                  <div class="x_title">
                    <a href="<?php echo site_url('guru/add');?>" class="btn btn-secondary btn-sm">
                      Tambah Data Guru</a>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table class="table table-striped ">
                      <thead>
                        <tr>
                          
                          <th>Foto</th>
                          <th>Email</th>
                          <th>Password</th>
                          <th>NIP</th>
                          <th>Nama Lengkap</th>
                          <th>Mata Pelajaran</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($guru as $item); {?>
                        <tr>
                        
                          <td><?php echo $item->foto;?></td>
                          <td><?php echo $item->email;?></td>
                          <td><?php echo $item->password;?></td>
                          <td><?php echo $item->NIP;?></td>
                          <td><?php echo $item->nama_lengkap;?></td>
                          <td><?php echo $item->mata_pelajaran;?></td>
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