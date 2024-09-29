<?php

namespace App\Exports;

use App\Models\Kuis;
use Maatwebsite\Excel\Concerns\FromCollection;

class KuisExport implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Kuis::with('alumnus')->get(); // Fetch Kuis data along with related Alumnus
    }
}
