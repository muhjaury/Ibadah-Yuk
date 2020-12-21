
<!DOCTYPE html>
<html lang="en-US">
<head>

<title>Register</title>

<link href="<?php echo base_url(); ?>assets/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/lib/iconsmind/iconsmind.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/lib/css-hamburgers/dist/hamburgers.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet">
</head>

<body data-spy="scroll" data-target=".inner-link" data-offset="60">
<main>

<div class="znav-container znav-white znav-fixed" id="znav-container">
	<div class="container">
		<nav class="navbar navbar-toggleable-md">
			<a class="navbar-brand overflow-hidden" href="<?php echo base_url();?>">Ibadah Yuk</a>
		</nav>
	</div>
</div>

<section class="py-0 font-1">
	<div class="container-fluid">
		<div class="row align-items-center text-center justify-content-center h-full">
			<div class="col-sm-6 col-md-5 col-lg-4 col-xl-3">
				<h3 class="fw-300">Daftar</h3>
				<form action="<?php echo base_url();?>rp/action" method="post" enctype="multipart/form-data">
					<div class="form-row">
						<input class="form-control mb-3" type="text" placeholder="Nama" name="namereg">
						<input class="form-control mb-3" type="email" placeholder="Email" name="emailreg">
						<select class="form-group form-control mb-3" name="agamareg">
							<option selected>Islam</option>
							<option>Kristen Protestan</option>
							<option>Kristen Katolik</option>
							<option>Hindu</option>
							<option>Buddha</option>
							<option>Kong Hu Cu</option>
						</select>
						<input class="form-control mb-3" type="password" placeholder="Password" name="passreg">
						<!-- <input type="file" name="fotomhs" id="fileToUpload" value="Upload Foto"> -->
						<div class="form-control mb-3 fileUpload btn">
							<span style="color: black" >Upload Photos</span>
							<input class="upload" type="file" name="fotomhs" id="fileToUpload">
						</div>
						<div class="row align-items-center">
							<div class="col text-left">

							</div>
							<div class="col text-right">
								<button class="btn-block btn btn-primary" type="submit">Daftar</button>
							</div>
						</div>
					</div>
				</form>
				<hr class="color-9 mt-6">
				<div class="fs--1 mt-4">Telah Memiliki Akun? 
					<a href="<?php echo base_url();?>lp">Log In.</a>
				</div>
			</div>
		</div>
	</div>
</section>

</main>

<script src="<?php echo base_url(); ?>assets/lib/jquery/dist/jquery.js"></script>
<script src="<?php echo base_url(); ?>assets/lib/bootstrap/dist/js/bootstrap.min.js"></script>

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

<script>
	document.getElementById("uploadBtn").onchange = function () {
    document.getElementById("uploadFile").value = this.value;
	};
</script>

<script src="<?php echo base_url(); ?>assets/js/core.js"></script>
<script src="<?php echo base_url(); ?>assets/js/main.js"></script>
</body>
