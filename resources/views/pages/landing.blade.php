<!DOCTYPE html>
<html lang="en">
  <head>
    <title>P E L A M A R </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Roboto+Mono" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('temp/fonts/icomoon/style.css')}}">
    <link rel="stylesheet" href="{{ asset('temp/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('temp/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{ asset('temp/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{ asset('temp/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('temp/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{ asset('temp/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{ asset('temp/fonts/flaticon/font/flaticon.css')}}">
    <link rel="stylesheet" href="{{ asset('temp/css/aos.css')}}">
    <link rel="stylesheet" href="{{ asset('temp/css/style.css')}}">
  </head>
  <body>
  
  <div class="site-wrap">
    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    
    <header class="site-navbar py-3" role="banner">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-11 col-xl-2">
            <h1 class="mb-0"><a href="index.html" class="text-white h2 mb-0">PEL<span class="text-primary"></span>AMAR</a></h1>
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
            <li class="active"><a href="index.html">Home</a></li>
              @guest
            <li><a href="{{ route('getLogin') }}">Masuk</a></li>
            <li><a href="{{ route('getRegister') }}">Daftar</a></li>

              @endguest
              @auth
            <li><a href="#">{{ Auth::user()->username }}</a></li>
              @endauth
              </ul>
            </nav>
          </div>
          <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>
          </div>
        </div>
      </div>
    </header>

    <div class="site-section site-hero">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-10">
            <span class="d-block mb-3 caption" data-aos="fade-up" data-aos-delay="100"></span>
            <h1 class="d-block mb-4" data-aos="fade-up" data-aos-delay="200">Pengaduan Layanan Masyarakat</h1>
            <span class="d-block mb-5 caption" data-aos="fade-up" data-aos-delay="300"></span>
            <a href="{{ route('laporan.index') }}" class="btn-custom" data-aos="fade-up" data-aos-delay="400"><span>Yo Lapor</span></a>
          </div>
        </div>
      </div>
    </div>



    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="site-section-heading">
              <h2>PELAMAR</h2>
            </div>
          </div>
          <div class="col-lg-5 mt-5 pl-lg-5" data-aos="fade-up" data-aos-delay="200">
          </div>
        </div>

        <div class="row align-items-center speaker">
          <div class="col-lg-6 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
            <img src="{{ asset('login/img/pelamar.jpg') }}" alt="Image" class="img-fluid">
          </div>
          <div class="col-lg-6 ml-auto">
            <h2 class="text-white mb-4 name" data-aos="fade-right" data-aos-delay="200">Apa itu PELAMAR ?</h2>
            <div class="bio pl-lg-5">
              <p class="mb-4" data-aos="fade-right" data-aos-delay="400">Pelamar adalah aplikasi berbasis web yang mencoba mewakili suara rakyat untuk meyampaikan kelukan, keresahan, aspirasinya dantindak kriminal yang terjadi di area sekitar . </p>
            </div>
          </div>
        </div><br><br><br>

        <div class="row align-items-center speaker">
          <div class="col-lg-6 mb-5 mb-lg-0 order-lg-2" data-aos="fade" data-aos-delay="100">
            <img src="{{asset('login/img/box.png')}}" alt="Image" class="img-fluid">
          </div>
          <div class="col-lg-6 ml-auto order-lg-1">
            <h2 class="text-white mb-4 name" data-aos="fade-left" data-aos-delay="200">Tujuan Pelamar</h2>
            <div class="bio pr-lg-5">
              <p class="mb-4" data-aos="fade-left" data-aos-delay="400">Aplikasi pelaporan layanan masyarakat ini dibuat untuk memudahkan masyarakat dalam pelaporan segala ketidaknyamanan yang terjadi ditempat</p>
            </div>
          </div>
        </div>

    
    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-4" data-aos="fade-up">
            <div class="site-section-heading">
              <h2>Prosedur</h2>
            </div>
          </div>
          <div class="col-lg-6 mt-5 pl-lg-5" data-aos="fade-up" data-aos-delay="100">
          </div>

        </div>
           <div class="row align-items-stretch program">
            <div class="col-12 border-top border-bottom py-5" data-aos="fade" data-aos-delay="200">
             <div class="row align-items-stretch">
              <div class="col-md-3 text-white mb-3 mb-md-0"><span class="h4"></span> 
                <img src="{{ asset('login/img/user.png') }}" alt="Image" class="img-fluid">
                </div>
                <div class="col-md-9">
                <h2 class="text-white">Daftar/Masuk</h2>
                <span>Daftar terlebih dahulu setelah itu silahkan login dan lapokan apa yang ingin disampaikan </span>
              </div>
            </div>
          </div>

          <div class="col-12 border-bottom py-5" data-aos="fade" data-aos-delay="300">
            <div class="row align-items-stretch">
              <div class="col-md-3 text-white mb-3 mb-md-0"><span class="h4"></span>
                <img src="{{ asset('login/img/creat.png') }}" alt="Image"class="img-fluid">
                </div>
                <div class="col-md-9">
                <h2 class="text-white">Tulis Pengaduan</h2>
                <span>Laporkan keresahan dan aspirasi anda di Pelamar(Pengaduan Layanan Masyarakat) secara substantial</span>
              </div>
            </div>
          </div>

          <div class="col-12 border-bottom py-5" data-aos="fade" data-aos-delay="400">
            <div class="row align-items-stretch">
              <div class="col-md-3 text-white mb-3 mb-md-0"><span class="h4"></span>
                <img src="{{ asset('login/img/paper.png') }}" alt="Image"class="img-fluid">
              </div>
              <div class="col-md-9">
                <h2 class="text-white">Proses Verifikasi</h2>
                <span>Setelah pengaduan, kami akan memverifikasi terkait pengaduan yang terjadi </span>
              </div>
            </div>
          </div>

          <div class="col-12 border-bottom py-5" data-aos="fade" data-aos-delay="600">
            <div class="row align-items-stretch">
              <div class="col-md-3 text-white mb-3 mb-md-0"><span class="h4"></span> 
              <img src="{{ asset('login/img/alert.png')}}" alt="Image"class="img-fluid">
              </div>
              <div class="col-md-9">
                <h2 class="text-white">Proses Tindak Lanjut</h2>
                <span>Kami juga akan memproses terkait hal yang diadukan </span>
              </div>
            </div>
          </div>


          <div class="col-12 border-bottom py-5" data-aos="fade" data-aos-delay="600">
            <div class="row align-items-stretch">
              <div class="col-md-3 text-white mb-3 mb-md-0"><span class="h4"></span> 
              <img src="{{ asset('login/img/chat.png')}}" alt="Image"class="img-fluid" style="height: 90px;" height="45px;">
              </div>
              <div class="col-md-9">
                <h2 class="text-white">Tanggapan</h2>
                <span>Setalah proses tindak lanjut berhasil kami akan memberi tanggapaan mengenai masalah yang terkait </span>
              </div>
            </div>
          </div>

          <div class="col-12 border-bottom py-5" data-aos="fade" data-aos-delay="600">
            <div class="row align-items-stretch">
              <div class="col-md-3 text-white mb-3 mb-md-0"><span class="h4"></span> 
              <img src="{{ asset('login/img/checked.png')}}" alt="Image"class="img-fluid" style="height: 65%" height="35%">
              </div>
              <div class="col-md-9">
                <h2 class="text-white">Selesai</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-4">
            <div class="site-section-heading" data-aos="fade-up">
              <h2>Contoh Kasus Pengaduan</h2>
            </div>
          </div>
          <div class="col-lg-6 mt-5 pl-lg-5" data-aos="fade-up" data-aos-delay="100">
         </div>
        </div>

        <div class="row mb-5">
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-0 blog-entry"  data-aos="fade-up" data-aos-delay="200">
            <a href="#" class="d-block mb-4">
              <img src="{{('temp/images/pembobolan.jpg')}}" alt="Image" class="img-fluid"> 
            </a>
            <h2 class="mb-4"><a href="#">Pembobolan 10 Minimarket di Jatim - Jateng Diringkus</a></h2>
            <div class="mb-4 post-meta d-flex align-items-center">
              <div class="mr-2"><img src="{{asset('temp/images/detik.jpg')}}" alt="Image" class="img-fluid"></div>
              <div><span>By <a href="#">Sugeng Harianto, detiknews</a></span> &mdash; <span>Mar. 09, 2020</span></div> 
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-5 mb-lg-0 blog-entry" data-aos="fade-up" data-aos-delay="400">
            <a href="#" class="d-block mb-4">
              <img src="{{asset('temp/images/ktp.jpg')}}" alt="Image" class="img-fluid"> 
            </a>
            <h2 class="mb-4"><a href="#">Ciri - ciri Penipuan Pakai Swafoto Wajah dan KTP</a></h2>
            <div class="mb-4 post-meta d-flex align-items-center">
              <div class="mr-2"><img src="{{asset('temp/images/download.png')}}" alt="Image" class="img-fluid"></div>
              <div><span>By <a href="#">CNN, Tiwi Putri Bandung</a></span> &mdash; <span>Sep. 08, 2019</span></div> 
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-5 mb-lg-0 blog-entry" data-aos="fade-up" data-aos-delay="400">
            <a href="#" class="d-block mb-4">
              <img src="{{asset('temp/images/banjir.jpg')}}" alt="Image" class="img-fluid"> 
            </a>
            <h2 class="mb-4"><a href="#">Banjir Jakarta</a></h2>
            <div class="mb-4 post-meta d-flex align-items-center">
              <div class="mr-2"><img src="{{asset('temp/images/bbc.png')}}" alt="Image" class="img-fluid"></div>
              <div><span>By <a href="#">CNN, Ananda Amelia Banten</a></span> &mdash; <span>Jan. 05, 2020</span></div> 
            </div>
          </div>

        </div>
        <div class="row" data-aos="fade-up" data-aos-delay="500">
          <div class="col-12 text-center">
