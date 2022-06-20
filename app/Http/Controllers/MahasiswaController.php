<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mahasiswa;

class MahasiswaController extends Controller
{
    public function mahasiswa()
    {
        $mahasiswa = Mahasiswa::orderBy('id','DESC')->paginate(10);
        return view('mahasiswa', ['mahasiswa' => $mahasiswa]);
    }
    public function pencarian(Request $request)
    {
        $cari = $request->cari;
        $mahasiswa = Mahasiswa::where('nim', 'like', '%'.$cari.'%')->orWhere('nama', 'like', '%'.$cari.'%')->paginate();
        return view('mahasiswa', ['mahasiswa'=>$mahasiswa], ['cek'=>'mahasiswa']);
    }
    public function formmhs()
    {
        return view('form');
    }
    public function simpanmhs(Request $request){
        $minat = implode(',', $request->get('minat'));
        Mahasiswa::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'gender' => $request->gender,
            'jurusan'=> $request->jurusan,
            'minat'=> $minat
        ]);
        return redirect("/mahasiswa")->with('alertcreate', 'Berhasil disimpan');
    }
    public function edit($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        return view('edit', ['mahasiswa' => $mahasiswa]);
    }
    public function updatemahasiswa($id, Request $request)
    {
        $minat = implode(',',$request->minat);
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->nim = $request->nim;
        $mahasiswa->nama = $request->nama;
        $mahasiswa->gender = $request->gender;
        $mahasiswa->jurusan = $request->jurusan;
        $mahasiswa->minat = $minat;
        $mahasiswa->save();
        return redirect('/mahasiswa')->with('alertupdate', 'Berhasil diubah');
    }
    public function hapus($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();
        return redirect('/mahasiswa')->with('alertdelete', 'Berhasil dihapus');
    }
}
