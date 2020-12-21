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
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCSKmwvemciVKpYv2rwInqDWDKThZ9iqgI&callback=myMap"></script>
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
                    <!-- <li>
                        <a href="javascript:void(0)">Components</a>
                        <div class="container megamenu">
                            <div class="row">
                                <div class="col gutter-0 hidden-md-down color-white">
                                    <div class="background-holder overlay" style="background-image:url(assets/images/megamenu.jpg);">
                                    </div>
                                    <div class="row justify-content-center h-100 py-9">
                                        <div class="col-6 align-self-center">
                                            <p class="lead lh-3 fw-400">Detailed and organised components</p>
                                            <a class="btn btn-outline-white btn-sm" href="#">Start Creating</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="row justify-content-center my-5 pl-5 no-gutters">
                                        <div class="col-sm-4">
                                            <ul>
                                                <li>
                                                    <a href="component-accordion.html">Accordion</a>
                                                </li>
                                                <li>
                                                    <a href="component-alerts.html">Alerts</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li> -->
                    <li>
                        <a href="JavaScript:void(0)">Profil</a>
                        <ul class="dropdown">
                            <li>
                                <a href="<?php echo base_url();?>lp">Login</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>rp">Register</a>
                            </li>
                            <!-- <li>
                                <a href="JavaScript:void(0)">Register</a>
                                <ul class="dropdown dropdown-push-left">
                                    <li>
                                        <a href="page-about-company.html">About Company</a>
                                    </li>
                                    <li>
                                        <a href="page-about-team.html">About Team</a>
                                    </li>
                                </ul>
                            </li> -->
                        </ul>
                    </li>
                    <li>
                        <a href="<?php base_url();?>Us">Contact Us</a>
                    </li>
                    <!-- <li>
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Login</button>
                    </li> -->
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
        <form>
          <select class="form-group form-control mb-3">
                      <option selected>Islam</option>
                      <option>Kristen</option>
                      <option>Hindu</option>
                      <option>Buddha</option>
                      <option>Kong Hu Cu</option>
          </select>
          <!-- <select class="form-group form-control mb-3">
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
          </select> -->
          <button type="button" class="btn">Cari</button>
        </form>
      </div>
      <div class="col-lg-10">
        <div id="googleMap" style="width:100%;height:380px;"></div>
      </div>
    </div>
  </div>
</section>

<!-- <section class="font-1">
  <div class="container">
    <div class="row align-items-center">
        <div class="col-lg-6 mb-8">
            <h3>Agama Islam</h3>
            <p class="my-5 lead font-1 color-4">
            Islam (Arab: الإسلام, translit. al-islām‎, Tentang suara ini dengarkan (bantuan·info)) adalah agama yang mengimani satu Tuhan, yaitu Allah. Dengan lebih dari satu seperempat miliar orang pengikut di seluruh dunia, menjadikan Islam sebagai agama terbesar kedua di dunia setelah agama Kristen. Islam memiliki arti "penyerahan", atau penyerahan diri sepenuhnya kepada Tuhan (Arab: الله, Allāh).
            </p>
        </div>
        <div class="col-lg-6 mb-8">
            <img src="<?php echo base_url();?>assets/images/mesjid-01.png">
        </div>
    </div>
  </div>
</section>

<section class="background-11 pt-4 pt-md-6 pt-lg-8">
  <div class="container">
    <div class="row align-items-center">
        <div class="col-lg-6 mb-8 push-lg-6">
            <h3>Agama Kristen Protestan</h3>
            <p class="my-5 lead font-1 color-4">
            Protestanisme adalah sebuah denominasi dalam agama Kristen. denominasi ini muncul setelah protes Martin Luther pada tahun 1517 dengan 95 dalilnya. Kata Protestan sendiri diaplikasikan kepada umat Kristen yang menolak ajaran maupun otoritas Gereja Katolik. Kata ini didefinisikan sebagai gerakan agamawi yang berlandaskan iman dan praktik Kekristenan yang berawal dari dorongan Reformasi Protestan dalam segi doktrin, politik dan eklesiologi, melawan apa yang dianggap sebagai penyelewengan Gereja Katolik Roma.
            </p>
        </div>
        <div class="col-lg-6 mb-8 pull-lg-6">
            <img src="<?php echo base_url();?>assets/images/protestan-01.jpg">
        </div>
    </div>
  </div>
