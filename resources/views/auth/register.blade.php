<!DOCTYPE html>
<html>
<head>
	<title> P E L A M A R | Daftar</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
	<!-- <link rel="stylesheet" type="text/css" href="style2.css"> -->
</head>
<body>
	<h1 class="text-left" style="margin-left: 20%">Buat Akun !</h1>
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <img class="img-fluid" src="{{ asset('img/letsgo.png') }}">
      </div>  
      <div class="col-md-4">
        <div class="card" style="margin-top: 20%">
          <div class="card-body" style="background-color: #ffa500; color: #fff;"> 

            <form action="{{ route ('postRegister') }}" method="POST" >
              @include('alert')
              @csrf
              <div class="form-group" >
              	<h3>Daftar</h3>
                <label for="username">Nama Pengguna:</label>
                <input type="text" name="username" value="{{old('username')}}" id="username" class="form-control form-control-sm">
              </div>
              <div class="form-group">
                <label for="tlp">No Telp :</label>
                <input type="text" name="tlp" value="{{old ('tlp')}}" id="tlp" class="form-control form-control-sm">
              </div>
              <div class="form-group">
                <label for="name">Nama :</label>
                <input type="text" name="name" value="{{old('nama')}}" id="name" class="form-control form-control-sm">
              </div>
              <div class="form-group">
                <label for="nik">NIk:</label>
                <input type="text" name="nik" value="{{old('nik')}}" id="nik" class="form-control form-control-sm">
              </div>

               <div class="form-group">
                <label for="password">Kata Sandi :</label>
                <input type="password" name="password" id="password" class="form-control form-control-sm">
              </div>

               <div class="form-group">
                <label for="password">konfirmasi Kata Sandi :</label>
                <input type="password" name="password_confirmation" id="password" class="form-control form-control-sm">
              </div>

          <button type="submit" class="btn btn-block btn-sm btn-secondary">Daftar</button>
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