<!--             <a href="#" class="btn-custom" data-aos="fade-up" data-aos-delay="400"><span>More Blog Posts</span></a>
 -->          </div>
        </div>
      </div>
    </div>
      
    <footer class="site-footer">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-4">
            <h2 class="footer-heading text-uppercase mb-4">About</h2>
            <p>Untuk saat ini PELAMAR sedang error, terimakasih</p>
          </div>
          <div class="col-md-3 ml-auto">
            <h2 class="footer-heading text-uppercase mb-4">Quick Links</h2>
            <ul class="list-unstyled">
              <li><a href="#">About Us</a></li>
              <li><a href="#">Speakers</a></li>
              <li><a href="#">Gallery</a></li>
              <li><a href="#">Contact Us</a></li>
            </ul>
          </div>
          <div class="col-md-4">
            <h2 class="footer-heading text-uppercase mb-4">Connect with Us</h2>
            <p>
              <a href="#" class="p-2 pl-0"><span class="icon-facebook"></span></a>
              <a href="#" class="p-2"><span class="icon-twitter"></span></a>
              <a href="#" class="p-2"><span class="icon-youtube"></span></a>
              <a href="#" class="p-2"><span class="icon-instagram"></span></a>
            </p>
          </div>
        </div>
        <div class="row">
          
            <div class="col-md-12 text-center">
              <div class="border-top pt-5">
        <!--       <p>
              Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0.
              Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-primary" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
              Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0.
              </p> -->
            </div>
          </div>
        </div>
      </div>
    </footer>
    
  </div>

  <script src="{{ asset('temp/js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{ asset('temp/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{ asset('temp/js/jquery-ui.js')}}"></script>
  <script src="{{ asset('temp/js/popper.min.js')}}"></script>
  <script src="{{ asset('temp/js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('temp/js/owl.carousel.min.js')}}"></script>
  <script src="{{ asset('temp/js/jquery.stellar.min.js')}}"></script>
  <script src="{{ asset('temp/js/jquery.countdown.min.js')}}"></script>
  <script src="{{ asset('temp/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{ asset('temp/js/bootstrap-datepicker.min.js')}}"></script>
  <script src="{{ asset('temp/js/aos.js')}}"></script>

  <script src="{{ asset('temp/js/main.js')}}"></script>
    
  </body>
</html>