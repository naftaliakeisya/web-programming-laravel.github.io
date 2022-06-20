@if (session('alertcreate'))

    <div class="alert alert-success alert-dismissable fade show" role="alert">
        <strong>{{ session('alertcreate') }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
@if (session('alertupdate'))
<div class="alert alert-warning alert-dismissable fade show" role="alert">
        <strong>{{ session('alertupdate') }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
@if (session('alertdelete'))
<div class="alert alert-danger alert-dismissable fade show" role="alert">
        <strong>{{ session('alertdelete') }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
<table class="table table-hover">
                                <thead>
                                    <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">NIM</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Gender</th>
                                    <th scope="col">Jurusan</th>
                                    <th scope="col">Minat</th>
                                    <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($mahasiswa as $no => $mhs)
                                    <tr>
                                        <th scope="row">{{ $mahasiswa->firstItem() + $no}}</th>
                                        <td>{{$mhs -> nim}}</td>
                                        <td>{{$mhs -> nama}}</td>
                                        <td>{{$mhs -> gender}}</td>
                                        <td>{{$mhs -> jurusan}}</td>
                                        <td>{{$mhs -> minat}}</td>
                                        <td>
                                            <a href="/mahasiswa/edit/{{ $mhs->id }}" class="btn btn-outline-warning"><i class="bi bi-pencil-square"></i></a>
                                            <a href="/mahasiswa/hapus/{{ $mhs->id }}" class="btn btn-outline-danger" onclick="return confirm('Anda yakin untuk menghapusnya?')"><i class="bi bi-x-square"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>