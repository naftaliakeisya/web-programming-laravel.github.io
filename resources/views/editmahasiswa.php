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
                <div class="col-lg-12 bg-primary py-4"></div>
            </div>
            <div class="row">
                <div class="col-lg-2 vh-100">
                <div class="nav flex-column nav-pills mt-4" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link" href="#">Home</a>
                    <a class="nav-link active" href="/mhs">Mahasiswa</a>
                    <a class="nav-link" href="#">Dosen</a>
                    <a class="nav-link" href="#">Mataluliah</a>
                </div>
                </div>
                <div class="col-lg-10 vh-100">
                    <div class="card mt-4">
                        <div class="card-header">
                        </div>
    <div class="card-body">
    <!--<div class="container-fluid mt-4 rounded">-->
        @php
            $minat= explode(',',$mahasiswa->minat);
        @endphp
        <form action="/mahasiswa/updatemahasiswa/{{ $mahasiswa->id }}" method="POST" class="pt-2 pb-2">
            @csrf
            @method('PUT')
            <div class="form-group w-25">
                <label>NIM</label>
                <input type="number" name="nim" class="form-control" value="{{ $mahasiswa->nim}}" required>
            </div>
            <div class="form-group w-25">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" value="{{ $mahasiswa->nama}}">
            </div>
            <label>Gender</label>
                <div class="form-check w-25=">
                    <input type="radio" name="gender" value="Perempuan" class="form-check-input">
                    <label>Perempuan</label>
                </div>
                <div class="form-check w-25">
                    <input type="radio" name="gender" value="Laki-laki" class="form-check-input">
                    <label>Laki-laki</label>
                </div>
                <div clas="form-group w-25">
                    <label>Jurusan</label>
                    <select name="jurusan" class="form-control">
                        <option value="0"> ---Pilih Jurusan--- </option>
                        <option value="Sistem Informasi" {{ $mahasiswa->jurusan == 'Sistem Informasi' ? 'selected':'' }}> Sistem Informasi </option>
                        <option value="Informatika" {{ $mahasiswa -> jurusan == 'Informatika' ? 'selected':'' }}> Informatika </option>
                        <option value="Ekonomi" {{ $mahasiswa -> jurusan == 'Ekonomi' ? 'selected':'' }}> Ekonomi </option>
                        <option value="Manajemen" {{ $mahasiswa -> jurusan == 'Manajemen' ? 'selected':'' }}> Manajemen </option>
                        <option value="Akuntansi" {{ $mahasiswa -> jurusan == 'Akuntansi' ? 'selected':'' }}> Akuntansi </option>
                        <option value="Kedokteran" {{ $mahasiswa -> jurusan == 'Kedokteran' ? 'selected':'' }}> Kedokteran </option>
                        <option value="Sastra Indonesia" {{ $mahasiswa -> jurusan == 'Sastra Indonesia' ? 'selected':'' }}> Sastra Indonesia </option>
                    </select>
                </div>
                <label>Minat</label>
                <div class="form-check w-25=">
                    <input type="checkbox" name="minat[]" value="Membaca" {{ in_array('Membaca', $minat) ? 'checked':''}} class="form-check-input">
                    <label>Membaca</label>
                </div>
                <div class="form-group w-25">
                    <input type="checkbox" name="minat[]" value="Memasak" {{ in_array('Memasak', $minat) ? 'checked':''}} class="form-check-input">
                    <label>Memasak</label>
                </div>
                <div class="form-group w-25=">
                    <input type="checkbox" name="minat[]" value="Menyanyi" {{ in_array('Menyanyi', $minat) ? 'checked':''}} class="form-check-input">
                    <label>Menyanyi</label>
                </div>
                <div class="form-group w-25=">
                    <input type="checkbox" name="minat[]" value="Memancing" {{ in_array('Memancing', $minat) ? 'checked':''}} class="form-check-input">
                    <label>Memancing</label>
                </div>
                <div class="form-group w-25=">
                    <input type="checkbox" name="minat[]" value="Makan" {{ in_array('Makan', $minat) ? 'checked':''}} class="form-check-input">
                    <label>Makan</label>
                </div>
                <div class=form-group pt-4>
                    <input type="submit" value="SIMPAN" class="btn btn-outline-primary">
                </div>
            </form>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>