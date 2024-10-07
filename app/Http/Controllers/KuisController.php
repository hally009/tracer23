<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use App\Models\User; // Pastikan model User di-import
use App\Models\Kuis; // Pastikan model Kuis di-import
use App\Exports\KuisExport;
use Maatwebsite\Excel\Facades\Excel;

use Illuminate\Http\Request;

class KuisController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if (auth()->check()) {
            return view('kuis.kuis');
        } else {
            return redirect('/'); // Atau halaman lain jika tidak terautentikasi
        }

    }

    public function blanko()
    {
        if (auth()->check()) {
            return view('kuis.blanko_kuis');
        } else {
            return redirect('/'); // Atau halaman lain jika tidak terautentikasi
        }

    }

    public function showForm()
    {
    // Get the currently authenticated user ID
        $userId = auth()->id();

    // Fetching user data from the users table
        $user = User::find($userId);

    // Fetching alumni data from the alumnis table based on the user's ID
        $alumni = Alumni::where('id_akun', $userId)->first(); // Adjust the query based on your relationship

        return view('kuis.kuis', compact('user', 'alumni'));
    }

    public function create()
    {
        return view('kuis.kuis');
    }

    // Store a newly created quiz in the database
    public function store(Request $request)
    {
        \Log::info('Request reached store method', $request->all());
        //dd($request->all());
        // Validate the request
        $validated = $request->validate([
            'id_akun' => 'required|string|unique:kuis',
            'q1' => 'required|string',
            '1a' => 'required|string',  // 2. Dalam berapa bulan Anda mendapatkan pekerjaan pertama ?
            'thp1' => 'required|string',  // 3. Berapa rata-rata pendapatan Anda per bulan? (take home pay)
            'provinsi' => 'required|string',  // 4. Dimana lokasi tempat Anda bekerja?
            'kabupaten' => 'required|string',  // 4. Dimana lokasi tempat Anda bekerja?
            '1d' => 'required|string',  // 5. Apa jenis perusahaan/intansi/institusi tempat anda bekerja sekarang?
            'custom_1d' => 'nullable|string',
            '1e' => 'required|string',  // 6. Apa nama perusahaan/kantor tempat Anda bekerja?
            '1f' => 'required|string',  // 7. Apa tingkat tempat kerja Anda?
            '1g' => 'required|string', // 8. Seberapa erat hubungan bidang studi dengan pekerjaan Anda?
            '1h' => 'required|string',  // 9. Tingkat pendidikan apa yang paling tepat/sesuai untuk pekerjaan anda saat ini?
            'q2' => 'required|string',
            'custom2' => 'nullable|string',
            'etika_a' => 'required|string',
            'etika_b' => 'required|string',
            'ilmu_a' => 'required|string',
            'ilmu_b' => 'required|string',
            'bing_a' => 'required|string',
            'bing_b' => 'required|string',
            'ti_a' => 'required|string',
            'ti_b' => 'required|string',
            'kom_a' => 'required|string',
            'kom_b' => 'required|string',
            'tim_a' => 'required|string',
            'tim_b' => 'required|string',
            'dev_a' => 'required|string',
            'dev_b' => 'required|string',
            'perkuliahan' => 'required|string',
            'demonstrasi' => 'required|string',
            'riset' => 'required|string',
            'magang' => 'required|string',
            'praktikum' => 'required|string',
            'kerja_lapangan' => 'required|string',
            'diskusi' => 'required|string',
            'q5' => 'required|string',
            'search_method' => 'required|array', // Memastikan q11 adalah array
            'search_method.*' => 'string', // Memastikan setiap elemen dalam q11 adalah string
            'other_search_method' => 'nullable|string',
            'q7' => 'required|string',
            'q8' => 'required|string',
            'q9' => 'required|string',
            'q10' => 'required|string',
            'lainnya_q10' => 'nullable|string',
            'q11' => 'required|array', // Memastikan q11 adalah array
            'q11.*' => 'string', // Memastikan setiap elemen dalam q11 adalah string
            'other_q11' => 'nullable|string', // Pastikan this is just a string
        ]);


        // Save the data to the database
        Kuis::create($validated);

        return redirect()->route('kuis')->with('success', 'Kuis Berhasil Terkirim ! Terima Kasih Atas Partisipasi Anda, Semoga Amal Baik Menjadi Bekal Di Akhirat');


    }

    // Show a specific quiz
    public function show($id)
    {
        $kuis = Kuis::findOrFail($id);
        return view('kuis.show', compact('kuis'));
    }

    public function export()
    {
        return Excel::download(new KuisExport, 'daftar_responden.xlsx');
    }

}
