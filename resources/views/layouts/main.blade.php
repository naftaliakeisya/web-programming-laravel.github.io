<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <title>UKDW App - @yield('title')</title> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    </head>
    <body>
    <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 bg-primary py-4">
                <div class="dropdown float-right">
  <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  <i class="bi bi-person-circle"></i> USERS
  </button>
  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">{{ Auth::user()->name ?? '' }}</a>
    <a class="dropdown-item" href="/user">User Data</a>
    <a class="dropdown-item" href="/logout">Log out</a>
  </div>
</div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2 vh-100">
                <div class="nav flex-column nav-pills mt-4" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link" href="#">Home</a>
                    <a class="nav-link active" href="/mahasiswa">Mahasiswa</a>
                    <a class="nav-link" href="#">Dosen</a>
                    <a class="nav-link" href="#">Matakuliah</a>
                </div>
                </div>
                <div class="col-lg-10 vh-100">
                    <div class="card mt-4">
                        <div class="card-header">
                        <a name="" class="btn btn-success" href="/mahasiswa/form" role="button"><i class="bi bi-plus-square-fill"></i> ADD MAHASISWA </a>
                            <form class="form-inline my-2 my-lg-0 float-right" method="GET" action="/mahasiswa/cari">
                                <input class="form-control mr-sm-2" name="cari" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
                            </form>
                        </div>
                        <div class="card-body">
                            @include('layouts.table')
                            <label>Total: {{$mahasiswa->total()}}, </label>
                            <label>Total per hal: {{$mahasiswa->count()}}, </label>
                            <label>Halaman: {{$mahasiswa->currentPage()}} </label>
                            <span class="float-right">{{ $mahasiswa->links() }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>