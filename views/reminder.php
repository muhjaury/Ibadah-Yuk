<!DOCTYPE html>
<html lang="en-US">
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Reminder</title>

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

<div class="znav-container znav-white znav-fixed" id="znav-container">
  <div class="container">
    <nav class="navbar navbar-toggleable-md">
    <a class="navbar-brand overflow-hidden" href="<?php echo base_url();?>welcome">Ibadah Yuk</a>
      <div class="collapse navbar-collapse" data-nav-image="<?php echo base_url();?>assets/img/blurred-image-1.jpg" data-color="orange">
      	<ul class="navbar-nav ml-auto">
          <li class="nav-item">
              <a class="nav-link" aria-haspopup="true" aria-expanded="false" href="<?php echo base_url();?>profil">
                Hy, User
              </a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</div>

<section class="p-0 color-white font-1">
  <div class="background-holder overlay overlay-2" style="background-image:url(<?php echo base_url();?>assets/images/reminder-01.jpg);"></div>
  <div class="container">
    <div class="row h-half align-items-center py-5">
      <div class="col-md-8 col-lg-5">
        <h1 class="fs-3 fs-md-4 mb-3">Pengingat Ibadah</h1>
        <p class="lead fs-xs-1"></p>
      </div>
    </div>
  </div>
</section>

<section class="font-1">
  <div class="container">
    <div class="row">
      <div class="col-lg-2 hidden-md-down">
        
      </div>
      <div class="col-lg-10">
        <form>
          <input class="form-control mb-3" type="text" placeholder="Nama Pengingat" name="namapengingat">
          <input class="form-control mb-3" type="date" name="tanggalpengingat">
          <select class="form-group form-control mb-3">
                      <option selected>Jenis Pengingat</option>
                      <?php 
                          foreach ($data_islam as $row){
                              echo '
                          <option>'.$row['nama_tipe'].'</option>
                          <!-- <p>Waktu : '.$row['waktu'].'</p> -->
                          ';}
                      ?>
          </select>
          <input type="submit" class="btn" value="Tambah Pengingat"></input>
        </form>
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
        <p class="lead">IY selalu hadir untuk mengingatkan jadwal ibadah dan memberikan anda bantuan mencari tempat Ibadah terdekat</p>
      </div>
    </div>
  </div>
</section>

<footer class="background-1 color-8 py-3 fs--1 fw-600 font-heading">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-auto font-1">&copy; 2018 MjReaper Team</div>
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