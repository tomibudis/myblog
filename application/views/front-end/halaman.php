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
    <script type="text/javascript" src="<?php echo base_url();?>assets_front-endassets/bootstrap/js/bootstrap.js"></script>
       <script id="dsq-count-scr" src="//wwwhellotomsesyes.disqus.com/count.js" async></script>
  </head>
  <body>
  <div class="jumbotron" style="margin-bottom:0px;padding-bottom:0px;"><div class="blur"> <br><center>
      <h1 style="margin-bottom:0px;padding-bottom:0px;"><img style="height:160px"src="<?php echo base_url();?>assets_front-end/images/logo.png" class="img-responsive"></h1>
      <p style="margin:0px;">This is my blog</p><br>
    </div>
  </div>

<nav id="artikel"class="navbar navbar-default">
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
        <li><a href="<?php echo base_url();?>index.php/Welcome/getData/">Home <span class="sr-only">(current)</span></a></li>
        <li><a  href="<?php echo base_url();?>index.php/Welcome/about/">About</a></li>
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
<div class="col-md-9 ">
  <div class="panel panel-default">
    <div class="panel-body">
   <h5 style="padding:0px;margin-bottom:10px;margin-top:3px"><?php echo $judul;?></h5>
   
      <span style="margin:5px;"><i class="fa fa-user"></i>&nbsp;&nbsp;by:Toms &nbsp;&nbsp;&nbsp;
      <i class="fa fa-calendar-o">&nbsp;&nbsp;<?php echo$tanggal;?></i>
      <a href="#disqus_thread"><i style="float:right;padding:0px"class="fa fa-comments fa-2x"></i></a> </span>
      <img src="<?php echo base_url();echo $gambar;?>" class="img-thumbnail  img-rersponsive">        
      <p><br>
       <?php echo $descr;?>
       </p>
      Labels
      <span class="label label-warning"><?php echo $tag;?></span>

    </div>
    <div class="list-group">
      <a href="#" class="list-group-item ">
        <div class="row">
          <div class="col-md-2 col-xs-4" style="padding:10px;margin-left:15px">
            <img src="<?php echo base_url();?>assets_front-end/images/img-profile.jpg" alt="" class="img-thumbail img-responsive">
          </div>
          <div class="col-md-8 blue" style="padding-right:10px;margin-top:3px">
          <h5>About Autor:Tomi budi susilo / 13523233</h5>
            <p>Cress arugula peanut tigernut wattle seed kombu parsnip. Lotus root mung bean arugula tigernut horseradish endive yarrow gourd. Radicchio cress avocado garlic quandong collard greens.</p> 
          </div>
        </div>
      </a>
      
    </div>
  </div>
  <div class="panel panel-info">
    <div class="col-md-12">
      
  <div id="disqus_thread"></div>
<script>
    /**
     *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
     *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables
     */
    /*
    var disqus_config = function () {
        this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
        this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
    };
    */
    (function() {  // DON'T EDIT BELOW THIS LINE
        var d = document, s = d.createElement('script');
        
        s.src = '//wwwhellotomsesyes.disqus.com/embed.js';
        
        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-body">
   
    </div>
  </div>
</div>

<?php $this->load->view('front-end/tampilan_social_media');?>
<div class="col-md-3 ">
    <div class="panel panel-default">
    <div class="panel-heading"><h5 style=";margin:2px;">Labels</h5></div>
    <div class="list-group">
      <a href="#" class="list-group-item ">
        <i class="fa fa-folder-open-o"></i> &nbsp;&nbsp;&nbsp;Wisata
      </a>
      <a href="#" class="list-group-item">
      <i class="fa fa-folder-open-o"></i> &nbsp;&nbsp;&nbsp;Fotografi
      </a>
      <a href="#" class="list-group-item">
      <i class="fa fa-folder-open-o"></i> &nbsp;&nbsp;&nbsp;Design
      </a>
    </div>
  </div>
</div>
<div class="col-md-3 ">
    <div class="panel panel-default">
    <div class="panel-heading"><h5 style="margin:2px;">Artikel Lainnya</h5></div>
    <div class="list-group">
    <?php  
      $query = $this->db->query("select * from db_post limit 5");
      foreach ($query->result() as $row) { //ngabsen data
                ?>
      <a href="<?php echo base_url();?>index.php/Welcome/getArtikel/<?php echo $row->id_post;?>#artikel" class="list-group-item ">
      <div class="row">
          <div class="col-md-4 col-xs-4" style="padding:10px;">
            <img src="<?php echo base_url();echo $row->gambar;?>" alt="artikel" class="img-thumbail img-responsive">
          </div>
          <div class="col-md-8 " style="padding-right:10px;margin-top:3px">
            <p><?php echo $row->judul;?></p> 
            
          </div>
        </div>

      </a>
      <?php } ?>
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
