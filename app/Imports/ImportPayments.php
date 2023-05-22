<?php

namespace App\Imports;

use App\Models\Payments;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportPayments implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Payments([
            //
        ]);
    }
}
