<!DOCTYPE html>
<html lang="en">

<head>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title>RIKOS</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- bootstrap css -->
   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
   <!-- style css -->
   <link rel="stylesheet" type="text/css" href="css/style.css">
   <!-- Responsive-->
   <link rel="stylesheet" href="css/responsive.css">
   <!-- fevicon -->
   <link rel="icon" href="images/fevicon.png" type="image/gif" />
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <!-- owl stylesheets -->
   <link rel="stylesheet" href="css/owl.carousel.min.css">
   <link rel="stylesheet" href="css/owl.theme.default.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />

   <style>
      .small-img-group {
         display: flex;
         justify-content: space-between;
      }

      .small-img-col {
         flex-basis: 24%;
         cursor: pointer;
      }

      .swiper-slide {
         box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
         /* Tambahkan bayangan kartu */
         border-radius: 10px;
         /* Tambahkan sudut bulat */
         overflow: hidden;
         /* Hindari bayangan keluar dari kartu */
      }
   </style>
</head>

<body>
   <!-- header section start -->
   <div class="header_section">
      <div class="container">
         <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="logo"><a href="index.php"><img src="images/logo.png"></a></div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav mr-auto">
               </ul>
               <form class="form-inline my-2 my-lg-0">
                  <div class="search_icon">
                     <ul>
                        <li><a href="Login.php" style="color: #ffffff;">LOGIN</a></li>
                        <li><a href="Register.php" style="color: #ffffff;">SIGNUP</a></li>
                     </ul>
                  </div>
               </form>
            </div>
         </nav>
      </div>
      <!-- banner section start -->
      <div class="banner_section layout_padding">
         <div class="container">
            <div id="costum_slider" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <h1 class="furniture_text">CARI KOS</h1>
                     <p class="there_text">Ini adalah website untuk mencari kamar kos yang lengkap, terpercaya untuk mahasiswa dan orang umum</p>
                     <div class="contact_bt_main">
                        <div class="contact_bt"><a href="contact.html">Contact Us</a></div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <h1 class="furniture_text">tempat bagus</h1>
                     <p class="there_text">kos di "Rikos" sangat nyaman dengan tempat kos juara bintang 5 </p>
                     <div class="contact_bt_main">
                        <div class="contact_bt"><a href="contact.html">Contact Us</a></div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <h1 class="furniture_text">AMAN & NYAMAN</h1>
                     <p class="there_text">Tempat nyaman tanpa takut ada gangguan</p>
                     <div class="contact_bt_main">
                        <div class="contact_bt"><a href="contact.html">Contact Us</a></div>
                     </div>
                  </div>
               </div>
               <a class="carousel-control-prev" href="#costum_slider" role="button" data-slide="prev">
                  <i class=""><img src="images/left-arrow.png"></i>
               </a>
               <a class="carousel-control-next" href="#costum_slider" role="button" data-slide="next">
                  <i class=""><img src="images/right-arrow.png"></i>
               </a>
            </div>
         </div>
      </div>
      <!-- banner section end -->
   </div>
   <!-- header section end -->
   <!-- furnitures section start -->
   <div class="furnitures_section layout_padding">
      <div class="container">
         <h1 class="our_text">KAMAR KOS KHUSUS PUTRI & PUTRA</h1>
         <p class="ipsum_text">Kami menyediakan banyak varian kamar di sepuluh lokasi strategis sebagai kos khusus putri maupun putra</p>
         <div class="furnitures_section2 layout_padding">
            <section class="container sproduct my-2 pt-2">
               <div class="card-slider d-flex flex-row flex-wrap justify-content-around ">
                  <div class="card text-center" style="width: 100rem;">
                     <div id="cardCarousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                           <div class="carousel-item active" data-bs-interval="10000">
                              <div class="card text-center">
                                 <div class="row">
                                    <div class="container_main col-md-12 col-lg-6 col-12 order-md-2 order-lg-1">
                                       <img src="images/maguwo.png" alt="Avatar" class="image img-fluid pb-1">
                                       <div class="small-img-group">
                                          <div class="small-img-col">
                                             <img src="images/maguwo1.png" class="small-img" width="100%" alt="">
                                          </div>
                                          <div class="small-img-col">
                                             <img src="images/maguwo2.png" class="small-img" width="100%" alt="">
                                          </div>
                                          <div class="small-img-col">
                                             <img src="images/maguwo3.png" class="small-img" width="100%" alt="">
                                          </div>
                                          <div class="small-img-col">
                                             <img src="images/maguwo4.png" class="small-img" width="100%" alt="">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="content col-md-12 col-lg-6 col-12 order-md-1 order-lg-2">
                                       <h3 class="temper_text card-title teks">Kos Putri Bandara Maguwoharjo</h3>
                                       <br>
                                       <p class="dololr_text card-text teks">Kost ini berlokasi 500 meter dari jalan raya solo dengan akses yang dapat dilalui oleh mobil, 3 menit dari Bandara Adisutjipto, dan 100 meter dari kampus Universitas Islam Sunan Kalijaga. Kost ini terdiri dari 2 lantai. Dengan total 9 kamar dan fasilitas lengkap. Silahkan login atau hubungi admin 082136352767</p>
                                       <br><br><br><br><br><br>
                                       <h2 class="harga_text teks">Rp750.000/Bulan</h2>
                                       <br>
                                       <a href="#" type="button" class="btn btn-info tombol">Lihat Detail</a>
                                       <a href="Login.php" type="button" class="btn btn-primary tombol">Menyewa</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="carousel-item">
                              <div class="card text-center">
                                 <div class="row">
                                    <div class="container_main col-md-12 col-lg-6 col-12 order-md-2 order-lg-1">
                                       <img src="images/jakal.jpeg" alt="Avatar" class="image img-fluid pb-1">
                                       <div class="small-img-group">
                                          <div class="small-img-col">
                                             <img src="images/jakal.jpeg" class="small-img" width="100%" alt="">
                                          </div>
                                          <div class="small-img-col">
                                             <img src="images/jakal1.jpeg" class="small-img" width="100%" alt="">
                                          </div>
                                          <div class="small-img-col">
                                             <img src="images/jakal2.jpeg" class="small-img" width="100%" alt="">
                                          </div>
                                          <div class="small-img-col">
                                             <img src="images/jakal3.jpeg" class="small-img" width="100%" alt="">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="content col-md-12 col-lg-6 col-12 order-md-1 order-lg-2">
                                       <h3 class="temper_text card-title teks">Kos Putri Jakal UII</h3>
                                       <br>
                                       <p class="dololr_text card-text teks">Kost ini berlokasi 500 meter dari kampus Universitas Islam Indonesia dengan akses yang dapat dilalui oleh mobil. Kost ini terdiri dari 2 lantai. Tipe kamar A berada di lantai 1 dengan jendela menghadap ke arah luar, dengan fasilitas lengkap pada semua tipe kamar yang ada dengan total 5 kamar. Silahkan login atau hubungi admin 082136352767</p>
                                       <br><br><br><br><br><br>
                                       <h2 class="harga_text teks">Rp700.000/Bulan</h2>
                                       <br>
                                       <a href="#" type="button" class="btn btn-info tombol">Lihat Detail</a>
                                       <a href="#" type="button" class="btn btn-primary tombol">Menyewa</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="carousel-item">
                              <div class="card text-center">
                                 <div class="row">
                                    <div class="container_main col-md-12 col-lg-6 col-12 order-md-2 order-lg-1">
                                       <img src="images/humaira.png" alt="Avatar" class="image img-fluid pb-1">
                                       <div class="small-img-group">
                                          <div class="small-img-col">
                                             <img src="images/humaira1.png" class="small-img" width="100%" alt="">
                                          </div>
                                          <div class="small-img-col">
                                             <img src="images/humaira2.png" class="small-img" width="100%" alt="">
                                          </div>
                                          <div class="small-img-col">
                                             <img src="images/humaira3.png" class="small-img" width="100%" alt="">
                                          </div>
                                          <div class="small-img-col">
                                             <img src="images/humaira4.png" class="small-img" width="100%" alt="">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="content col-md-12 col-lg-6 col-12 order-md-1 order-lg-2">
                                       <h3 class="temper_text card-title teks">Kos Putri Humaira Bantul</h3>
                                       <br>
                                       <p class="dololr_text card-text teks">Kost ini berlokasi 1 km dari kampus ISI Yogyakarta dengan akses yang dapat dilalui oleh mobil. Kost ini terdiri dari 1 lantai dengan total 4 kamar. Dengan fasilitas lengkap pada semua tipe kamar. Silahkan login atau hubungi admin 082136352767</p>
                                       <br><br><br><br><br><br>
                                       <h2 class="harga_text teks">Rp650.000/Bulan</h2>
                                       <br>
                                       <a href="#" type="button" class="btn btn-info tombol">Lihat Detail</a>
                                       <a href="#" type="button" class="btn btn-primary tombol">Menyewa</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="carousel-item">
                              <div class="card text-center">
                                 <div class="row">
                                    <div class="container_main col-md-12 col-lg-6 col-12 order-md-2 order-lg-1">
                                       <img src="images/monjali.png" alt="Avatar" class="image img-fluid pb-1">
                                       <div class="small-img-group">
                                          <div class="small-img-col">
                                             <img src="images/monjali1.png" class="small-img" width="100%" alt="">
                                          </div>
                                          <div class="small-img-col">
                                             <img src="images/monjali2.png" class="small-img" width="100%" alt="">
                                          </div>
                                          <div class="small-img-col">
                                             <img src="images/monjali3.png" class="small-img" width="100%" alt="">
                                          </div>
                                          <div class="small-img-col">
                                             <img src="images/monjali4.png" class="small-img" width="100%" alt="">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="content col-md-12 col-lg-6 col-12 order-md-1 order-lg-2">
                                       <h3 class="temper_text card-title teks">Kos Putri Monjali, Al Azhar</h3>
                                       <br>
                                       <p class="dololr_text card-text teks">Kost ini berlokasi 500 meter dari Monjali, dan 1km dari Sekolah Al Azhar, dengan akses yang dapat dilalui oleh mobil dan berada di kawasan Ringroad Utara. Kost ini terdiri dari 2 lantai dengan total 5 kamar. Dengan fasilitas lengkap pada semua tipe kamar. Silahkan login atau hubungi admin 082136352767</p>
                                       <br><br><br><br><br><br>
                                       <h2 class="harga_text teks">800.000/Bulan</h2>
                                       <br>
                                       <a href="#" type="button" class="btn btn-info tombol">Lihat Detail</a>
                                       <a href="#" type="button" class="btn btn-primary tombol">Menyewa</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="carousel-item">
                              <div class="card text-center">
                                 <div class="row">
                                    <div class="container_main col-md-12 col-lg-6 col-12 order-md-2 order-lg-1">
                                       <img src="images/malioboro.png" alt="Avatar" class="image img-fluid pb-1">
                                       <div class="small-img-group">
                                          <div class="small-img-col">
                                             <img src="images/malioboro1.png" class="small-img" width="100%" alt="">
                                          </div>
                                          <div class="small-img-col">
                                             <img src="images/malioboro2.png" class="small-img" width="100%" alt="">
                                          </div>
                                          <div class="small-img-col">
                                             <img src="images/malioboro3.png" class="small-img" width="100%" alt="">
                                          </div>
                                          <div class="small-img-col">
                                             <img src="images/malioboro4.png" class="small-img" width="100%" alt="">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="content col-md-12 col-lg-6 col-12 order-md-1 order-lg-2">
                                       <h3 class="temper_text card-title teks">Kos Putri Malioboro</h3>
                                       <br>
                                       <p class="dololr_text card-text teks">Kost ini berlokasi 1 kilo meter dari Jalan Malioboro, berada di pusat kota dengan akses yang dapat dilalui oleh mobil. Kost ini terdiri dari 2 lantai dengan total 4 kamar. Dengan fasilitas lengkap pada semua tipe kamar. Silahkan login atau hubungi admin 082136352767</p>
                                       <br><br><br><br><br><br>
                                       <h2 class="harga_text teks">800.000/Bulan</h2>
                                       <br>
                                       <a href="#" type="button" class="btn btn-info tombol">Lihat Detail</a>
                                       <a href="#" type="button" class="btn btn-primary tombol">Menyewa</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="carousel-item">
                              <div class="card text-center">
                                 <div class="row">
                                    <div class="container_main col-md-12 col-lg-6 col-12 order-md-2 order-lg-1">
                                       <img src="images/kavling.jpeg" alt="Avatar" class="image img-fluid pb-1">
                                       <div class="small-img-group">
                                          <div class="small-img-col">
                                             <img src="images/kavling1.jpeg" class="small-img" width="100%" alt="">
                                          </div>
                                          <div class="small-img-col">
                                             <img src="images/kavling2.jpeg" class="small-img" width="100%" alt="">
                                          </div>
                                          <div class="small-img-col">
                                             <img src="images/kavling3.jpeg" class="small-img" width="100%" alt="">
                                          </div>
                                          <div class="small-img-col">
                                             <img src="images/kavling4.jpeg" class="small-img" width="100%" alt="">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="content col-md-12 col-lg-6 col-12 order-md-1 order-lg-2">
                                       <h3 class="temper_text card-title teks">Kos Putra Kavling Perum Pamungkas</h3>
                                       <br>
                                       <p class="dololr_text card-text teks">Kost ini berlokasi 1km dari kampus Universitas Islam Indonesia dengan akses jalan raya yang dapat dilalui oleh mobil, dengan lokasi di dalam Perum Pamungkas. Kost ini terdiri dari 1 lantai. Tipe kamar A berada di lantai 1 dengan jendela menghadap ke arah luar, dengan fasilitas lengkap dan jumlah 3 kamar. Silahkan login atau hubungi admin 082136352767</p>
                                       <br><br><br><br><br><br>
                                       <h2 class="harga_text teks">Rp700.000/Bulan</h2>
                                       <br>
                                       <a href="#" type="button" class="btn btn-info tombol">Lihat Detail</a>
                                       <a href="#" type="button" class="btn btn-primary tombol">Menyewa</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="carousel-item">
                              <div class="card text-center">
                                 <div class="row">
                                    <div class="container_main col-md-12 col-lg-6 col-12 order-md-2 order-lg-1">
                                       <img src="images/stan.jpeg" alt="Avatar" class="image img-fluid pb-1">
                                       <div class="small-img-group">
                                          <div class="small-img-col">
                                             <img src="images/stan1.jpeg" class="small-img" width="100%" alt="">
                                          </div>
                                          <div class="small-img-col">
                                             <img src="images/stan2.jpeg" class="small-img" width="100%" alt="">
                                          </div>
                                          <div class="small-img-col">
                                             <img src="images/stan3.jpeg" class="small-img" width="100%" alt="">
                                          </div>
                                          <div class="small-img-col">
                                             <img src="images/stan4.jpeg" class="small-img" width="100%" alt="">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="content col-md-12 col-lg-6 col-12 order-md-1 order-lg-2">
                                       <h3 class="temper_text card-title teks">Kos Putra Stan Maguwoharjo</h3>
                                       <br>
                                       <p class="dololr_text card-text teks">Kost ini berlokasi 100 meter dari jalan raya tajem dengan akses yang dapat dilalui oleh mobil, 5 menit dari Universitas Respati. Kost ini terdiri dari 2 lantai. Dengan fasilitas lengkap, dan total 4 kamar. Silahkan login atau hubungi admin 082136352767</p>
                                       <br><br><br><br><br><br>
                                       <h2 class="harga_text teks">Rp650.000/Bulan</h2>
                                       <br>
                                       <a href="#" type="button" class="btn btn-info tombol">Lihat Detail</a>
                                       <a href="#" type="button" class="btn btn-primary tombol">Menyewa</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="carousel-item">
                              <div class="card text-center">
                                 <div class="row">
                                    <div class="container_main col-md-12 col-lg-6 col-12 order-md-2 order-lg-1">
                                       <img src="images/kotagede.png" alt="Avatar" class="image img-fluid pb-1">
                                       <div class="small-img-group">
                                          <div class="small-img-col">
                                             <img src="images/kotagede1.png" class="small-img" width="100%" alt="">
                                          </div>
                                          <div class="small-img-col">
                                             <img src="images/kotagede2.png" class="small-img" width="100%" alt="">
                                          </div>
                                          <div class="small-img-col">
                                             <img src="images/kotagede3.png" class="small-img" width="100%" alt="">
                                          </div>
                                          <div class="small-img-col">
                                             <img src="images/kotagede4.png" class="small-img" width="100%" alt="">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="content col-md-12 col-lg-6 col-12 order-md-1 order-lg-2">
                                       <h3 class="temper_text card-title teks">Kos Putra Kotagede</h3>
                                       <br>
                                       <p class="dololr_text card-text teks">Kost ini berlokasi 1 kilo meter dari Gembira Loka Zoo dengan akses yang dapat dilalui oleh mobil, dan berada ditengah kota. Kost ini terdiri dari 2 lantai. Dengan fasilitas lengkap, dan total 4 kamar. Silahkan login atau hubungi admin 082136352767</p>
                                       <br><br><br><br><br><br>
                                       <h2 class="harga_text teks">700.000/Bulan</h2>
                                       <br>
                                       <a href="#" type="button" class="btn btn-info tombol">Lihat Detail</a>
                                       <a href="#" type="button" class="btn btn-primary tombol">Menyewa</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="carousel-item">
                              <div class="card text-center">
                                 <div class="row">
                                    <div class="container_main col-md-12 col-lg-6 col-12 order-md-2 order-lg-1">
                                       <img src="images/concat.png" alt="Avatar" class="image img-fluid pb-1">
                                       <div class="small-img-group">
                                          <div class="small-img-col">
                                             <img src="images/concat1.png" class="small-img" width="100%" alt="">
                                          </div>
                                          <div class="small-img-col">
                                             <img src="images/concat2.png" class="small-img" width="100%" alt="">
                                          </div>
                                          <div class="small-img-col">
                                             <img src="images/concat3.png" class="small-img" width="100%" alt="">
                                          </div>
                                          <div class="small-img-col">
                                             <img src="images/concat4.png" class="small-img" width="100%" alt="">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="content col-md-12 col-lg-6 col-12 order-md-1 order-lg-2">
                                       <h3 class="temper_text card-title teks">Kos Putra Condongcatur</h3>
                                       <br>
                                       <p class="dololr_text card-text teks">Kost ini berlokasi 1 kilo meter dari kampus Universitas Yogyakarta dan 2 kilo meter dengan kampus Universitas Gadjah Mada, dengan akses yang dapat dilalui oleh mobil. Kost ini terdiri dari 2 lantai. Dengan fasilitas lengkap, dan total 4 kamar. Silahkan login atau hubungi admin 082136352767</p>
                                       <br><br><br><br><br><br>
                                       <h2 class="harga_text teks">Rp750.000/Bulan</h2>
                                       <br>
                                       <a href="#" type="button" class="btn btn-info tombol">Lihat Detail</a>
                                       <a href="#" type="button" class="btn btn-primary tombol">Menyewa</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="carousel-item">
                              <div class="card text-center">
                                 <div class="row">
                                    <div class="container_main col-md-12 col-lg-6 col-12 order-md-2 order-lg-1">
                                       <img src="images/kusumanegara.png" alt="Avatar" class="image img-fluid pb-1">
                                       <div class="small-img-group">
                                          <div class="small-img-col">
                                             <img src="images/kusumanegara1.png" class="small-img" width="100%" alt="">
                                          </div>
                                          <div class="small-img-col">
                                             <img src="images/kusumanegara2.png" class="small-img" width="100%" alt="">
                                          </div>
                                          <div class="small-img-col">
                                             <img src="images/kusumanegara3.png" class="small-img" width="100%" alt="">
                                          </div>
                                          <div class="small-img-col">
                                             <img src="images/kusumanegara4.png" class="small-img" width="100%" alt="">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="content col-md-12 col-lg-6 col-12 order-md-1 order-lg-2">
                                       <h3 class="temper_text card-title teks">Kos Putra Kusumanegara</h3>
                                       <br>
                                       <p class="dololr_text card-text teks">Kost ini berlokasi di Jl. Kusumanegara, dengan akses yang dapat dilalui oleh mobil. Kost ini terdiri dari 2 lantai. Dengan fasilitas lengkap, dan total 4 kamar. Silahkan login atau hubungi admin 082136352767</p>
                                       <br><br><br><br><br><br>
                                       <h2 class="harga_text teks">Rp750.000/Bulan</h2>
                                       <br>
                                       <a href="#" type="button" class="btn btn-info tombol">Lihat Detail</a>
                                       <a href="#" type="button" class="btn btn-primary tombol">Menyewa</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- Tambahkan carousel-item lainnya sesuai dengan jumlah card yang Anda miliki -->
                        </div>
                        <a class="carousel-control-prev" href="#cardCarousel" role="button" data-slide="prev">
                           <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                           <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#cardCarousel" role="button" data-slide="next">
                           <span class="carousel-control-next-icon" aria-hidden="true"></span>
                           <span class="sr-only">Next</span>
                        </a>
                     </div>
                  </div>
               </div>
            </section>
         </div>
      </div>
   </div>
   <!-- furnitures section end -->
   <!-- about section start -->
   <div class="about_section layout_padding">
      <div class="container">
         <div class="row">
            <div class="col-md-6">
               <h1 class="about_text">Tips Cari kos</h1>
               <ol class="lorem_text">
                  <ul type="squeare">
                     <li>1. <b>Lokasi Strategis:</b> Pilih kos yang terletak secara strategis, dekat dengan fasilitas umum, kampus, atau tempat kerja untuk kenyamanan dan efisiensi perjalanan.</li><br>
                     <li>2. <b>Anggaran Sesuai:</b> Tentukan anggaran bulanan yang sesuai dengan kemampuan finansial Anda. Perhatikan biaya sewa, listrik, air, dan fasilitas lainnya.</li><br>
                     <li>3. <b>Fasilitas yang Dibutuhkan:</b> Pastikan kos menyediakan fasilitas yang Anda butuhkan, seperti kamar mandi dalam, dapur bersama, akses internet, dan keamanan yang memadai.
                     </li><br>
                     <li>4. <b>Cek Kondisi Kos:</b> Periksa kondisi fisik kos, termasuk kebersihan, ventilasi, dan keamanan. Pastikan lingkungan kos mendukung kesejahteraan dan keamanan Anda.</li>
                  </ul>
               </ol>
            </div>

            <div class="col-md-6">
               <div class="image_1"><img src="images/search2d.png"></div>
            </div>
         </div>
      </div>
   </div>
   <!-- about section end -->
   <!-- projects section start -->
   <div class="projects_section layout_padding">
      <div class="container">
         <h1 class="our_text">Fasilitas</h1>
         <p class="ipsum_text">fasilitas lengkap siap pakai sesuai kebutuhan pengguna</p>
         <div id="main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="projects_section2">
                     <div class="container_main2">
                        <div class="row">
                           <div class="col-sm-4">
                              <div class="container_main1">
                                 <img src="images/img-ac.png" alt="Avatar" class="image" style="width:100%">
                                 <h1 class="modern_text">Ruangan Ac</h1>
                                 <div class="middle">
                                    <div class="text">VIEW MORE</div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-sm-4">
                              <div class="container_main1">
                                 <img src="images/img-5.png" alt="Avatar" class="image" style="width:100%">
                                 <h1 class="modern_text">Ruang Tamu punya TV</h1>
                                 <div class="middle">
                                    <div class="text">VIEW MORE</div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-sm-4">
                              <div class="container_main1">
                                 <img src="images/img-6.png" alt="Avatar" class="image" style="width:100%">
                                 <h1 class="modern_text">Rumah Bertingkat</h1>
                                 <div class="middle">
                                    <div class="text">VIEW MORE</div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="projects_section2">
                     <div class="container_main1">
                        <div class="row">
                           <div class="col-sm-4">
                              <div class="container_main1">
                                 <img src="images/img-mandi.png" alt="Avatar" class="image" style="width:100%">
                                 <h1 class="modern_text">Kamar Mandi Shower</h1>
                                 <div class="middle">
                                    <div class="text">VIEW MORE</div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-sm-4">
                              <div class="container_main1">
                                 <img src="images/img-parkir.png" alt="Avatar" class="image" style="width:100%">
                                 <h1 class="modern_text">Tempat Parkir Luas</h1>
                                 <div class="middle">
                                    <div class="text">VIEW MORE</div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-sm-4">
                              <div class="container_main1">
                                 <img src="images/img-belajar.png" alt="Avatar" class="image" style="width:100%">
                                 <h1 class="modern_text">Ruang Belajar</h1>
                                 <div class="middle">
                                    <div class="text">VIEW MORE</div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
                  <i class="fa fa-angle-left"></i>
               </a>
               <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
                  <i class="fa fa-angle-right"></i>
               </a>
            </div>
         </div>
      </div>
      <!-- projects section end -->
      <!-- services section start -->
      <div class="services_section layout_padding">
         <div class="container">
            <h1 class="services_taital">Keunggulan ngeKos di sini</h1>
            <p class="many_taital">Beberapa keuntungan ini yang bisa dirasakan penyewa</p>
            <div class="services_section2 layout_padding">
               <div class="row">
                  <div class="col-lg-3 col-sm-6">
                     <div class="icon_1"><img src="images/icon-1.png"></div>
                     <h2 class="furnitures_text">Kamar mandi & Laundry</h2>
                     <p class="dummy_text">Penyewa kos dapat menggunakan kamar mandi sepuasnya serta dapat order laundry dengan harga khusus</p>
                     <div class="read_bt_main">
                        <div class="read_bt"><a href="#">Read More</a></div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <div class="icon_1"><img src="images/icon-2.png"></div>
                     <h2 class="furnitures_text">WIFI & Listrik </h2>
                     <p class="dummy_text">Setelah membayar kos secara penuh penyewa dapat menikmati listrik dan wifi gratis </p>
                     <div class="read_bt_main">
                        <div class="read_bt"><a href="#">Read More</a></div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <div class="icon_1"><img src="images/icon-3.png"></div>
                     <h2 class="furnitures_text">Lounge & Fotocopy</h2>
                     <p class="dummy_text">Mini lounge sebagai tempat belajar dan fasilitas fotocopy dengan harga khusus</p>
                     <div class="read_bt_main">
                        <div class="read_bt"><a href="#">Read More</a></div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <div class="icon_1"><img src="images/icon-4.png"></div>
                     <h2 class="furnitures_text">Alat dapur & Catering</h2>
                     <p class="dummy_text">Gunakan Peralatan makan dan peralatan memasak secara bebas atau dapat melakukan pesanan catering</p>
                     <div class="read_bt_main">
                        <div class="read_bt"><a href="#">Read More</a></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- services section end -->
      <!-- client section start -->
      <div class="clients_section layout_padding">
         <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
               <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
               </ol>
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <h1 class="client_text">Testimoni Penyewa</h1>
                     <p class="ipsum_text">Respon positif pilihan pelangan yang telah ngekos disini</p>
                     <div class="clients_section2 layout_padding">
                        <div class="client_1">
                           <div class="row">
                              <div class="col-sm-3">
                                 <div class="image_7"><img src="images/img_profile.jpeg"></div>
                                 <div class="quote_icon"><img src="images/quote-icon.png"></div>
                              </div>
                              <div class="col-sm-9">
                                 <h1 class="loksans_text">Dewa Andika</h1>
                                 <p class="dolor_ipsum_text">Pelayanan dari RIKOS ini sangat bagus, dan sangat membantu sekali untuk mencari kos di daerah Jogjakarta</p>
                              </div>
                           </div>
                        </div>
                        <div class="client_2">
                           <div class="row">
                              <div class="col-sm-3">
                                 <div class="image_7"><img src="images/img_profile.jpeg"></div>
                                 <div class="quote_icon"><img src="images/quote-icon.png"></div>
                              </div>
                              <div class="col-sm-9">
                                 <h1 class="loksans_text">Ridwan Seta Bayanaka</h1>
                                 <p class="dolor_ipsum_text">Saya sangat suka tinggal disini, berkat Rikos saya dapat menemukan kamar yang setara dengan bintang 5 ini, terima kasih rikos!</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <h1 class="client_text">TESTIMONI</h1>
                     <p class="ipsum_text">Respon positif pilihan pelangan yang telah ngekos</p>
                     <div class="clients_section2 layout_padding">
                        <div class="client_1">
                           <div class="row">
                              <div class="col-sm-3">
                                 <div class="image_7"><img src="images/img_profile.jpeg"></div>
                                 <div class="quote_icon"><img src="images/quote-icon.png"></div>
                              </div>
                              <div class="col-sm-9">
                                 <h1 class="loksans_text">Devi Nurmayati</h1>
                                 <p class="dolor_ipsum_text">Senang sekali bisa kos disini. Mantap ngak nyesel pelanayan mantap fasilitas lengkap, juaraaa!</p>
                              </div>
                           </div>
                        </div>
                        <div class="client_2">
                           <div class="row">
                              <div class="col-sm-3">
                                 <div class="image_7"><img src="images/img_profile.jpeg"></div>
                                 <div class="quote_icon"><img src="images/quote-icon.png"></div>
                              </div>
                              <div class="col-sm-9">
                                 <h1 class="loksans_text">Wulandari Riska</h1>
                                 <p class="dolor_ipsum_text">Berkat Rikos saya bisa menemukan kos idaman saya terimakasih rikos</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <h1 class="client_text">TESTIMONI</h1>
                     <p class="ipsum_text">Respon positif pilihan pelangan yang telah ngekos</p>
                     <div class="clients_section2 layout_padding">
                        <div class="client_1">
                           <div class="row">
                              <div class="col-sm-3">
                                 <div class="image_7"><img src="images/img_profile.jpeg"></div>
                                 <div class="quote_icon"><img src="images/quote-icon.png"></div>
                              </div>
                              <div class="col-sm-9">
                                 <h1 class="loksans_text">Hesti Wela</h1>
                                 <p class="dolor_ipsum_text">Setelah saya direkomendasikan oleh teman saya. Alhamdulillah saya menemukan kos terjangkau di Jogja lengkap dengan fasilitasnya</p>
                              </div>
                           </div>
                        </div>
                        <div class="client_2">
                           <div class="row">
                              <div class="col-sm-3">
                                 <div class="image_7"><img src="images/img_profile.jpeg"></div>
                                 <div class="quote_icon"><img src="images/quote-icon.png"></div>
                              </div>
                              <div class="col-sm-9">
                                 <h1 class="loksans_text"> Islahatul Aulia</h1>
                                 <p class="dolor_ipsum_text">Kosnya mantap suasana nyaman dan sangat mudah akses dengan fasilitas umum yang lengkap</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <h1 class="client_text">TESTIMONI</h1>
                     <p class="ipsum_text">Respon positif pilihan pelangan yang telah ngekos</p>
                     <div class="clients_section2 layout_padding">
                        <div class="client_1">
                           <div class="row">
                              <div class="col-sm-3">
                                 <div class="image_7"><img src="images/img_profile.jpeg"></div>
                                 <div class="quote_icon"><img src="images/quote-icon.png"></div>
                              </div>
                              <div class="col-sm-9">
                                 <h1 class="loksans_text"> Lia Dwi</h1>
                                 <p class="dolor_ipsum_text">Saya baru pertama kali ngekos dan rasanya ngak nyesel tinggal disini, bapak kos dan ibu kosnya ramah sekali. Terima kasih rikos telah membantu menemukan kos nyaman</p>
                              </div>
                           </div>
                        </div>
                        <div class="client_2">
                           <div class="row">
                              <div class="col-sm-3">
                                 <div class="image_7"><img src="images/img_profile.jpeg"></div>
                                 <div class="quote_icon"><img src="images/quote-icon.png"></div>
                              </div>
                              <div class="col-sm-9">
                                 <h1 class="loksans_text"> Siti Aisyah</h1>
                                 <p class="dolor_ipsum_text">Saya sangat suka kos disini nyaman, fasilitas lengkap dan aksesnya mudah</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- client section end -->
      <!-- contact section start -->
      <div class="contact_section layout_padding">
         <section class="container sproduct my-2 pt-2">
            <div class="row">
               <div class="col-md-6">
                  <h1 class="contact_text">CONTACT US</h1>
                  <div class="social-icons">
                     <div class="social-icon">
                        <span class="fa-stack fa-lg">
                           <i class="fa fa-square fa-stack-2x" style="color: #3b5998;"></i>
                           <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                        </span>
                        <span class="social-name" style="color: aliceblue;">CA_RIKOS</span>
                     </div>
                     <div class="social-icon">
                        <span class="fa-stack fa-lg">
                           <i class="fa fa-square fa-stack-2x" style="color: #c4302b;"></i>
                           <i class="fa fa-youtube fa-stack-1x fa-inverse"></i>
                        </span>
                        <span class="social-name" style="color: aliceblue;">RIKOStube</span>
                     </div>
                     <div class="social-icon">
                        <span class="fa-stack fa-lg">
                           <i class="fa fa-square fa-stack-2x" style="color: #e4405f;"></i>
                           <i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
                        </span>
                        <span class="social-name" style="color: aliceblue;">RIKOS.id</span>
                     </div>
                     <div class="social-icon">
                        <span class="fa-stack fa-lg">
                           <i class="fa fa-square fa-stack-2x" style="color: #00aeff;"></i>
                           <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                        </span>
                        <span class="social-name" style="color: aliceblue;">RIKOS_social</span>
                     </div>
                     <!-- Tambahkan social icons lainnya di sini -->
                  </div>
                  <textarea class="massage-bt" placeholder="Message" rows="5" id="comment" name="Message"></textarea>
                  <div class="send_bt"><a href="Register.php">SEND</a></div>
               </div>
               <div class="col-md-6">
                  <div class="map_main">
                     <div class="map-responsive" style="overflow: hidden; position: relative;">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3960.139299763909!2d110.34520746182504!3d-6.9928696949243605!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sid!4v1700160959255!5m2!1sen!2sid" width="100%" height="500" frameborder="0" style="border: 0;" allowfullscreen=""></iframe>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </div>

      <!-- contact section end -->

      <!-- copyright section start -->

      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">2024 All Rights Reserved. Create by Rikos 2024</a></p>
         </div>
         <!-- copyright section end -->
         <!-- Javascript files-->
         <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
         <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
         <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
         <script src="js/jquery.min.js"></script>
         <script src="js/popper.min.js"></script>
         <script src="js/bootstrap.bundle.min.js"></script>
         <script src="js/jquery-3.0.0.min.js"></script>
         <script src="js/plugin.js"></script>
         <!-- sidebar -->
         <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
         <script src="js/custom.js"></script>
         <!-- javascript -->
         <script src="js/owl.carousel.js"></script>
         <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
</body>

</html>