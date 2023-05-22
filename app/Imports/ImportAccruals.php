<?php

namespace App\Imports;

use App\Models\Licevoystchet;
use Maatwebsite\Excel\Concerns\ToModel;
use App\Models\Coldwater;
use App\Models\Hotwater;
use App\Models\Electroday;
use App\Models\Electronight;
use App\Models\Heating;
use App\Models\Sewage;
use App\Models\Odn;
use App\Models\Works;
use App\Models\Llc;

class ImportAccruals implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        //лицевой счет
        $personal_number_symbol = $row[2];
        $personal_number = $row[3];
        $payer = $row[4];
        $tmpArrApartment = explode(' ', $row[5]);
        foreach($tmpArrApartment as $k => $v){
            $val = trim($v);
            if($val == 'кв.' || $val == 'пом.' ){
                $kv = $k;
                $apartment = trim($tmpArrApartment[$k+1]);
                break;
            }
            else{
                $arrAddress[] = trim($v);
            }
        }
        $address = implode($arrAddress);
        $total_area = $row[7];
        $total_persons = $row[8];
        $imprest = $row[9];
        //данные
        $lc = new Licevoystchet;
        //начисления
        $cw = new Coldwater; //холодная вода
        $hw = new Hotwater; //горячая вода
        $ed = new Electroday; //электричество день
        $en = new Electronight; //электричество ночь
        $heating = new Heating; //отопление
        $sewage = new Sewage; //канализация
        $odn = new Odn; //общедомовые нужды
        $works = new Works; //дополнительные услуги
        $llc = new Llc; //начисления для компании

    }
}
