<!DOCTYPE html>
<html lang="en-US">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Ibadah Yuk | Home</title>

<link href="<?php echo base_url(); ?>assets/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/lib/iconsmind/iconsmind.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/lib/css-hamburgers/dist/hamburgers.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/lib/owl.carousel/dist/assets/owl.carousel.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/lib/owl.carousel/dist/assets/owl.theme.default.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet">

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
google.maps.event.addDomListener(window, 'load', initialize);

</script>

<script type="text/javascript">
    function jam() {
    var time = new Date(),
        hours = time.getHours(),
        minutes = time.getMinutes(),
        seconds = time.getSeconds();
    document.querySelectorAll('.jam')[0].innerHTML = harold(hours) + ":" + harold(minutes) + ":" + harold(seconds);
      
    function harold(standIn) {
        if (standIn < 10) {
          standIn = '0' + standIn
        }
        return standIn;
        }
    }
    setInterval(jam, 1000);
</script>

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
                                <a href="#">Islam</a>
                            </li>
                            <li>
                                <a href="#">Kristen Protestan</a>
                            </li>
                            <li>
                                <a href="#">Kristen Katolik</a>
                            </li>
                            <li>
                                <a href="#">Hindu</a>
                            </li>
                            <li>
                                <a href="#">Buddha</a>
                            </li>
                            <li>
                                <a href="#">Kong Hu Cu</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="JavaScript:void(0)">Profil</a>
                        <ul class="dropdown">
                            <li>
                                <a href="<?php echo base_url();?>lp">Login</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>rp">Register</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php base_url();?>About">Contact Us</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>

<section class="background-11 pt-4 pt-md-6 pt-lg-8">
    <div class="container">
        <div class="col text-center pt-8">
            <h6 class="ls text-uppercase mb-5">INTRODUCING IBADAHYUK</h6>
            <h2 class="fw-300">Hy !<span class="color-primary">
            <br class="hidden-sm-up">
            <span class="typed-text fw-400" data-typed-text='["Selamat Datang di","Welcome to"]'>
            </span>
            </span>
            <br class="hidden-sm-up">IbadahYuk</h2>
            <p class="mt-1 lead color-5">Jangan lupa beribadah</p>
            <a class="btn btn-primary btn-sm mt-5" href="<?php echo base_url();?>lp">Login User</a>
            <br>
            <div class="fs--1 mt-2">
                    <span class="color-6">or </span>
                    <a href="<?php echo base_url();?>rp">Register &xrarr;</a>
            </div>
        </div>
    </div>
</section>

<section class="background-11 pt-4 pt-md-6 pt-lg-8">
  <div class="container">
    <div class="row">
      <div class="col-lg-2 hidden-md-down">
        <form method="post" action="<?php echo base_url(); ?>find">
          <select class="form-group form-control mb-3" name="agama">
                      <option selected>Islam</option>
                      <option>Kristen Protestan</option>
                      <option>Kristen Katolik</option>
                      <option>Hindu</option>
                      <option>Buddha</option>
                      <option>Kong Hu Cu</option>
          </select>
          <button type="submit" class="btn">Cari Tempat</button>
        </form>
      </div>
      <div class="col-lg-10">
        <div id="googleMap" style="width:100%;height:380px;"></div>
      </div>
    </div>
  </div>
</section>

