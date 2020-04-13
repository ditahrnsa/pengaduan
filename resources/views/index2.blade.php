<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PELAMAR | DAFTAR</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" type="text/css" href="{{ asset('login/css/animations.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('login/css/styles.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('login/css/login.css') }}">

  <script type="text/javascript" src="{{ asset('login/js/jquery.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('login/js/jquery.parallax.js') }}"></script>
  <script type="text/javascript" src="{{ asset('login/js/jquery.smooth-scroll.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('login/js/custom.js') }}"></script>
</head>

<body>
  <div class="container">
    <div class="left">
      <div class="caption">
        <a href="{{ route('landing') }}">
          <img src="{{ asset('login/img/oke.ico') }}">
          <h1>PELAMAR</h1>
        </a>
        <p>
          Pengaduan Layanana Masyarakat
        </p>
      </div>
    </div>
    <div class="right">
      <div class="content">
        <h1><span>DAF</span>TAR</h1>
        <form action="{{ route ('postRegister') }}" method="POST">
          @csrf
          <input type="text" placeholder="Nama Lengkap" id="nik" name="nik">
          <input type="text" placeholder="Nama Lengkap" id="nama" name="nama">
          <input type="text" placeholder="No. Telp" id="tlp" name="tlp">
          <input type="text" placeholder="Username" id="username" name="username">
          <input type="password" placeholder="Password" id="password" name="password">
          <input type="password" placeholder="Konfirmasi password" id="password" name="password_confirmation">
          <button type="submit">
            Daftar
          </button>
        </form>
        <p>Sudah punya akun ? <a href="{{ route('getLogin') }}" class="link">Masuk</a></p>
        <div class="bottom-right">
        </div>
      </div>
    </div>
  </div>
</body>

</html>