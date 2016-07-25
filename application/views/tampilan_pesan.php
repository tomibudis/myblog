<div class="row">

                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                      <div class="x_title">

                        <h2><i class="fa fa-user"></i> Daftar Pesan<small></small></h2>

                        <ul class="nav navbar-right panel_toolbox">
                         
                        </ul>
                        <div class="clearfix"></div>
                      </div>
                      
                      <div class="x_content">
                        
                        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                          <thead>
                          
                            <tr>
                            <th width="1">Action</th>
                            <th>nama</th>
                            <th>email</th>
                            <th>isi pesan</th>
                            <th>tanggal</th>
                          
                            </tr>
                            <?php 
                      $no = 1;
                      foreach ($data->result() as $row) {
                      ?>
                            <tr>
                           
                         
                            <td width="1">
                          
                              <a type="button" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" href="<?php echo base_url();?>index.php/pesan/hapus/<?php echo $row->id_pesan;?>"class="btn btn-info btn-danger btn-xs">
                              <i class="fa fa-close"></i></a>
                            </td>

                            <td><?php echo $row->id_pesan;?></td>
                            <td><?php echo $row->email;?></td>
                            <td><?php echo $row->isi_pesan;?></td>
                            <td><?php echo $row->tanggal;?></td>
                          
           
                            </tr>
                               <?php
                      }
                      ?>
                          </thead>
                          <tbody>
                          
                          </tbody>
                        </table>

                      </div>
                    </div>
                    <?php
                  $info =   $this->session->flashdata('info');
                  if(!empty($info)){
                    echo $info;
                  }
                  ?> 