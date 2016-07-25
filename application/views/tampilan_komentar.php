<div class="row">

                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                      <div class="x_title">

                        <h2><i class="fa fa-user"></i> Daftar Data Komentar artikel<small></small></h2>

                        <ul class="nav navbar-right panel_toolbox">
                         
                        </ul>
                        <div class="clearfix"></div>
                      </div>
                      
                      <div class="x_content">
                        
                        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                          <thead>
                          
                            <tr>
                            <th width="100">Action</th>
                            <th>nama</th>
                            <th>komentar</th>
                            <th>id post</th>
                            <th>Judul artikel</th>
                            <th>id_komentar</th>
                          
                            </tr>
                         
                      <?php
                      if(empty($hasilKomentar)){
                        echo "data kosong tidak ada komentar Di artikel";
                      }else{
		                foreach ($hasilKomentar as $row) { //ngabsen data
		            ?>
 
                            <tr>
                            <td width="1">
                          
                              <a type="button"  href="<?php echo base_url();?>index.php/komentar/hapus/<?php echo $row->id_komentar;?>"class="btn btn-info btn-danger btn-xs">
                              <i class="fa fa-close"></i> </a>
                            </td>
                            <td><?php echo $row->nama;?></td>
                            <td><?php echo $row->komentar;?></td>
                            <td><?php echo $row->id_post;?></td>
                            <td><?php echo $row->judul;?></td>
                            <td><?php echo $row->id_komentar;?></td>

                          
                            </tr>
                               <?php
                      } }
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