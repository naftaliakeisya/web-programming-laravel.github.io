<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        <div class="container-fluid mt-4 rounded">
            <form action="/mahasiswa/simpanmhs" method="POST" class="pt-2 pb-2">
                @csrf 
                <div class="form-group w-25">
                    <label>NIM</label>
                    <input type="number" name="nim" class="form-control" placeholder="Masukkan NIM" required>
                </div>
                <div class="form-group w-25">
                    <label>Nama Mahasiswa</label>
                    <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama" required>
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
                        <option value="Sistem Informasi"> Sistem Informasi </option>
                        <option value="Informatika"> Informatika </option>
                        <option value="Ekonomi"> Ekonomi </option>
                        <option value="Manajemen"> Manajemen </option>
                        <option value="Akuntansi"> Akuntansi </option>
                        <option value="Manajemen"> Manajemen </option>
                        <option value="Kedokteran"> Kedokteran </option>
                        <option value="Sastra Indonesia"> Sastra Indonesia </option>
                    </select>
                </div>
                <label>Minat</label>
                <div class="form-group w-25=">
                    <input type="checkbox" name="minat[]" value="Membaca" class="form-check-input">
                    <label>Membaca</label>
                </div>
                <div class="form-group w-25">
                    <input type="checkbox" name="minat[]" value="Memasak" class="form-check-input">
                    <label>Memasak</label>
                </div>
                <div class="form-group w-25=">
                    <input type="checkbox" name="minat[]" value="Menyanyi" class="form-check-input">
                    <label>Menyanyi</label>
                </div>
                <div class="form-group w-25=">
                    <input type="checkbox" name="minat[]" value="Memancing" class="form-check-input">
                    <label>Memancing</label>
                </div>
                <div class="form-group w-25=">
                    <input type="checkbox" name="minat[]" value="Makan" class="form-check-input">
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