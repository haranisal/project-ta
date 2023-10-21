<?php

namespace App\Http\Controllers;


use Illuminate\Suppport\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Admin;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return redirect('/login');
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $credentials = $request->only('username', 'password');

        // Proses login 
        if (Auth::guard('Admin')->attempt($credentials)) {
            // Login berhasil,ambil data admin yang sedang login
            $admin = Auth::guard('Admin')->user();

            //menyesuaikan akses
            if ($admin->status === 'Admin') {
                // Simpan data ke dalam session
                $request->session()->put('username', $admin->username);
                $request->session()->put('status', $admin->status);
                return redirect()->route('home.admindas');
            } elseif ($admin->status === 'Guru') {
                // Simpan data ke dalam session
                $request->session()->put('username', $admin->username);
                $request->session()->put('status', $admin->status);
                return redirect()->route('home.gurudas');
            } elseif ($admin->akses === 'Siswa') {
                // Simpan data ke dalam session
                $request->session()->put('username', $admin->username);
                $request->session()->put('status', $admin->status);
                //dd ("test");
                return redirect()->route('home.siswadas');
            } else {
                // Login gagal
                return redirect()->back()->withErrors(['username' => 'Username atau password salah']);
            }
        }
        return back()->with('error', 'Gagal Login');
    }

    public function logout()
    {
        return redirect('/login');
    }
}
