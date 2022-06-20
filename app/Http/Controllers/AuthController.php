<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\User;

class AuthController extends Controller
{
    public function user()
    {
        $user = User::paginate(5);
        return view('user', ['user' => $user]);
    }
    public function formuser()
    {
        return view('formuser');
    }
    public function simpanuser(Request $request)
    {
        $user = User::create([
            'name' => $request -> name,
            'email' => $request -> email,
            'password' => bcrypt ($request -> password)
        ]);
        return redirect('/user')->with('alertcreate', 'Berhasil disimpan');
    }
    public function edituser($id)
    {
        $user = User::find($id);
        return view('editUser', ['user' => $user]);
    }
    public function updateuser($id, Request $request)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt ($request -> password);
        $user->save();
        return redirect('/user')->with('alertupdate', 'Berhasil diubah');
    }
    public function hapususer($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/user')->with('alertdelete', 'Berhasil dihapus');
    }
    public function login()
    {
        return view('login');
    }
    public function ceklogin(Request $request)
    {
        if(!Auth::attempt(['email' => $request->email, 'password' => $request->password]))
        {
            return redirect('/login');
        }
        else
        {
            return redirect('/mahasiswa');
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
