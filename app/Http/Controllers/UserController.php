<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengajuan;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    // public function index()
    // {
    // }
    // public function daftarUser()
    // {
    //     return view('halaman', ['judul' => 'Daftar Mahasiswa']);
    // }

    // public function tabelUser(Request $request)
    // {
    //     return view('halaman', ['judul' => 'Tabel Mahasiswa']);
    // }

    // public function blogUser()
    // {
    //     return view('halaman', ['judul' => 'Blog Mahasiswa']);
    // }

    public function login()
    {
        return view('login');
    }

    public function prosesLogin(Request $request)
    {
        $request->validate([
            'username' => 'required',
        ]);

        $validUsername = ['fajri', 'rahmat', 'said', 'rianinurgani'];
        if (in_array($request->username, $validUsername)) {
            session(['username' => $request->username]);
            return redirect('/home');
        } else {
            return back()->withInput()->with('pesan', 'username tidak valid');
        }
    }

    public function logout()
    {
        session()->forget('username');
        return redirect('login')->with('pesan', 'Logout berhasil');
    }
}