</section>

<section class="font-1">
  <div class="container">
    <div class="row align-items-center">
       <div class="col-lg-6 mb-8 mb-lg-0">
            <h3>Agama Kristen Katolik</h3>
            <p class="my-5 lead font-1 color-4">
            Kata Katolik berasal dari kata sifat bahasa Yunani, καθολικός (katholikos), artinya "universal". Dalam konteks eklesiologi Kristen, kata Katolik memiliki sejarah yang kaya sekaligus beberapa makna. Bagi sebagian pihak, istilah "Gereja Katolik" bermakna Gereja yang berada dalam persekutuan penuh dengan Uskup Roma, terdiri atas Gereja Latin dan 23 Gereja Katolik Timur; makna inilah yang umum dipahami di banyak negara. Bagi umat Protestan, "Gereja Katolik" atau yang sering diterjemahkan menjadi "Gereja Am" bermakna segenap orang yang percaya kepada Yesus Kristus di seluruh dunia dan sepanjang masa, tanpa memandang "denominasi".
            </p>
        </div>
        <div class="col-lg-6">
            <img src="<?php echo base_url();?>assets/images/katolik-01.jpg">
        </div>
    </div>
  </div>
</section>

<section class="background-11 pt-4 pt-md-6 pt-lg-8">
  <div class="container">
    <div class="row align-items-center">
        <div class="col-lg-6 mb-8 push-lg-6">
            <h3>Agama Hindu</h3>
            <p class="my-5 lead font-1 color-4">
            Agama Hindu (bahasa Sanskerta: Sanātana Dharma सनातन धर्म "Kebenaran Abadi"), dan Vaidika-Dharma ("Pengetahuan Kebenaran") adalah sebuah agama dunia. Agama ini merupakan lanjutan dari agama Weda (Brahmanisme) yang merupakan kepercayaan bangsa Indo-Iran (Arya). Agama ini diperkirakan muncul antara tahun 3102 SM sampai 1300 SM. Agama ini merupakan agama ketiga terbesar di dunia setalah Kristen dan Islam dengan jumlah umat sebanyak hampir 1 milyar jiwa. Penganut agama Hindu sebagian besar terdapat di anakbenua India. Di sini terdapat sekitar 90% penganut agama ini. Namun agama ini pernah tersebar di Asia Tenggara sampai kira-kira abad ke-15, lebih tepatnya pada masa keruntuhan Majapahit.
            </p>
        </div>
        <div class="col-lg-6 mb-8 pull-lg-6">
            <img src="<?php echo base_url();?>assets/images/hindu-01.jpg">
        </div>
    </div>
  </div>
</section>

