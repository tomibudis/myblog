<div class="row">

                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                      <div class="x_title">

                        <h2><i class="fa fa-user"></i> Daftar Post<small></small></h2>

                        <ul class="nav navbar-right panel_toolbox">
                         
                        </ul>
                        <div class="clearfix"></div>
                      </div>
                      
                      <div class="x_content">
                        
                        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                        <a type="button" href="<?php echo base_url();?>index.php/form_tambahPost"class="btn btn-info btn-warning">
                        <i class="fa fa-user-plus"></i> Tambah Post</a>
                          <thead>
                          
                            <tr>
                            <th width="100">Action</th>
                            <th>Judul</th>
                            <th>tag</th>
                            <th>comment</th>
                            <th>tanggal</th>
                          
                            </tr>
                            <?php 
                      $no = 1;
                      
                      foreach ($data->result() as $row) {
                      ?>
                            <tr>
                           <script>
                          function sweet (){
                          swal({ 
                            title: "Apakah Anda Yakin Menghapus Data Ini?",   text: "Klik Yes untuk Menghapus Data",   type: "warning",   showCancelButton: true,   confirmButtonColor: "#DD6B55",   confirmButtonText: "Yes, delete it!",   closeOnConfirm: false

                            },
                            function(){
                               swal("Deleted!", "Data Berhasil Terhapus.", "success");
                              window.location.href = '<?php echo base_url();?>index.php/form_tambahPost/hapus/<?php echo $row->id_post;?>';
                          });

                          }
                          </script>
                            <td width="1">
                              <a href="<?php echo base_url();?>index.php/form_tambahPost/edit/<?php echo $row->id_post;?>"class="btn btn-info btn-info btn-xs">
                              <i class="fa fa-folder-open-o"></i> </a>
                              <button type="button"  onclick="sweet()"class="btn btn-info btn-danger btn-xs">
                              <i class="fa fa-close"></i> </button>
                            </td>
                            <td><?php echo $row->judul;?></td>
                            <td><?php echo $row->tag;?></td>
                            <td><?php echo $row->descr;?></td>
                            <td><img style="width:100px" src="<?php echo base_url();?><?php echo $row->gambar;?>"></td>

                          
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