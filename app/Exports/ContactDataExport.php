<?php

namespace App\Exports;

use App\Models\Contactdata;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ContactDataExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public function headings():array{
        return[
            'Name',
            'Email',
            'Subject',
            'Message',
        ];
    }
    public function collection()
    {
        return Contactdata::select('name','email','subject','message')->get();
    }
}
