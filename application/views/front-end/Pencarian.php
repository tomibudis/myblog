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
    <script type="text/javascript" src="<?php echo base_url();?>assets_front-end/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets_front-end/bootstrap/js/bootstrap.js"></script>
   <script id="dsq-count-scr" src="//wwwhellotomsesyes.disqus.com/count.js" async></script>
  </head>
  <body>
	<div class="jumbotron" style="margin-bottom:0px;padding-bottom:0px;"><div class="blur">	<br><center>
  		<h1 style="margin-bottom:0px;padding-bottom:0px;"><img style="height:160px"src="<?php echo base_url();?>assets_front-end/images/logo.png" class="img-responsive"></h1>
  		<p style="margin:0px;">This is my blog</p><br>
		</div>
	</div>

<nav id="home"class="navbar navbar-default">
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
        <li class="active"><a href="<?php echo base_url();?>index.php/Welcome/getData">Home <span class="sr-only">(current)</span></a></li>
        <li><a  href="<?php echo base_url();?>index.php/Welcome/about/">About</a></li>
        <li><a href="<?php echo base_url();?>index.php/Welcome/contact#contact ">Contact</a></li>
        
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
<?php
    if(empty($results)){
             redirect('front-end/halaman/page_not_found');      
        }else{    
foreach($results as $row){
?>
<div class="col-md-4" id="artikel"style="min-height:450px">
	<div class="panel panel-default hover">
	  <div class="panel-heading">
	  	<a href="<?php echo base_url();?>index.php/Welcome/getArtikel/<?php echo $row->id_post;?>#artikel"><h5 style="padding:0px;margin-bottom:10px;margin-top:3px"><?php echo $row->judul?></h5></a>
		<p style="margin:0px;padding:0px"><i class="fa fa-user"></i>&nbsp;&nbsp;by:Toms &nbsp;&nbsp;&nbsp;
	  	<i class="fa fa-calendar-o">&nbsp;&nbsp;<?php echo$row->tanggal;?></i>
	  	<a href="<?php echo base_url();?>index.php/Welcome/getArtikel/<?php echo $row->id_post;?>#disqus_thread" style="color:grey;float:right;padding:0px"><i class="fa fa-comments fa-2x"> </i> </a> </p>
		</div>
		
	  <div class="panel-body" style="margin:0px;padding:0px">
	  	 <a href="<?php echo base_url();?>index.php/Welcome/getArtikel/<?php echo $row->id_post;?>#artikel"><img style="margin:0px;padding:0px;border-radius:0px; " src="<?php echo base_url(); echo $row->gambar;?>" class="img-thumbnail  img-rersponsive">  			
	  	</a>
	  </div>
	  <div class="panel panel-default">

		  <div class="panel-body"><p>
		  <?php $kalimat=$row->descr;
		  $subrow = implode(" ",array_slice(explode(" ",$kalimat),0,10)); 
		  echo $subrow;?> ....
		  </p>
		  <a href="<?php echo base_url();?>index.php/Welcome/getArtikel/<?php echo $row->id_post;?>" type="button" class="btn btn-primary btn-sm">Continue reading</a>

		  </div>
		</div>
	</div>
</div>

<?php } }?>

</div>
</div>
<style>
strong{
  display: none;
}
</style>

<div class="progress"style="margin-bottom:0px;padding:0px">
  <div class="progress-bar" style="width: 100%;"></div>
</div>
<div class="jumbotron1" style="margin-bottom:0px;padding-bottom:0px;"><div class="footer">	<br><center>
	<h6>&copy; Copyright 2016</h6>
  <p>Created by:Tomi budi susilo /13523233</p>
  <br>
  
</div></div>
</html>

