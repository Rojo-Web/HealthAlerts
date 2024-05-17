<?php

namespace App\Exports;

use App\Models\ProximasCita;
use Maatwebsite\Excel\Concerns\FromCollection;

class ProximasCitasExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return ProximasCita::all();
    }
}
