<?php

namespace App\Imports;

use App\Models\User;
use App\Models\Licevoystchet;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Concerns\Importable;
//use Maatwebsite\Excel\Concerns\WithProgressBar;

class ImportUser implements ToModel, WithHeadingRow
{
    use Importable;
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        if(!isset($row['email'])){
            $lc = new Licevoystchet;
            $lc->personal_number_symbol = $row['simvolnyi_nomer'];
            $lc->personal_number = $row['cislovoi_nomer'];
            return $lc;
        }
        else {
            if ($user = User::where('email', $row['email'])->first()) {
                $lc = new Licevoystchet;
                $lc->personal_number_symbol = $row['simvolnyi_nomer'];
                $lc->personal_number = $row['cislovoi_nomer'];
                $user->licevoystchet()->save($lc);
                return $lc;
            }
            else {
                $lc = new Licevoystchet;
                $lc->personal_number_symbol = $row['simvolnyi_nomer'];
                $lc->personal_number = $row['cislovoi_nomer'];
                $user = new User;
                $user->name = '';
                $user->email = $row['email'];
                $user->password = Str::random(8);
                $user->licevoystchet()->save($lc);
                return $user;
            }
        }
    }
}