<section class="text-center">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8 mb-xl-4">
                <h3 class="fw-400">Keanekaragaman Agama di Indonesia</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="card mb-5 mb-lg-0 h-100">
                    <div class="card-header background-10">
                        <h4 class="color-4 fw-400 py-2 m-0">Islam</h4>
                    </div>
                    <div class="card-block pb-3">
                        <p class="color-6 font-1 fw-300 text-left">Islam (Arab: الإسلام, translit. al-islām‎, Tentang suara ini dengarkan (bantuan·info)) adalah agama yang mengimani satu Tuhan, yaitu Allah. Dengan lebih dari satu seperempat miliar orang pengikut di seluruh dunia, menjadikan Islam sebagai agama terbesar kedua di dunia setelah agama Kristen. Islam memiliki arti "penyerahan", atau penyerahan diri sepenuhnya kepada Tuhan (Arab: الله, Allāh).</p>
                    </div>
                    <div class="card-footer background-white border-top-0 pt-5">
                        <a class="btn btn-outline-primary" href="#">Lihat selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card mb-5 mb-lg-0 h-100">
                    <div class="card-header background-10">
                        <h4 class="color-4 fw-400 py-2 m-0">Kristen Protestan</h4>
                    </div>
                    <div class="card-block pb-3">
                        <p class="color-6 font-1 fw-300">Protestanisme adalah sebuah denominasi dalam agama Kristen. denominasi ini muncul setelah protes Martin Luther pada tahun 1517 dengan 95 dalilnya. Kata Protestan sendiri diaplikasikan kepada umat Kristen yang menolak ajaran maupun otoritas Gereja Katolik. Kata ini didefinisikan sebagai gerakan agamawi yang berlandaskan iman dan praktik Kekristenan yang berawal dari dorongan Reformasi Protestan dalam segi doktrin, politik dan eklesiologi, melawan apa yang dianggap sebagai penyelewengan Gereja Katolik Roma.</p>
                    </div>
                    <div class="card-footer background-white border-top-0 pt-5">
                        <a class="btn btn-outline-primary" href="#">Lihat selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card mb-5 mb-lg-0 h-100">
                    <div class="card-header background-10">
                        <h4 class="color-4 fw-400 py-2 m-0">Kristen Katolik</h4>
                    </div>
                    <div class="card-block pb-3">
                        <p class="color-6 font-1 fw-300">Kata Katolik berasal dari kata sifat bahasa Yunani, καθολικός (katholikos), artinya "universal". Dalam konteks eklesiologi Kristen, kata Katolik memiliki sejarah yang kaya sekaligus beberapa makna. Bagi sebagian pihak, istilah "Gereja Katolik" bermakna Gereja yang berada dalam persekutuan penuh dengan Uskup Roma, terdiri atas Gereja Latin dan 23 Gereja Katolik Timur; makna inilah yang umum dipahami di banyak negara. Bagi umat Protestan, "Gereja Katolik" atau yang sering diterjemahkan menjadi "Gereja Am" bermakna segenap orang yang percaya kepada Yesus Kristus di seluruh dunia dan sepanjang masa, tanpa memandang "denominasi".</p>
                    </div>
                    <div class="card-footer background-white border-top-0 pt-5">
                        <a class="btn btn-outline-primary" href="#">Lihat selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="card mb-5 mb-lg-0 h-100">
                    <div class="card-header background-10">
                        <h4 class="color-4 fw-400 py-2 m-0">Hindu</h4>
                    </div>
                    <div class="card-block pb-3">
                        <p class="color-6 font-1 fw-300 text-left">Agama Hindu (bahasa Sanskerta: Sanātana Dharma सनातन धर्म "Kebenaran Abadi"), dan Vaidika-Dharma ("Pengetahuan Kebenaran") adalah sebuah agama dunia. Agama ini merupakan lanjutan dari agama Weda (Brahmanisme) yang merupakan kepercayaan bangsa Indo-Iran (Arya). Agama ini diperkirakan muncul antara tahun 3102 SM sampai 1300 SM. Agama ini merupakan agama ketiga terbesar di dunia setalah Kristen dan Islam dengan jumlah umat sebanyak hampir 1 milyar jiwa. Penganut agama Hindu sebagian besar terdapat di anakbenua India. Di sini terdapat sekitar 90% penganut agama ini. Namun agama ini pernah tersebar di Asia Tenggara sampai kira-kira abad ke-15, lebih tepatnya pada masa keruntuhan Majapahit.</p>
                    </div>
                    <div class="card-footer background-white border-top-0 pt-5">
                        <a class="btn btn-outline-primary" href="#">Lihat selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card mb-5 mb-lg-0 h-100">
                    <div class="card-header background-10">
                        <h4 class="color-4 fw-400 py-2 m-0">Buddha</h4>
                    </div>
                    <div class="card-block pb-3">
                        <p class="color-6 font-1 fw-300">Buddha (Sanskerta: बुद्ध berarti mereka yang sadar atau yang mencapai pencerahan sejati, dan telah menyadari Empat Kebenaran Mulia secara penuh. Istilah ini, yang berasal dari bahasa Sanskerta: "Budh" (yang bermakna telah mengetahui), adalah gelar kepada individu yang menyadari potensi penuh mereka untuk memajukan diri dan yang berkembang kesadarannya. Dalam penggunaan kontemporer, ia sering digunakan untuk merujuk Siddharta Gautama, guru agama dan pendiri Agama Buddha (dianggap "Buddha dalam zaman ini"). Dalam penggunaan lain, ia merupakan tarikan dan contoh bagi manusia yang telah sadar.</p>
                    </div>
                    <div class="card-footer background-white border-top-0 pt-5">
                        <a class="btn btn-outline-primary" href="#">Lihat selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card mb-5 mb-lg-0 h-100">
                    <div class="card-header background-10">
                        <h4 class="color-4 fw-400 py-2 m-0">Kong Hu Cu</h4>
                    </div>
                    <div class="card-block pb-3">
                        <p class="color-6 font-1 fw-300">Ajaran Kong Hu Cu (juga: Kong Fu Tze atau Konfusius) dalam bahasa Tionghoa, istilah aslinya adalah Rujiao (儒教) yang berarti agama dari orang-orang yang lembut hati, terpelajar dan berbudi luhur. Khonghucu memang bukanlah pencipta agama ini melainkan dia hanya menyempurnakan agama yang sudah ada jauh sebelum kelahirannya seperti apa yang dia sabdakan: "Aku bukanlah pencipta melainkan Aku suka akan ajaran-ajaran kuno tersebut". Meskipun orang kadang mengira bahwa Khonghucu adalah merupakan suatu pengajaran filsafat untuk meningkatkan moral dan menjaga etika manusia.</p>
                    </div>
                    <div class="card-footer background-white border-top-0 pt-5">
                        <a class="btn btn-outline-primary" href="#">Lihat selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="text-center py-0">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col col-lg-12 py-7 px-5" style="background-image:url(<?php echo base_url();?>assets/images/02.jpg);;">
                                <img height="46" src="">
                            </div>
                            <div class="col col-lg-12 py-7 px-5" style="background-image:url(<?php echo base_url();?>assets/images/03.jpg);;">
                                <img height="46" src="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 px-5">
                        <div class="background-holder" style="background-image:url(<?php echo base_url();?>assets/images/01.jpg);">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-lg-4 py-5 px-5" style="background: #FAE8D3;">
                <p class="mt-4 color-3 lead font-1">
                Let's Join Us Ibadah Yuk</p>
                <div class="font-1 mt-4 fw-600">
                Muhammad Jaury</div>
                <p class="fs--1 font-1 mb-0 color-5">
                Leader of MjReaper Team</p>
            </div>
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col col-lg-12 py-7 px-5">
                                <div class="background-holder" style="background-image:url(<?php echo base_url();?>assets/images/07.jpg);">
                                </div>
                                <img height="46" src="">
                            </div>
                            <div class="col col-lg-12 py-7 px-5" style="background-image:url(<?php echo base_url();?>assets/images/05.jpg);">
                                <img height="46" src="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row h-100">
                            <div class="col col-lg-12 py-7 px-5">
                                <div class="background-holder" style="background-image:url(<?php echo base_url();?>assets/images/06.jpg);">
                                </div>
                                <img height="46" src="">
                            </div>
                            <div class="col col-lg-12 py-7 px-5">
                                <div class="background-holder" style="background-image:url(<?php echo base_url();?>assets/images/04.jpg);">
                                </div>
                                <img height="46" src="">
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

<script src="assets/lib/typed.js/dist/typed.min.js"></script>
<script src="assets/lib/owl.carousel/dist/owl.carousel.min.js"></script>
<script src="assets/js/core.js"></script>
<script src="assets/js/main.js"></script>

</body>
</html>
