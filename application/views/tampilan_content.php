 <div class="row tile_count">
          <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
            <div class="left"></div>
            <div class="right">
              <a class="count_top" href="<?php echo base_url();?>index.php/post"><i class="fa fa-user"></i> Total Post</a>
              <div class="count">
              <?php
            $query = $this->db->query("select * from db_post");
            $jumlah = $query->num_rows();
            echo $jumlah;
             ?>
              </div>
            </div>
          </div>
          <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
            <div class="left"></div>
            <div class="right">
              <a class="count_top" href="<?php echo base_url();?>index.php/pesan"><i class="fa fa-clock-o"></i> Total Pesan</a>
              <div class="count">
                 <?php
            $query = $this->db->query("select * from pesan");
            $jumlah = $query->num_rows();
            echo $jumlah;
             ?>
              </div>
            </div>
          </div>
          
          <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
            <div class="left"></div>
            <div class="right">
              <a class="count_top" href="<?php echo base_url();?>index.php/admin"><span class="count_top"><i class="fa fa-user"></i> Total admin</span></a>
              <div class="count">
                 <?php
            $query = $this->db->query("select * from admin");
            $jumlah = $query->num_rows();
            echo $jumlah;
             ?>
              </div>
              
            </div>
          </div>
           <div style="visibility:hidden"class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
            <div class="left"></div>
            <div class="right">
              <span class="count_top"><i class="fa fa-user"></i> Total admin</span>
              <div class="count">
                 <?php
            $query = $this->db->query("select * from admin");
            $jumlah = $query->num_rows();
            echo $jumlah;
             ?>
              </div>
              <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From last Week</span>
            </div>
          </div>
           <div style="visibility:hidden"class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
            <div class="left"></div>
            <div class="right">
              <span class="count_top"><i class="fa fa-user"></i> Total admin</span>
              <div class="count">
                 <?php
            $query = $this->db->query("select * from admin");
            $jumlah = $query->num_rows();
            echo $jumlah;
             ?>
              </div>
              <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From last Week</span>
            </div>
          </div>
          
          <div class="row" role="main"><br><br>
          <div class="animated flipInY  col-md-4"><br><br>
                        <div class="tile-stats">
                          <div class="icon"><i class="fa fa-home-right"></i>
                          </div>
                          <div class="count">Data Pesan</div>
                          <img style="text-align:center;;margin-left:30px;"src="<?php echo base_url();?>assets/images/kost.png" alt="..." class="img-responsive ">
           
                        
                          <div class="col-md-12">
                          <h4>Lihat data Pesan yang ada di Blog Toms</h4>
                            <a href="<?php echo base_url();?>index.php/pesan"class="btn btn-warning btn-small">lihat data <span class="fa fa-chevron-right"></span></a>
                          </div>
                          </div>
                      </div>
            <div class="animated flipInY  col-md-4"><br><br>
                        <div class="tile-stats">
                          <div class="icon"><i class="fa fa-home-right"></i>
                          </div>
                          <div class="count">Data Artikel</div>
                          <img style="text-align:center;;margin-left:30px;"src="<?php echo base_url();?>assets/images/kontrakan.png" alt="..." class="img-responsive ">
           
                          
                          <div class="col-md-12">
                           <h4>Lihat data Artikel yang ada di Blog Toms</h4>
                            <a href="<?php echo base_url();?>index.php/post"class="btn btn-warning btn-small">lihat data <span class="fa fa-chevron-right"></span></a>
                          </div>
                        </div>
                      </div>
           
          
        </div>