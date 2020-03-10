<!DOCTYPE html>
<html>
<head>
	<title>P E L A M A R | Masuk </title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
	<!-- <link rel="stylesheet" type="text/css" href="style2.css"> -->
</head>
<body>
 
	<h1 class="text-left" style="margin-left: 20%"> Selamat datang Kembali  !</h1>
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <img class="img-fluid" src="{{ asset('img/letsgo.png') }}">
      </div>  
      <div class="col-md-4">
        <div class="card" style="margin-top: 20%" >
          <div class="card-body" style="background-color:#f23a2e;; color: #fff;"> 

            <form action="{{ route ('postLogin') }}" method="POST" >
              @csrf
              <div class="form-group"  >
               @include('alert')
              	<h3>MASUK</h3>
                <label for="username">Nama Pengguna :</label>
                <input type="text" name="username" id="username" class="form-control form-control-sm">
              </div>
              <div class="form-group">
                <label for="password">Kata Sandi:</label>
                <input type="password" name="password" id="password" class="form-control form-control-sm">
              </div>

                <div class="checkbox md3">
                <label>
                 belum punya akun ?
                  <a href="{{ route('getLogin')}}">
                    Daftar
                  </a>
                </label>
              </div>
            
          <button type="submit" class="btn btn-block btn-sm btn-secondary">Masuk</button>
            </form>
          </div>
        </div>
      </div>  
    </div>
  </div>
  <footer class="footer mt-auto py-3">
    <div class="container">
      <span class="text-muted">&copy; Dikembangkan Oleh Dito</span>
    </div>
  </footer>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>