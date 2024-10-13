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
    public function store(Request $request) {
        \Log::info('Request reached store method', $request->all());

        // Validate the request
        $validated = $request->validate([
            'id_akun' => 'required|integer|unique:kuis,id_akun',
            'q1' => 'required|string',
            'soal2_wiraswasta' => 'required_if:q1,wiraswasta|nullable|string',
            'soal3_wiraswasta' => 'required_if:q1,wiraswasta|nullable|string',
            'soalpendidikan_sumberbiaya' => 'required_if:q1,melanjutkan pendidikan|nullable|string',
            'soal2_perguruan_tinggi' => 'required_if:q1,melanjutkan pendidikan|nullable|string',
            'soal2_program_studi' => 'required_if:q1,melanjutkan pendidikan|nullable|string',
            'soal2_tanggal_masuk' => 'required_if:q1,melanjutkan pendidikan|nullable|date',
            '1a' => 'required_if:q1,bekerja|nullable|string',
            'thp1' => 'required_if:q1,bekerja|nullable|string',
            'provinsi' => 'required_if:q1,bekerja|nullable|string',
            'kabupaten' => 'required_if:q1,bekerja|nullable|string',
            '1d' => 'required_if:q1,bekerja|nullable|string',
            'custom_1d' => 'nullable|string',
            '1e' => 'required_if:q1,bekerja|nullable|string',
            '1f' => 'required_if:q1,bekerja|required_if:q1,wiraswasta|nullable|string',
            '1g' => 'required_if:q1,bekerja|nullable|string',
            '1h' => 'required_if:q1,bekerja|nullable|string',
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
            'search_method' => 'required|array',
            'search_method.*' => 'string',
            'other_search_method' => 'nullable|string',
            'q7' => 'required|string',
            'q8' => 'required|string',
            'q9' => 'required|string',
            'q10' => 'required|string',
            'lainnya_q10' => 'nullable|string',
            'q11' => 'required|array',
            'q11.*' => 'string',
            'other_q11' => 'nullable|string',
        ],[
            'soal2_wiraswasta.required_if' => 'Field ini wajib diisi jika Anda memilih "Wiraswasta".',
            'soal3_wiraswasta.required_if' => 'Field ini wajib diisi jika Anda memilih "Wiraswasta".',
            'soalpendidikan_sumberbiaya.required_if' => 'Field ini wajib diisi jika Anda memilih "Melanjutkan Pendidikan".',
            'soal2_perguruan_tinggi.required_if' => 'Field ini wajib diisi jika Anda memilih "Melanjutkan Pendidikan".',
            'soal2_program_studi.required_if' => 'Field ini wajib diisi jika Anda memilih "Melanjutkan Pendidikan".',
            'soal2_tanggal_masuk.required_if' => 'Field ini wajib diisi jika Anda memilih "Melanjutkan Pendidikan".',
            '1a.required_if' => 'Field ini wajib diisi jika Anda memilih "Bekerja".',
            'thp1.required_if' => 'Field ini wajib diisi jika Anda memilih "Bekerja".',
            'provinsi.required_if' => 'Field ini wajib diisi jika Anda memilih "Bekerja".',
            'kabupaten.required_if' => 'Field ini wajib diisi jika Anda memilih "Bekerja".',
            '1d.required_if' => 'Field ini wajib diisi jika Anda memilih "Bekerja".',
            '1e.required_if' => 'Field ini wajib diisi jika Anda memilih "Bekerja".',
            '1f.required_if' => 'Field ini wajib diisi jika Anda memilih "Bekerja atau Wiraswasta".',
            '1g.required_if' => 'Field ini wajib diisi jika Anda memilih "Bekerja".',
            '1h.required_if' => 'Field ini wajib diisi jika Anda memilih "Bekerja".'
        ]);


        // Save the validated data to the database
        $kuis = Kuis::create($validated);

        return redirect()->route('kuis')->with('success', 'Data berhasil disimpan! Terima Kasih Atas Partisipasi Anda, Semoga Amal Baik dibalas Tuhan Yang Maha Esa');
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
