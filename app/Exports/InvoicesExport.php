<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Ixudra\Curl\Facades\Curl;
use App\Exports\InvoicesExport;

class InvoicesExport implements FromCollection
{
    public function collection()
    {
        return Invoice::all();
    }
}
