<?php

namespace App\Imports;

use App\Models\Houses;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportHouses implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Houses([
            //
        ]);
    }
}
