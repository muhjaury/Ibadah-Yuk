<!DOCTYPE html>
<html lang="en-US">
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Profile</title>


<link href="assets/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<link href="assets/lib/iconsmind/iconsmind.css" rel="stylesheet">
<link href="assets/lib/css-hamburgers/dist/hamburgers.css" rel="stylesheet">
<link href="assets/lib/lightbox2/dist/css/lightbox.css" rel="stylesheet">
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
										<a href="JavaScript:void(0)">Beranda '.$row['u_agama'].'</a>
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

<section class="pb-4 pt-11">
<?php 
	
	foreach ($data_user as $row){
		if ($row['u_agama'] == "Islam") {
			echo '<div class="background-holder overlay overlay-1" style="background-image:url('.base_url().'assets/images/mesjid-01.jpg"></div>';
		}
		elseif ($row['u_agama'] == "Kristen Protestan") {
			echo '<div class="background-holder overlay overlay-1" style="background-image:url('.base_url().'assets/images/gereja-01.jpg"></div>';
		}
		elseif ($row['u_agama'] == "Kristen Katolik") {
			echo '<div class="background-holder overlay overlay-1" style="background-image:url('.base_url().'assets/images/gereja-02.jpg"></div>';
		}
		elseif ($row['u_agama'] == "Kristen Hindu") {
			echo '<div class="background-holder overlay overlay-1" style="background-image:url('.base_url().'assets/images/gereja-01.png"></div>';
		}
		elseif ($row['u_agama'] == "Kristen Buddha") {
			echo '<div class="background-holder overlay overlay-1" style="background-image:url('.base_url().'assets/images/gereja-01.png"></div>';
		}
		else
		{
			echo '<div class="background-holder overlay overlay-1" style="background-image:url('.base_url().'assets/images/gereja-01.png"></div>';
		}
	;}
?>
<div class="container">
	<div class="row">
		<div class="col-lg-6">
			<div class="row justify-content-center align-items-end text-center text-md-left">
				<div class="col-8 col-md-4">
					<?php 
                    foreach ($data_user as $row){
                        echo '
								<a href="'.base_url().'images/'.$row['foto'].'" data-lightbox="profile-pic">
									<img class="img-thumbnail radius-primary" src="'.base_url().'images/'.$row['foto'].'">
								</a>
							</div>
							<div class="col-12 col-md-8 mt-3 mt-md-0 color-white font-1">
						      <h4 class="mb-0">'.$row['nama_user'].'</h4>
						      <p class="lead mb-0">'.$row['u_agama'].'</p>
                    	';}
                	?>
				<p class="mb-0"></p>
			</div>
			</div>
		</div>
	</div>
</div>
</section>

<section class="py-5">
	<div class="container">
		<div class="row">
			<div class="col-lg-7 col-xl-6">
				<h5 class="text-uppercase mb-0">Hapus Pengingat</h5>
				<hr class="color-9">
				<div class="row align-items-center">
					<div class="col">
						<form action="<?php echo base_url();?>delete/deletePengingat" method="post" enctype="multipart/form-data">
							<div class="form-row">
								<select class="form-group form-control mb-3" name="pengingat">
									<?php 
					                    foreach ($data_pengingat as $row){
					                        echo '
													<option>'.$row['nama_pengingat'].'</option>
					                    ';}
					                ?>
								</select>
								<button class="btn-block btn btn-primary" type="submit">Hapus</button>
							</div>
						</form>
					</div>
				</div>
				<hr class="color-9">
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

<script src="assets/lib/lightbox2/dist/js/lightbox.js"></script>
<script src="assets/js/core.js"></script>
<script src="assets/js/main.js"></script>

<!-- Alarm -->
<script type="text/javascript">
	jsalarm.init()
</script>
<!-- End Alarm -->

</body>
</html>