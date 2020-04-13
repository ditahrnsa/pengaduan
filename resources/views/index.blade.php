<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PELAMAR | MASUK</title>
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
        <h1><span>MA</span>SUK</h1>
        <form action="{{ route ('postLogin') }}" method="POST">
          @csrf
          <input type="text" placeholder="Username" id="username" name="username">
          <input type="password" placeholder="Password" id="password" name="password">
          <button type="submit">
            Masuk
          </button>
        </form>
        <p>Belum Punya Akun ? <a href="{{ route('getRegister') }}" class="link">Daftar</a></p>
        <div class="bottom-right">
          {{-- <img src="{{ asset('login/img/pattern_kepalasisingaan/sudut-pattern.svg') }}" alt=""> --}}
        </div>
      </div>
    </div>
  </div>
</body>

</html>