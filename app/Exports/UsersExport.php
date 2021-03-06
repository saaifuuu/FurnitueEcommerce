<?php

namespace App\Exports;

use App\Subscriber;
use Maatwebsite\Excel\Concerns\FromCollection;

class UsersExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Subscriber::all('mail');
    }
}
