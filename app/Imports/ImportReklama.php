<?php

namespace App\Imports;

use App\Models\Reklama;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportReklama implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Reklama([
            //
        ]);
    }
}
