<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Informasi</title>

<link href="assets/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<link href="assets/lib/iconsmind/iconsmind.css" rel="stylesheet">
<link href="assets/lib/css-hamburgers/dist/hamburgers.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
<link href="assets/css/custom.css" rel="stylesheet">

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
										<a href="'.base_url().'info">Beranda '.$row['u_agama'].'</a>
		                    ';}
		                ?>
                    </li>
                    <li>
                    	<a href="<?php echo base_url();?>find">Cari Tempat Ibadah</a>
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
<div class="background-holder overlay overlay-1" style="background-image:url(<?php echo base_url();?>assets/images/info-bg.jpg);">
</div>
<div class="container">
<div class="row color-white">
<div class="col-md-8 py-10">
<h6 class="text-uppercase ls">
Agama</h6>
<?php
		                    foreach ($data_user as $row){
		                        echo '
										<h1 class="fs-4">'.$row['u_agama'].'</h1>
		                    ';}
?>
</div>
</div>
<!--/.row-->
</div>
<!--/.container-->
</section>
<section class="background-0 font-1 pb-0">
<div class="container">
<div class="row justify-content-center text-center">
<div class="col-md-9 mt-4">
<h4>Pengenalan</h4>
<p class="font-1 fs-2 fw-300 color-5">-------------</p>
<hr class="mt-8 color-9">
</div>
</div>
<!--/.row-->
</div>
<!--/.container-->
</section>
<section class="background-0 font-1">
<div class="container">
<div class="row justify-content-center text-center">
<div class="col-md-8">
<h4>Sejarah</h4>
<p class="font-1 color-6 fw-300">------------------------</p>
</div>
</div>
</div>
</section>

	
<section>
<div class="container">
<h4 class="text-center mb-7">Lebih Lanjut</h4>
<div class="row">
<div class="col-xl-6 mb-5">
 <h5 class="color-2 mb-3">Pertama</h5>
<p class="font-1 color-6 fw-300">
---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
</div>
<div class="col-xl-6 mb-5">
 <h5 class="color-2 mb-3">Kedua</h5>
<p class="font-1 color-6 fw-300">
---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
</div>
<div class="col-xl-6 mb-5">
 <h5 class="color-2 mb-3">Ketiga</h5>
<p class="font-1 color-6 fw-300">
---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
</div>
<div class="col-xl-6 mb-5">
 <h5 class="color-2 mb-3">Keempat</h5>
<p class="font-1 color-6 fw-300">
---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
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

<script src="assets/lib/jquery/dist/jquery.js"></script>
<script src="../../cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
<script src="assets/lib/bootstrap/dist/js/bootstrap.min.js"></script>

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
})(window,document,'script','../../www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-76729372-3', 'auto');
ga('send', 'pageview');

</script>

<script src="assets/js/core.js"></script>
<script src="assets/js/main.js"></script>

</body>
</html>
