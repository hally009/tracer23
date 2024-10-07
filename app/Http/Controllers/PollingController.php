<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kuis;
use App\Models\Alumni;

class PollingController extends Controller
{
    // Controller (PollingController.php)

public function showPollResults(Request $request)
{
    // Ambil semua prodi dari tabel alumnis
    $prodiOptions = Alumni::distinct()->pluck('prodi');

    // Ambil prodi yang dipilih dari request
    $selectedProdi = $request->input('prodi');

    // Ambil hasil polling untuk prodi yang dipilih
    $pollResultsQ1 = Kuis::when($selectedProdi, function ($query, $prodi) {
        return $query->whereHas('alumnus', function ($q) use ($prodi) {
            $q->where('prodi', $prodi);
        });
    })->pluck('q1');

    $pollResultsQ2 = Kuis::when($selectedProdi, function ($query, $prodi) {
        return $query->whereHas('alumnus', function ($q) use ($prodi) {
            $q->where('prodi', $prodi);
        });
    })->pluck('thp1');

    $pollResultsQ3 = Kuis::when($selectedProdi, function ($query, $prodi) {
        return $query->whereHas('alumnus', function ($q) use ($prodi) {
            $q->where('prodi', $prodi);
        });
    })->pluck('1d');

    $pollResultsQ4 = Kuis::when($selectedProdi, function ($query, $prodi) {
        return $query->whereHas('alumnus', function ($q) use ($prodi) {
            $q->where('prodi', $prodi);
        });
    })->pluck('1f');

    $pollResultsQ5 = Kuis::when($selectedProdi, function ($query, $prodi) {
        return $query->whereHas('alumnus', function ($q) use ($prodi) {
            $q->where('prodi', $prodi);
        });
    })->pluck('1g');

    $pollResultsQ6 = Kuis::when($selectedProdi, function ($query, $prodi) {
        return $query->whereHas('alumnus', function ($q) use ($prodi) {
            $q->where('prodi', $prodi);
        });
    })->pluck('1h');

    $pollResultsQ7 = Kuis::when($selectedProdi, function ($query, $prodi) {
        return $query->whereHas('alumnus', function ($q) use ($prodi) {
            $q->where('prodi', $prodi);
        });
    })->pluck('q2');

    $pollResultsQ8 = Kuis::when($selectedProdi, function ($query, $prodi) {
        return $query->whereHas('alumnus', function ($q) use ($prodi) {
            $q->where('prodi', $prodi);
        });
    })->pluck('q5');

    $pollResultsQ9 = Kuis::when($selectedProdi, function ($query, $prodi) {
        return $query->whereHas('alumnus', function ($q) use ($prodi) {
            $q->where('prodi', $prodi);
        });
    })->pluck('q10');

    // Hitung jumlah total
    $totalQ1 = $pollResultsQ1->count();
    $totalQ2 = $pollResultsQ2->count();
    $totalQ3 = $pollResultsQ3->count();
    $totalQ4 = $pollResultsQ4->count();
    $totalQ5 = $pollResultsQ5->count();
    $totalQ6 = $pollResultsQ6->count();
    $totalQ7 = $pollResultsQ7->count();
    $totalQ8 = $pollResultsQ8->count();
    $totalQ9 = $pollResultsQ9->count();

    // Hitung persentase
    $resultCountsQ1 = $pollResultsQ1->countBy()->map(function ($count) use ($totalQ1) {
        return $totalQ1 > 0 ? ($count / $totalQ1) * 100 : 0;
    });

    $resultCountsQ2 = $pollResultsQ2->countBy()->map(function ($count) use ($totalQ2) {
        return $totalQ2 > 0 ? ($count / $totalQ2) * 100 : 0;
    });

    $resultCountsQ3 = $pollResultsQ3->countBy()->map(function ($count) use ($totalQ3) {
        return $totalQ3 > 0 ? ($count / $totalQ3) * 100 : 0;
    });

    // Menghitung hasil polling untuk Q4
    $resultCountsQ4 = $pollResultsQ4->countBy()->map(function ($count) use ($totalQ4) {
        return $totalQ4 > 0 ? ($count / $totalQ4) * 100 : 0;
    });

    // Menghitung hasil polling untuk Q5
    $resultCountsQ5 = $pollResultsQ5->countBy()->map(function ($count) use ($totalQ5) {
        return $totalQ5 > 0 ? ($count / $totalQ5) * 100 : 0;
    });

    // Menghitung hasil polling untuk Q6
    $resultCountsQ6 = $pollResultsQ6->countBy()->map(function ($count) use ($totalQ6) {
        return $totalQ6 > 0 ? ($count / $totalQ6) * 100 : 0;
    });

    // Menghitung hasil polling untuk Q7
    $resultCountsQ7 = $pollResultsQ7->countBy()->map(function ($count) use ($totalQ7) {
        return $totalQ7 > 0 ? ($count / $totalQ7) * 100 : 0;
    });

    // Menghitung hasil polling untuk Q8
    $resultCountsQ8 = $pollResultsQ8->countBy()->map(function ($count) use ($totalQ8) {
        return $totalQ8 > 0 ? ($count / $totalQ8) * 100 : 0;
    });

    // Menghitung hasil polling untuk Q9
    $resultCountsQ9 = $pollResultsQ9->countBy()->map(function ($count) use ($totalQ9) {
        return $totalQ9 > 0 ? ($count / $totalQ9) * 100 : 0;
    });


    // Siapkan data untuk chart
    $labelsQ1 = $resultCountsQ1->keys();
    $dataQ1 = $resultCountsQ1->values();

    $labelsQ2 = $resultCountsQ2->keys();
    $dataQ2 = $resultCountsQ2->values();

    $labelsQ3 = $resultCountsQ3->keys();
    $dataQ3 = $resultCountsQ3->values();

    $labelsQ4 = $resultCountsQ4->keys();
    $dataQ4 = $resultCountsQ4->values();

    $labelsQ5 = $resultCountsQ5->keys();
    $dataQ5 = $resultCountsQ5->values();

    $labelsQ6 = $resultCountsQ6->keys();
    $dataQ6 = $resultCountsQ6->values();

    $labelsQ7 = $resultCountsQ7->keys();
    $dataQ7 = $resultCountsQ7->values();

    $labelsQ8 = $resultCountsQ8->keys();
    $dataQ8 = $resultCountsQ8->values();

    $labelsQ9 = $resultCountsQ9->keys();
    $dataQ9 = $resultCountsQ9->values();

    // Pass data ke view
    return view('kuis.polling_kuis', compact(
        'labelsQ1', 'dataQ1',
        'labelsQ2', 'dataQ2',
        'labelsQ3', 'dataQ3',
        'labelsQ4', 'dataQ4',
        'labelsQ5', 'dataQ5',
        'labelsQ6', 'dataQ6',
        'labelsQ7', 'dataQ7',
        'labelsQ8', 'dataQ8',
        'labelsQ9', 'dataQ9',
        'prodiOptions', 'selectedProdi'));
}

}
