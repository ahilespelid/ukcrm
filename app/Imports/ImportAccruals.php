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

        $cw->summa = $row[10] ? $row[10] : null;
        $hw->summa = $row[11] ? $row[11] : null;
        $ed->summa = $row[12] ? $row[12] : null;
        $en->summa = $row[13] ? $row[13] : null;

        $heating->heating = $row[14] ? $row[14] : null;

        $sewage->sewage_h_v = $row[15] ? $row[15] : null;
        $sewage->sewage_g_v = $row[16] ? $row[16] : null;

        $odn->hvs_odn = $row[17] ? $row[17] : null;
        $odn->el_day_odn = $row[18] ? $row[18] : null;
        $odn->el_night_odn = $row[19] ? $row[19] : null;
        $odn->gvs_odn = $row[20] ? $row[20] : null;

        $works->santekh_work = $row[21] ? $row[21] : null;
        $works->electrotech_work = $row[22] ? $row[22] : null;
        $works->roofing = $row[23] ? $row[23] : null;
        $works->sanitary_service = $row[24] ? $row[24] : null;
        $works->sightseeing = $row[25] ? $row[25] : null;
        $works->lifts = $row[26] ? $row[26] : null;
        $works->aur_rkc_ps = $row[27] ? $row[27] : null;
        $works->special_work = $row[28] ? $row[28] : null;
        $works->additional_work = $row[29] ? $row[29] : null;
        $works->сivil_works = $row[30] ? $row[30] : null;
        $works->component_gvs = $row[31] ? $row[31] : null;

        $llc->hvs_llc = $row[32] ? $row[32] : null;
        $llc->gvs_llc = $row[33] ? $row[33] : null;
        $llc->sewerage_hv_llc = $row[34] ? $row[34] : null;
        $llc->sewerage_gv_llc = $row[35] ? $row[35] : null;
        $llc->thermal_energy_llc = $row[36] ? $row[36] : null;

        $works->television = $row[37] ? $row[37] : null;
        $works->blagoustroystvo = $row[38] ? $row[38] : null;

        $heating->gvs_up_coefficient = $row[39] ? $row[39] : null;

        $works->cleaning_stairwells = $row[40] ? $row[40] : null;
        $works->maintenance_territory = $row[41] ? $row[41] : null;
        $works->management_services = $row[42] ? $row[42] : null;
        $works->lifts_maintenance = $row[43] ? $row[43] : null;
        $works->maintenance_appz = $row[44] ? $row[44] : null;
        $works->maintenance_aitp = $row[45] ? $row[45] : null;

        $heating->heating_consumption = $row[46] ? $row[46] : null;

    }
}
