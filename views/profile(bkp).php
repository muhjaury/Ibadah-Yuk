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
                        <a href="JavaScript:void(0)">Agama</a>
                        <ul class="dropdown dropdown-push-left">
                            <li>
                                <a href="home-conference.html">Islam</a>
                            </li>
                            <li>
                                <a href="home-digital-agency.html">Kristen Protestan</a>
                            </li>
                            <li>
                                <a href="home-digital-agency.html">Kristen Katolik</a>
                            </li>
                            <li>
                                <a href="home-digital-agency.html">Hindu</a>
                            </li>
                            <li>
                                <a href="home-digital-agency.html">Buddha</a>
                            </li>
                            <li>
                                <a href="home-digital-agency.html">Kong Hu Cu</a>
                            </li>
                        </ul>
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
<div class="background-holder overlay overlay-1" style="background-image:url(<?php echo base_url()?>assets/images/mesjid-01.png);"></div>
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
			<div class="col-lg-7 col-xl-8">
				<p class="lead font-1 color-4">Pengingat Ibadah</p>

				<!-- Input Pengingat -->

				

				<!-- Batas Input Pengingat -->

				<h5 class="mt-6 mb-4">Photos</h5>
				<div class="row no-gutters">
					<div class="col pr-1">
						<a href="assets/images/portfolio/wide-01.jpg" data-lightbox="data-lightbox">
							<img src="assets/images/portfolio/wide-01.jpg">
						</a>
					</div>
					<div class="col pl-1">
						<a href="assets/images/portfolio/wide-02.jpg" data-lightbox="data-lightbox">
							<img src="assets/images/portfolio/wide-02.jpg">
						</a>
					</div>
				</div>
			<div class="row no-gutters mt-2">
				<div class="col pr-1">
					<a href="assets/images/portfolio/wide-03.jpg" data-lightbox="data-lightbox">
						<img src="assets/images/portfolio/wide-03.jpg">
					</a>
				</div>
				<div class="col px-1">
					<a href="assets/images/portfolio/wide-04.jpg" data-lightbox="data-lightbox">
						<img src="assets/images/portfolio/wide-04.jpg">
					</a>
				</div>
				<div class="col pl-1">
					<a href="assets/images/portfolio/wide-05.jpg" data-lightbox="data-lightbox">
						<img src="assets/images/portfolio/wide-05.jpg">
					</a>
				</div>
			</div>
			<h5 class="mt-6 mb-4">Recent Activities</h5>
			<hr class="color-9">
			<div class="row align-items-center">
				<div class="col-md-2 col-3 text-center">
					<i class="fs-4 color-4 icon-Speach-BubbleDialog"></i>
				</div>
				<div class="col">
					<h6 class="color-6">21st July, 2017</h6>
					<a class="font-1" href="#">Posh redesigned the element page</a>
					<p class="font-1 color-2 fw-300">250+ elements were redesigned.</p>
				</div>
			</div>
			<hr class="color-9">
			<div class="row align-items-center">
				<div class="col-md-2 col-3 text-center">
					<i class="fs-4 color-4 icon-Aa"></i>
				</div>
				<div class="col">
					<h6 class="color-6">14th July, 2017</h6>
					<a class="font-1" href="#">Posh beta 0.7 was released. </a>
					<p class="font-1 color-2 fw-300">With 68 pages and many features Posh beta 0.7 was released.</p>
				</div>
			</div>
			<hr class="color-9">
			<div class="row align-items-center">
				<div class="col-md-2 col-3 text-center">
					<i class="fs-4 color-4 icon-Heart"></i>
				</div>
				<div class="col">
					<h6 class="color-6">12th July, 2017</h6>
					<a class="font-1" href="#">Some cool websites of stock photography.</a>
				</div>
			</div>
			<hr class="color-9">
			<div class="row align-items-center">
				<div class="col-md-2 col-3 text-center">
					<i class="fs-4 color-4 icon-Arrow-Mix"></i>
				</div>
				<div class="col">
					<h6 class="color-6">3rd July, 2017</h6>
					<a class="font-1" href="#">Revamp the core modules of Posh.</a>
					<p class="font-1 color-2 fw-300">The core modules of Posh has been deleted and recoded to make the better version of it.</p>
				</div>
			</div>
			<hr class="color-9">
				<div class="row align-items-center1">
					<div class="offset-3 offset-md-2 col my-4">
						<a class="btn btn-primary" href="#">View All</a>
					</div>
				</div>
			</div>
			<div class="col pl-lg-5 mt-6 mt-lg-0">
				<div class="row">
					<div class="col-md-6 col-lg-12 mb-7">
						<div class="row font-1">
							<div class="col-12 mb-4">
								<h6 class="text-uppercase mb-0">Likes</h6>
								<div class="fs-4 fw-100 color-5">3676</div>
							</div>
							<div class="col-12 mb-4">
								<h6 class="text-uppercase mb-0">Followers</h6>
								<div class="fs-4 fw-100 color-5">9.8M</div>
							</div>
							<div class="col-12">
								<h6 class="text-uppercase mb-0">Posts</h6>
								<div class="fs-4 fw-100 color-5">487</div>
							</div>
						</div>
					</div>
				<div class="col-md-6 col-lg-12">
					<h5 class="mb-4">Friends</h5>
					<!-- <div class="row align-items-center mb-3">
						<div class="col-4">
							<img class="img-thumbnail radius-primary" src="assets/images/portraits/square/04.jpg">
						</div>
						<div class="col font-1 pl-0">
							<a href="#">Selena Rouse</a>
							<p class="fs--1 color-4 mb-0">SVP, Marketing, Apple</p>
						</div>
					</div>
					<div class="row align-items-center mb-3">
						<div class="col-4">
							<img class="img-thumbnail radius-primary" src="assets/images/portraits/square/05.jpg">
						</div>
						<div class="col font-1 pl-0">
							<a href="#">Kelly Burgess</a>
							<p class="fs--1 color-4 mb-0">VP, Sales, Google</p>
						</div>
					</div>
					<div class="row align-items-center mb-3">
						<div class="col-4">
							<img class="img-thumbnail radius-primary" src="assets/images/portraits/square/06.jpg">
						</div>
						<div class="col font-1 pl-0">
							<a href="#">Laura Smith</a>
							<p class="fs--1 color-4 mb-0">Content Manager, NY Times</p>
						</div>
					</div>
					<div class="row align-items-center mb-3">
						<div class="col-4">
							<img class="img-thumbnail radius-primary" src="assets/images/portraits/square/01.jpg">
						</div>
						<div class="col font-1 pl-0">
							<a href="#">Nia Khalifa</a>
							<p class="fs--1 color-4 mb-0">Actress, The Big Bang Theory </p>
						</div>
					</div>
					<div class="row align-items-center mb-3">
						<div class="col-4">
							<img class="img-thumbnail radius-primary" src="assets/images/portraits/square/02.jpg">
						</div>
						<div class="col font-1 pl-0">
							<a href="#">Mike Ross</a>
							<p class="fs--1 color-4 mb-0">Assosiate, Pearson Hardman</p>
						</div>
					</div> -->
				</div>
				</div>
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

</body>
</html>