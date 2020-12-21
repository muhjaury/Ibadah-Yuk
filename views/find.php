<!DOCTYPE html>
<html lang="en-US">
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Place of Worship</title>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDRxr2raweMkdqgGNT4q5QdoB-MBVTWxps&callback=myMap"></script>
<script>

function initialize() {
  var propertiPeta = {
    center:new google.maps.LatLng(-5.126621, 119.530419),
    zoom:12,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  
  var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);

   <?php 
        foreach ($data_ti as $row){
    ?>
        var marker=new google.maps.Marker({
            position: new google.maps.LatLng(<?php echo $row['latitude']?>, <?php echo $row['longitude']?>),
            map: peta
        });
    <?php      
        }
    ?>
}

// Event Jendela di Load
google.maps.event.addDomListener(window, 'load', initialize);

</script>

<link href="<?php echo base_url();?>assets/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets/lib/iconsmind/iconsmind.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets/lib/css-hamburgers/dist/hamburgers.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets/lib/owl.carousel/dist/assets/owl.carousel.min.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets/lib/owl.carousel/dist/assets/owl.theme.default.min.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets/css/custom.css" rel="stylesheet">

</head>

<body data-spy="scroll" data-target=".inner-link" data-offset="60">

<main>


<div class="znav-container znav-semi-transparent znav-white sticky-top" id="znav-container">
    <div class="container">
        <nav class="navbar navbar-toggleable-md">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <div class="hamburger hamburger--emphatic">
                    <div class="hamburger-box">
                        <div class="hamburger-inner">
                        </div>
                    </div>
                </div>
            </button>
            <a class="navbar-brand overflow-hidden" href="<?php echo base_url();?>">Ibadah Yuk</a>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ml-auto">
                    <li>
                      <?php 
                        foreach ($data_user as $row){
                            echo '
                    <a href="JavaScript:void(0)">Beranda '.$row['u_agama'].'</a>
                        ';}
                    ?>
                    </li>
                    <li>
                      <a href="<?php echo base_url();?>add">Tambah Pengingat</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>profile/logout">Log Out</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>

<section class="p-0 color-white font-1">
  <div class="background-holder overlay overlay-2" style="background-image:url(<?php echo base_url();?>assets/images/find-bg.jpg);"></div>
  <div class="container">
    <div class="row h-half align-items-center py-5">
      <div class="col-md-8 col-lg-5">
        <h1 class="fs-3 fs-md-4 mb-3">Find the Nearest Place of Worship</h1>
        <p class="lead fs-xs-1"></p>
      </div>
    </div>
  </div>
</section>

<section class="font-1">
  <div class="container">
    <div class="row">
      <!-- <div class="col-lg-2 hidden-md-down">
        <form>
          <select class="form-group form-control mb-3">
                      <option selected>Provinsi</option>
                      <option>#</option>
                      <option>#</option>
                      <option>#</option>
                      <option>#</option>
          </select>
          <select class="form-group form-control mb-3">
                      <option selected>Kota/Kabupaten</option>
                      <option>#</option>
                      <option>#</option>
                      <option>#</option>
                      <option>#</option>
          </select>
          <select class="form-group form-control mb-3">
                      <option selected>Kecamatan</option>
                      <option>#</option>
                      <option>#</option>
                      <option>#</option>
                      <option>#</option>
          </select>
          <button type="button" class="btn">Cari</button>
        </form>
      </div> -->
      <div class="col-lg-12">
        <div id="googleMap" style="width:100%;height:380px;"></div>
      </div>
    </div>
  </div>
</section>

<section class="text-center font-1 color-white py-0">
  <div class="background-holder overlay overlay-1" style="background-image:url(<?php echo base_url();?>assets/images/team-officespace.jpg);"></div>
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-lg-8 col-xl-6 py-8">
        <h3 class="mb-3">Ibadah Yuk</h3>
        <p class="lead">IY selalu hadir untuk memberikan anda bantuan mencari tempat Ibadah terdekat</p>
      </div>
    </div>
  </div>
</section>

<footer class="background-1 color-8 py-3 fs--1 fw-600 font-heading">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-auto font-1">&copy; 2018 MjReaper&trade; Team.</div>
      <div class="col fs-0 text-right">
        <a class="p-2 color-8" href="#">
          <i class="fa fa-facebook"></i>
        </a>
        <a class="p-2 color-8" href="#">
          <i class="fa fa-twitter"></i>
        </a>
        <a class="p-2 color-8" href="#">
          <i class="fa fa-instagram"></i>
        </a>
        <a class="p-2 color-8" href="#">
          <i class="fa fa-behance"></i>
        </a>
        <a class="p-2 color-8" href="#">
          <i class="fa fa-dribbble"></i>
        </a>
      </div>
    </div>
  </div>
</footer>

</main>
<script>

(function(h,o,t,j,a,r){
h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
h._hjSettings={hjid:588723,hjsv:5};
a=o.getElementsByTagName('head')[0];
r=o.createElement('script');r.async=1;
r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
a.appendChild(r);
})(window,document,'//static.hotjar.com/c/hotjar-','.js?sv=');

</script>

<script>

(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-76729372-3', 'auto');
ga('send', 'pageview');

</script>
</body>
</html>