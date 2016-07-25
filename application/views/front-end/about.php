<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Toms</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/logos.png"/>
    <link href='https://bootswatch.com/paper/bootstrap.min.css' rel='stylesheet'/>
    <!-- Le styles -->
    <link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css' rel='stylesheet'/>
    <link href="<?php echo base_url();?>assets_front-end/css/style.css" rel="stylesheet">
     <!-- jQuery online menggunakan CDN -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <!-- jQuery lokal -->  
    <script type="text/javascript" src="<?php echo base_url();?>assets_front-end/assets/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets_front-end/assets/bootstrap/js/bootstrap.js"></script>
       <script id="dsq-count-scr" src="//wwwhellotomsesyes.disqus.com/count.js" async></script>
  </head>
  <body>
  <div class="jumbotron" style="margin-bottom:0px;padding-bottom:0px;"><div class="blur"> <br><center>
      <h1 style="margin-bottom:0px;padding-bottom:0px;"><img style="height:160px"src="<?php echo base_url();?>assets_front-end/images/logo.png" class="img-responsive"></h1>
      <p style="margin:0px;">This is my blog</p><br>
    </div>
  </div>

<nav id="profile"class="navbar navbar-default">
<div class="container">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="<?php echo base_url();?>index.php/Welcome/getData">Home <span class="sr-only">(current)</span></a></li>
        <li class="active"><a href="<?php echo base_url();?>index.php/Welcome/about#profile">About</a></li>
        <li><a href="<?php echo base_url();?>index.php/Welcome/contact#contact">Contact</a></li>
        
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
          
       <form class="navbar-form navbar-left" role="search"action="<?php echo base_url();?>index.php/front-end/halaman" method="get">
        <div class="form-group ">
          <input type="text"  name="judul" style="height:30px;margin:3px"class="form-control" placeholder="Search">
        </div>
        <button type="submit"class="btn btn-primary btn-sm">Submit</button>
      </form>
      </ul>
    </div>
  </div>
  </div>
</nav>

<div class="container">

<div class="col-md-9 " >
<?php $gambar = 'base_url();?>assets_front-end/images/gambar.jpg';?>
  <div class="panel panel-default" style="background: url(<?php echo base_url();?>assets_front-end/images/gambar.jpg) ;">
    <div class="panel-body">
    <br><br>  <br><br>  <br><br><br><br>  <br><br>  <br><br>
    </div>
    <div class="list-group">
      <a class="list-group-item ">
        <div class="row">
          <div class="col-md-2 col-xs-4" style="padding:10px;margin-left:15px">
            <img src="<?php echo base_url();?>assets_front-end/images/G0205008.jpg" alt="" class="img-thumbail img-responsive">
          </div>
          <div class="col-md-8 col-xs-12 blue" style="padding-right:10px;margin-top:3px">
          <h5>Tomi Budi Susilo</h5>
          <p>Email : Tomibudis@gmail.com<br>
          Alamat : Gentan Sinduharjo jalan kaliurang km 10 jogjakarta<br>
          Phone : 085729877783</p>
          </div>
        </div>
      </a>
      
    </div>
  </div>  
<div class="panel panel-default">
    <div class="panel-heading"><h5>Post Terbaru <i class="fa fa-bullhorn"></i></h5></div>
    <div class="panel-body">
      <ul class="media-list">
            <li class="media">
                <div class="row">
                <?php foreach ($results as $rows) {?>
                  <div class="col-md-3"style="min-height:320px">
                    <div class="panel panel-default hover">
                      <div class="panel-body">
                        <a href="<?php echo base_url();?>index.php/Welcome/getArtikel/<?php echo $rows['id_post'];?>#artikel"><h6 style="padding:0px;margin-bottom:10px;margin-top:3px"><?php echo $rows['judul'];?></h6></a>
                        <a href="<?php echo base_url();?>index.php/Welcome/getArtikel/<?php echo $rows['id_post'];?>#artikel"><img href="home.php"src="<?php echo base_url(); echo $rows['gambar'];?>" class="img-thumbnail  img-rersponsive">        
                        </a><p>
                        <?php $kalimat=$rows['descr'];
      $subrow = implode(" ",array_slice(explode(" ",$kalimat),0,10)); 
      echo $subrow;?> ....
                        </p>
                        <a href="<?php echo base_url();?>index.php/Welcome/getArtikel/<?php echo $rows['id_post'];?>#artikel" class="btn btn-primary btn-xs">Continu reading</a>
                      </div>
                    </div>
                  </div>
                  <?php }?>
              </div>      
            </li>
          </ul>

          
          
    </div>
  </div>
</div>
<?php $this->load->view('front-end/tampilan_social_media');?>

<div class="col-md-3 ">
    <div class="panel panel-default">
    <div class="panel-heading"><h5 style="margin:2px;">Artikel Lainnya</h5></div>
    <div class="list-group">
    <?php foreach ($artikel_lainnya as $data) {?>
      <a href="<?php echo base_url();?>index.php/Welcome/getArtikel/<?php echo $data['id_post'];?>#artikel" class="list-group-item ">
      <div class="row">
          <div class="col-md-4 col-xs-4" style="padding:10px;">
            <img src="<?php echo base_url();echo $data['gambar'];?>" alt="" class="img-thumbail img-responsive">
          </div>
          <div class="col-md-8 " style="padding-right:10px;margin-top:3px">
            <p><?php echo $data['judul'];?></p> 
            
          </div>
        </div>
        
         
      </a>
      <?php }?>
     
    </div>
  </div>
</div>
</div>
<center>

</div>
</center>
<div class="progress"style="margin-bottom:0px;padding:0px">
  <div class="progress-bar" style="width: 100%;"></div>
</div>
<div class="jumbotron1" style="margin-bottom:0px;padding-bottom:0px;"><div class="footer">  <br><center>
  <h6>&copy; Copyright 2016</h6>
  <p>Created by:Tomi budi susilo /13523233</p>
  <br>
  
</div></div>
</html>