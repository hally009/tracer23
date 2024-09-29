<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Pastikan Anda mengimpor model User
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Gate;

class AktorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); // Middleware untuk memastikan pengguna sudah terautentikasi
    }

    public function index()
    {
        $users = User::all(); // Ambil semua data pengguna
        return view('admin.aktor', compact('users')); // Kirim data pengguna ke view
    }

    protected function validator(array $dataAktor)
    {
        return Validator::make($dataAktor, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'status' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    protected function daftar(Request $request)
    {
        $this->validator($request->all())->validate(); // Validasi data

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'status' => $request->status,
            'password' => Hash::make($request->password),
        ]);

        return redirect('/aktor')->with('success', 'Pengguna berhasil ditambahkan.'); // Redirect ke halaman /aktor
    }

    public function navigate()
    {
        if (Gate::allows('accessAreas')) {
            // User is Responden, allow access to Kuisioner
            return redirect()->route('kuisioner'); // Replace with your kuisioner route
        }

        // Redirect other users or handle access to other areas
        return redirect()->route('home'); // Replace with your default route
    }

}
