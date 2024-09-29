<?php

namespace App\Http\Controllers;

use App\Models\Kuis;
use App\Models\Alumni;
use Illuminate\Http\Request;

class RespondenController extends Controller
{
    public function index()
    {
        // Mengambil semua data kuis beserta relasinya dengan tabel alumnis
        $kuis = Kuis::with('alumnus')->get();

        // Mengirim data ke view responden
        return view('admin.responden', compact('kuis'));
    }
}
