<?php

namespace App\Exports;

use App\Abbreviation;
use Maatwebsite\Excel\Concerns\FromCollection;

class AbbreviationExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Abbreviation::all();
    }
}
