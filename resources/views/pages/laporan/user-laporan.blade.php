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
            <h1 class="mb-0"><a href="index.html" class="text-white h2 mb-0">PEL<span class="text-primary">AMAR</span> </a></h1>
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
                <li><a href="{{route('logout')}}">logout</a></li>
                @endauth
              </ul>
            </nav>
          </div>
          <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>
          </div>
        </div>
      </div>
    </header>
      <br><br><br>
      <body id="page-center" bgcolor="#FFFFFF">
        <section class="container">
        <div class="container-fluid">
          <div class="card-body">
            <div class="card-header" >
              <h1 style="text-align: center;">LAPOR</h1>
            <form action="simpan_pengaduan.php" method="post" class="form-horizontal" enctype="multipart/form-data">
              <div class="form group cols md-4 ">
                <label>Tanggal Pengaduan :</label>
                <input type="text" name="tgl_pengaduan" value="<?php echo date ('d/m/y');?>" class="form-control"><br>
              </div>
              <div class="form-group cols-sm-6">
                <textarea class="form-control" rows="7" placeholder="Ketik Laporan Anda..... " name="isi_laporan "></textarea>
              </div>
              <div class="form-group cols-sm-6">
                <label>Unggah Foto</label>
                <input type="file" name="foto" class="form-control" accept=".jpg, .jpeg, .png" >
              </div>

            <div class="form-group cols-sm-6">
                <select name="select" class="form-control select2" style="background-color: black;">
                    <option value ="1"> Covid-19</option>
                    <option value ="2"> Corona - Bekerja dirumah</option>
                    <option value ="3"> Corona - Dampak Ekonomi</option>
                    <option value ="4"> Corona - Social Distancing</option>
                    <option value ="5"> Corona - Karantina wilayah</option>
                    <option value ="6"> Corona - Kekurangan Kebutuhan Logistik dan ADP</option>
                    <option value ="7"> Corona - Rapid Test</option>
                    <option value ="8"> Administrasi</option>
                    <option value ="9"> BPJS ketenangakerjaan</option>
                    <option value ="10"> Bidang Politik, Hukum, Keamanan</option>
                    <option value ="11"> Damoak Lingkungan</option>
                    <option value ="12"> Data dan Informasi Umum</option>
                    <option value ="13"> Kejahan Kriminal</option>
                </select>
            </div>
              <form>
              <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </form>
          </div>
        </div>
        </div>
      </section>
      </body>  
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
    </div>
  </body>
</html> 