<section class="font-1">
  <div class="container">
    <div class="row align-items-center">
        <div class="col-lg-6 mb-8 mb-lg-0">
            <h3>Agama Buddha</h3>
            <p class="my-5 lead font-1 color-4">
            Buddha (Sanskerta: बुद्ध berarti mereka yang sadar atau yang mencapai pencerahan sejati, dan telah menyadari Empat Kebenaran Mulia secara penuh. Istilah ini, yang berasal dari bahasa Sanskerta: "Budh" (yang bermakna telah mengetahui), adalah gelar kepada individu yang menyadari potensi penuh mereka untuk memajukan diri dan yang berkembang kesadarannya. Dalam penggunaan kontemporer, ia sering digunakan untuk merujuk Siddharta Gautama, guru agama dan pendiri Agama Buddha (dianggap "Buddha dalam zaman ini"). Dalam penggunaan lain, ia merupakan tarikan dan contoh bagi manusia yang telah sadar.
            </p>
        </div>
        <div class="col-lg-6">
            <img src="<?php echo base_url();?>assets/images/buddha-01.jpg">
        </div>
    </div>
  </div>
</section>

<section class="background-11 pt-4 pt-md-6 pt-lg-8">
  <div class="container">
    <div class="row align-items-center">
        <div class="col-lg-6 mb-8 push-lg-6">
            <h3>Agama Kong Hu Cu</h3>
            <p class="my-5 lead font-1 color-4">
            Ajaran Kong Hu Cu (juga: Kong Fu Tze atau Konfusius) dalam bahasa Tionghoa, istilah aslinya adalah Rujiao (儒教) yang berarti agama dari orang-orang yang lembut hati, terpelajar dan berbudi luhur. Khonghucu memang bukanlah pencipta agama ini melainkan dia hanya menyempurnakan agama yang sudah ada jauh sebelum kelahirannya seperti apa yang dia sabdakan: "Aku bukanlah pencipta melainkan Aku suka akan ajaran-ajaran kuno tersebut". Meskipun orang kadang mengira bahwa Khonghucu adalah merupakan suatu pengajaran filsafat untuk meningkatkan moral dan menjaga etika manusia.
            </p>
        </div>
        <div class="col-lg-6 mb-8 pull-lg-6">
            <img src="<?php echo base_url();?>assets/images/konghucu-01.jpg">
        </div>
    </div>
  </div>
</section> -->

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

<!-- <section class="background-11 text-center">
  <div class="container">
    <div class="row align-items-center justify-content-center">
      <div class="col-lg-8 pb-5">
        <img class="mb-4" src="assets/images/Bootstrap4%2bPOSH.png" width="352">
        <h3 class="my-4 fw-400"> Boostrap and POSH <br>Made to do more together</h3>
        <p class="lead font-1 mb-0 color-5">
        Built with Bootstrap 4x; Highly Customizable Posh's visual style is simple yet distinct. Specially made for your next project whether it is a restaurant or travel agency site.</p>
      </div>
    </div>
  </div>
</section> -->

<section class="text-center py-0">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col col-lg-12 py-7 px-5" style="background: #5800C5;">
                                <img height="46" src="assets/images/software-partner-01.svg">
                            </div>
                            <div class="col col-lg-12 py-7 px-5" style="background: #E13A2B;">
                                <img height="46" src="assets/images/software-partner-03.svg">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 px-5">
                        <div class="background-holder" style="background-image:url(assets/images/software-partner-09.jpg);">
                        </div>
                        <img class="my-7" height="46" src="assets/images/software-partner-02.svg">
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
                                <div class="background-holder" style="background-image:url(assets/images/software-partner-10.jpg);">
                                </div>
                                <img height="46" src="assets/images/software-partner-05.svg">
                            </div>
                            <div class="col col-lg-12 py-7 px-5" style="background: #4A9DEF;">
                                <img height="46" src="assets/images/software-partner-07.svg">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row h-100">
                            <div class="col col-lg-12 py-7 px-5 background-10">
                                <img height="46" src="assets/images/software-partner-06.svg">
                            </div>
                            <div class="col col-lg-12 py-7 px-5 background-black">
                                <img height="46" src="assets/images/software-partner-08.svg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- <section class="text-center pt-9">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8 mb-xl-4">
                <h3 class="fw-400">Do more with Posh </h3>
                <p class="lead font-1 color-5">Lifetime bugfix &amp; updates</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="card mb-5 mb-lg-0 h-100">
                    <div class="card-header background-10">
                        <h4 class="color-4 fw-400 py-2 m-0">Islam</h4>
                    </div>
                    <div class="card-block pb-3">
                        <p class="color-6 font-1 fw-300">Islam (Arab: الإسلام, translit. al-islām‎, Tentang suara ini dengarkan (bantuan·info)) adalah agama yang mengimani satu Tuhan, yaitu Allah.</p>
                    </div>
                    <div class="card-footer background-white border-top-0 pt-5">
                        <a class="btn btn-outline-primary" href="#">Try free for 30 days</a>
                        <br>
                        <div class="fs--1 mt-2"> or
                            <a href="#">Purchase now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card mb-5 card-outline-primary mb-lg-0 h-100">
                    <div class="card-header background-primary">
                        <h4 class="color-white fw-400 py-2 m-0">Advanced</h4>
                    </div>
                    <div class="card-block pb-3">
                        <p class="color-6 font-1 fw-300">Simple and straightforward pricing plans that scale perfectly with your business</p>
                    </div>
                    <h2 class="fw-100">$20</h2>
                    <small class="font-1 color-6">/ user / month, starting at 3 users</small>
                    <div class="card-footer background-white border-top-0 pt-5">
                        <a class="btn btn-primary" href="#">Try free for 30 days</a>
                        <br>
                        <div class="fs--1 mt-2">or
                            <a href="#">Purchase now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-4">
                <div class="card mb-5 mb-lg-0 h-100">
                    <div class="card-header background-10">
                        <h4 class="color-4 fw-400 py-2 m-0">Enterprise</h4>
                    </div>
                    <div class="card-block pb-3">
                        <p class="color-6 pt-6 font-1 fw-300">Customizable solutions with individualized support to help admins manage at scale</p>
                    </div>
                    <div class="card-footer background-white border-top-0 pt-6">
                        <a class="btn btn-outline-primary mb-4" href="#">Contact us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->

<!-- <section class="text-center">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-8">
                <h2 class="mb-0 fw-400">Build Something Brilliant</h2>
                <p class="lead font-1 mb-6 color-5">2088 Premium icons - Included FREE with Posh</p>
                <a class="btn btn-outline-primary btn-capsule m-1" href="#">Try it Free</a>
                <a class="btn btn-primary btn-capsule m-1" href="#">Subscribe</a>
                <img class="mt-7" src="assets/images/software-banner-01.jpg">
            </div>
        </div>
    </div>
</section> -->

<!-- <section class="background-11 font-1 text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 px-6 mb-5 mb-lg-0">
                
                <h5 class="fw-400 my-3">Islam</h5>
                <p class="mb-0 color-5 fw-300">Islam (Arab: الإسلام, translit. al-islām‎, Tentang suara ini dengarkan (bantuan·info)) adalah agama yang mengimani satu Tuhan, yaitu Allah.</p>
                <a class="btn btn-link fw-400" href="#">Get started &rarr;</a>
            </div>
            <div class="col-lg-4 px-6 mb-5 mb-lg-0">
                
                <h5 class="fw-400 my-3">Money back guarantee</h5>
                <p class="mb-0 color-5 fw-300">100% satisfied with Posh or your money back</p>
                <a class="btn btn-link fw-400" href="#">View pricing &rarr;</a>
            </div>
            <div class="col-lg-4 px-6 mb-5 mb-lg-0">
                <img src="assets/images/software-icon-03.svg" width="70">
                <h5 class="fw-400 my-3">Have a question?</h5>
                <p class="mb-0 color-5 fw-300">We are always here to answer with a friendly support</p>
                <a class="btn btn-link fw-400" href="#">Chat now  &rarr;</a>
            </div>
        </div>
    </div>
</section> -->

<section class="font-1 fs--1">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-12">
                <div class="color-4 my-2"></div>
            </div>
            <div class="col-4 col-md-2">
                <a class="color-4 d-block my-2" href="#"></a>
            </div>
            <div class="col-4 col-md-2">
                <a class="color-4 d-block my-2" href="#"></a>
            </div>
            <div class="col-4 col-md-2">
                <small>&copy; Copyright 2018 MjReaper</small>
            </div>
        </div>
    </div>
</section>

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
