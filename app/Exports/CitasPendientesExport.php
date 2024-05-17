<?php

namespace App\Exports;

use App\Models\CitasPendiente;
use Maatwebsite\Excel\Concerns\FromCollection;

class CitasPendientesExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return CitasPendiente::all();
    }
}
