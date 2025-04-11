<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            if (Auth::user()->role == 'pasien') {
                toastr()->success('Welcome back,  ' . Auth::user()->nama);
                return redirect()->route('dashboardPasien');
            } elseif (Auth::user()->role == 'dokter') {
                toastr()->success('Welcome back, dr. ' . Auth::user()->nama);
                return redirect()->route('dashboardDokter');
            }
        }

        toastr()->error('Login gagal, silakan coba lagi');
        return redirect()->back()->withInput();
    }

    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'no_hp' => 'required|string|max:15',
            'alamat' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8'
        ]);

        if (User::where('email', $request->email)->exists()) {
            toastr()->error('Email sudah terdaftar');
            return redirect()->back()->withInput();
        }

        User::create([
            'nama' => $request->nama,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => 'pasien',
        ]);
        
        toastr()->success('Pendaftaran berhasil, silakan login');
        return redirect()->route('login');
    }
}