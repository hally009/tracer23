<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use App\Models\User; // Pastikan model User di-import
use Illuminate\Http\Request;

class AlumniController extends Controller
{
    // Menampilkan daftar alumni
    public function index()
    {
        $alumni = Alumni::all(); // Mengambil semua data alumni
        $users = User::where('status', 'Responden')->get(); // Mengambil pengguna dengan status 'Responden'
        return view('admin.alumni', compact('alumni', 'users')); // Mengirim data alumni dan pengguna ke view
    }

    // Menampilkan form untuk menambahkan alumni baru
    public function create()
    {
        $users = User::where('status', 'Responden')->get(); // Ambil pengguna dengan status 'Responden'
        return view('alumni.create', compact('users')); // Kirim data pengguna ke view modal
    }

    // Menyimpan data alumni baru
    public function store(Request $request)
    {
        // Validasi data
        $request->validate([
            'id_akun' => 'required|unique:alumnis|max:20',
            'nim' => 'required|unique:alumnis|max:20',
            'nama' => 'required|max:100',
            'prodi' => 'required|max:50',
            'nik' => 'required|unique:alumnis|max:16',
            'npwp' => 'nullable|max:16',
            'no_ijazah' => 'required|unique:alumnis|max:30',
            'no_hp' => 'nullable|unique:alumnis|max:15',
            'email' => 'required|email|unique:alumnis|max:100',
        ]);

        // Menyimpan data alumni
        Alumni::create($request->all());

        return redirect()->route('alumni')->with('success', 'Alumni berhasil ditambahkan');
    }

    // Menampilkan data alumni berdasarkan ID
    public function show($id)
    {
        $alumni = Alumni::findOrFail($id);
        return view('admin.alumni', compact('alumnis'));
    }

    // Menampilkan form untuk mengedit data alumni
    public function edit($id)
    {
        //$alumni = Alumni::findOrFail($id);
        //return view('alumni.edit', compact('alumni'));
    }

    // Memperbarui data alumni
    public function update(Request $request, $id)
    {
        // Validasi data
        //$request->validate([
        //    'id_akun' => 'required|max:20|unique:alumni,id_akun,' . $id,
        //    'nim' => 'required|max:20|unique:alumni,nim,' . $id,
        //    'nama' => 'required|max:100',
        //    'prodi' => 'required|max:50',
        //    'nik' => 'required|max:16|unique:alumni,nik,' . $id,
        //    'npwp' => 'nullable|max:15',
        //    'no_ijazah' => 'required|max:30|unique:alumni,no_ijazah,' . $id,
        //    'no_hp' => 'nullable|max:15',
        //    'email' => 'required|email|max:100|unique:alumni,email,' . $id,
        //]);

        // Memperbarui data alumni
        //$alumni = Alumni::findOrFail($id);
        //$alumni->update($request->all());

        //return redirect()->route('alumni.index')->with('success', 'Data alumni berhasil diperbarui');
    }

    // Menghapus data alumni
    public function destroy($id)
    {
        //$alumni = Alumni::findOrFail($id);
        //$alumni->delete();

        //return redirect()->route('alumni.index')->with('success', 'Alumni berhasil dihapus');
    }
}
