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

<!-- Custom -->
	
	<style type="text/css">

#jsalarmclock{
font-family: Tahoma;
font-weight: bold;
font-size: 12px;
}

#jsalarmclock div{
margin-bottom: 0.8em;
}

#jsalarmclock div.leftcolumn{
float: left;
width: 150px;
font-size: 13px;
clear: left;
}

#jsalarmclock span{
margin-right: 5px;
}

</style>

<script type="text/javascript">

/***********************************************

* JavaScript Alarm Clock- by JavaScript Kit (www.javascriptkit.com)
* This notice must stay intact for usage
* Visit JavaScript Kit at http://www.javascriptkit.com/ for this script and 100s more

***********************************************/

var jsalarm={
	padfield:function(f){
		return (f<10)? "0"+f : f
	},
	showcurrenttime:function(){
		var dateobj=new Date()
		var ct=this.padfield(dateobj.getHours())+":"+this.padfield(dateobj.getMinutes())+":"+this.padfield(dateobj.getSeconds())
		this.ctref.innerHTML=ct
		this.ctref.setAttribute("title", ct)
		if (typeof this.hourwake!="undefined"){ //if alarm is set
			if (this.ctref.title==(this.hourwake+":"+this.minutewake+":"+this.secondwake)){
				clearInterval(jsalarm.timer)
				window.location=document.getElementById("musicloc").value
			}
		}
	},
	init:function(){
		var dateobj=new Date()
		this.ctref=document.getElementById("jsalarm_ct")
		this.submitref=document.getElementById("submitbutton")
		this.submitref.onclick=function(){
			jsalarm.setalarm()
			this.value="Alarm Set"
			this.disabled=true
			return false
		}
		this.resetref=document.getElementById("resetbutton")
		this.resetref.onclick=function(){
		jsalarm.submitref.disabled=false
		jsalarm.hourwake=undefined
		jsalarm.hourselect.disabled=false
		jsalarm.minuteselect.disabled=false
		jsalarm.secondselect.disabled=false
		return false
		}
		var selections=document.getElementsByTagName("select")
		this.hourselect=selections[0]
		this.minuteselect=selections[1]
		this.secondselect=selections[2]
		for (var i=0; i<60; i++){
			if (i<24) //If still within range of hours field: 0-23
			this.hourselect[i]=new Option(this.padfield(i), this.padfield(i), false, dateobj.getHours()==i)
			this.minuteselect[i]=new Option(this.padfield(i), this.padfield(i), false, dateobj.getMinutes()==i)
			this.secondselect[i]=new Option(this.padfield(i), this.padfield(i), false, dateobj.getSeconds()==i)

		}
		jsalarm.showcurrenttime()
		jsalarm.timer=setInterval(function(){jsalarm.showcurrenttime()}, 1000)
	},
	setalarm:function(){
		this.hourwake=this.hourselect.options[this.hourselect.selectedIndex].value
		this.minutewake=this.minuteselect.options[this.minuteselect.selectedIndex].value
		this.secondwake=this.secondselect.options[this.secondselect.selectedIndex].value
		this.hourselect.disabled=true
		this.minuteselect.disabled=true
		this.secondselect.disabled=true
	}
}

</script>

<!-- End Custom -->


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
			<div class="col-lg-7 col-xl-7">
				<h5 class="text-uppercase mb-0">Pengingat Ibadah</h5>
				<hr class="color-9">

				<?php 
                    foreach ($data_pengingat as $row){
                        echo '
								<div class="row align-items-center">
									<div class="col">
										<h6 class="color-6">'.$row['tanggal'].'</h6>
										<a class="font-1" href="#">'.$row['nama_pengingat'].'</a>
										<p class="font-1 color-2 fw-300">Waktu Ibadah : '.$row['waktu'].'</p>
										<p class="font-1 color-2 fw-300">Keterangan : '.$row['deskripsi'].'</p>
									</div>
								</div>
								<hr class="color-9">
                    ';}
                ?>

				<a class="btn btn-primary" href="<?php echo base_url();?>add">Tambah Pengingat</a>
				<a class="btn btn-primary" href="<?php echo base_url();?>delete">Hapus Pengingat</a>
			</div>

			<div class="col pl-lg-5 mt-6 mt-lg-0">
				<div class="row">
					<div class="col-md- col-lg-12 mb-7">
						<div class="row font-1">
							<div class="col-12 mb-4">
								<h5 class="text-uppercase mb-0">Alarm</h5>
								</br>
								<form action="" method="">
									<div id="jsalarmclock">
										<div>
											<h4 id="jsalarm_ct" style="letter-spacing: 2px"></h4>
										</div>
										<div>
											<div class="leftcolumn">Set Alarm :</div>
											<span><select></select></span> 
											<span><select></select></span> 
											<span><select></select></span>
										</div>
										<div>
											<div class="leftcolumn">Set Alarm Action :</div>
											<input type="text" id="musicloc" size="62" value="" /></div>
										<button class="btn btn-primary" type="submit" id="submitbutton">Set Alarm</button>
										<button class="btn btn-primary" type="Reset" id="resetbutton">Reset</button>
									</div>
								</form>
							</div>
						</div>
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

<!-- Alarm -->
<script type="text/javascript">
	jsalarm.init()
</script>
<!-- End Alarm -->

</body>
</html>