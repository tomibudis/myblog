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
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/sweetalert/dist/sweetalert.css">
    <script type="text/javascript" src="<?php echo base_url();?>assets/sweetalert/dist/sweetalert.min.js"></script> 
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDc2DQso7c_1H5ZEUsqrjt7DpAlIaZX_Sg&language=id"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets_front-end/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets_front-end/bootstrap/js/bootstrap.js"></script>
       <script id="dsq-count-scr" src="//wwwhellotomsesyes.disqus.com/count.js" async></script>
<script>
var myCenter=new google.maps.LatLng(-7.720869, 110.405095);
var marker;

function initialize()
{
var mapProp = {
  center:myCenter,
  zoom:12,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker=new google.maps.Marker({
  position:myCenter,
  animation:google.maps.Animation.BOUNCE
  });

marker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>
  </head>
  <body>
  <?php
                  $info =   $this->session->flashdata('info');
                  if(!empty($info)){
                    echo $info;
                  }
                  ?>
  <div class="jumbotron" style="margin-bottom:0px;padding-bottom:0px;"><div class="blur"> <br><center>
      <h1 style="margin-bottom:0px;padding-bottom:0px;"><img style="height:160px"src="<?php echo base_url();?>assets_front-end/images/logo.png" class="img-responsive"></h1>
      <p style="margin:0px;">This is my blog</p><br>
    </div>
  </div>

<nav class="navbar navbar-default"id="contact">
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
        <li ><a href="<?php echo base_url();?>index.php/Welcome/about#profile">About</a></li>
        <li class="active"><a href="<?php echo base_url();?>index.php/Welcome/contact#contact">Contact</a></li>
        
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

<div class="col-md-9 ">
<?php $gambar = 'assets/images/gambar.jpg';?>
  <div class="panel panel-default" style="padding:0px;margin:0px">
    <div class="panel-body" style="padding:0px;margin:0px">
    <div id="googleMap" class="img-responsive"style="width:900px;height:300px;"></div>
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
    <div class="panel-heading"><h5>Ada Pertanyaan <i class="fa fa-question-circle"></i></h5></div>
    <div class="panel-body">
      <ul class="media-list">
            <li class="media">
                <div class="row">
                  <form class="form-horizontal" 
                  action="<?php echo base_url();?>index.php/front-end/contact/simpan" method="POST"enctype='multipart/form-data'>
  <fieldset>
  <?php
                      date_default_timezone_set("Asia/Jakarta");
                      $tanggal = date('d-M-Y');
                 ?>
                   <input type="text" class="form-control" name="tanggal"  style="display:none;"value="<?php echo $tanggal;?>" data-parsley-id="1318">
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Nama</label>
      <div class="col-lg-10">
        <input type="text" name="nama"class="form-control" id="inputEmail" placeholder="Nama" required/>
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Email</label>
      <div class="col-lg-10">
        <input type="email" name="email"class="form-control" id="inputEmail" placeholder="Email" required/>
      </div>
    </div>
    <div class="form-group">
      <label for="textArea" class="col-lg-2 control-label">Pesan Anda</label>
      <div class="col-lg-10">
        <textarea class="form-control"name="isi_pesan" rows="3" id="textArea" required/></textarea>
        <span class="help-block">Tuliskan Pesan anda pada kolom diatas ini</span>
      </div>
    </div>
    
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
       
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </fieldset>
</form>
                  
                  
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