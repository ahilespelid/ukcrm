<?php

namespace App\Imports;

use App\Models\Licevoystchet;
use App\Models\Addresses;
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
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\RemembersRowNumber;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ImportAccruals implements ToModel
{
    use Importable;
    use RemembersRowNumber;

    public function mapping(): array
    {
        return [
            'doc_name'  => 'C1',
            'period' => 'C3',
        ];
    }
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

    public function model(array $row)
    {
        if($this->getRowNumber() < 7 || $row[1] == '#NULL!' || $row[2] == '#NULL!') {
            return null;
        };
        //лицевой счет
        $tmpArrApartment = explode(' ', $row[4]);
        $apartment = '';
        $dom='';
        foreach($tmpArrApartment as $k => $v){
            $val = trim($v);
            if($val == 'кв.' || $val == 'пом.' ){
                $kv = $v;
                $apartment = trim($tmpArrApartment[$k+1]);
            }
            elseif($val == 'дом'){
                $keyDom = $k;
                $dom = trim($tmpArrApartment[$k+1]);
            }
            elseif(!isset($keyDom)){
                $arrAddress[] = trim($v);
            }
        }
        $address = implode(' ', $arrAddress);

        //данные
        $lc = new Licevoystchet;
        $adrs = new Addresses;

        $lc->personal_number_symbol = $row[1] ? $row[1] : null;
        $lc->personal_number = isset($row[2]) && $row[2] != '#NULL!' ? $row[2] : '';
        $lc->payer = $row[3] ? $row[3] : null;
        $lc->apartment = $apartment ? $apartment : null;
        $lc->total_area = $row[6] ? $row[6] : null;
        $lc->total_persons = isset($row[7]) && $row[7] != '#NULL!' ? $row[7] : null;
        $lc->imprest = isset($row[8]) && $row[8] != '#NULL!' ? $row[8] : null;

        $adrs->street = $address ? $address : null;
        $adrs->house = $dom ? $dom : null;

        if(isset($row[9]) && $row[9] != '#NULL!'){
            $cw = new Coldwater; //холодная вода
            $cw->summa = $row[9];
            $cw->save();
        }
        if(isset($row[10]) && $row[10] != '#NULL!'){
            $hw = new Hotwater; //горячая вода
            $hw->summa = $row[10];
            $hw->save();
        }
        if(isset($row[11]) && $row[11] != '#NULL!'){
            $ed = new Electroday; //электричество день
            $ed->summa = $row[11];
            $ed->save();
        }
        if(isset($row[12]) && $row[12] != '#NULL!'){
            $en = new Electronight; //электричество ночь
            $en->summa = $row[12];
            $en->save();
        }

        if((isset($row[13]) && $row[13] != '#NULL!') || (isset($row[38]) && $row[38] != '#NULL!') || (isset($row[45]) && $row[45] != '#NULL!')) {
            $heating = new Heating; //отопление
            $heating->heating = $row[13] != '#NULL!' ? $row[13] : null;
            $heating->gvs_up_coefficient = $row[38] != '#NULL!' ? $row[38] : null;
            $heating->heating_consumption = $row[45] != '#NULL!' ? $row[45] : null;
            $heating->save();
        }

        if((isset($row[13]) && $row[13] != '#NULL!') || (isset($row[13]) && $row[13] != '#NULL!')){
            $sewage = new Sewage; //канализация
            $sewage->sewage_h_v = $row[14] != '#NULL!' ? $row[14] : null;
            $sewage->sewage_g_v = $row[15] != '#NULL!' ? $row[15] : null;
            $sewage->save();
        }
        if((isset($row[16]) && $row[16] != '#NULL!') || (isset($row[17]) && $row[17] != '#NULL!') || (isset($row[18]) && $row[18] != '#NULL!')
        || (isset($row[19]) && $row[19] != '#NULL!') || (isset($row[46]) && $row[46] != '#NULL!') || (isset($row[47]) && $row[47] != '#NULL!')
        || (isset($row[48]) && $row[48] != '#NULL!')){
            $odn = new Odn; //общедомовые нужды
            $odn->hvs_odn = $row[16] != '#NULL!' ? $row[16] : null;
            $odn->el_day_odn = $row[17] != '#NULL!' ? $row[17] : null;
            $odn->el_night_odn = $row[18] != '#NULL!' ? $row[18] : null;
            $odn->gvs_odn = $row[19] != '#NULL!' ? $row[19] : null;
            $odn->comp_gvs_odn = $row[46] != '#NULL!' ? $row[46] : null;
            $odn->sewage_h_v_odn = $row[47] != '#NULL!' ? $row[47] : null;
            $odn->sewage_g_v_odn = $row[48] != '#NULL!' ? $row[48] : null;
            $odn->save();
        }

        if((isset($row[31]) && $row[31] != '#NULL!') || (isset($row[32]) && $row[32] != '#NULL!') || (isset($row[33]) && $row[33] != '#NULL!')
        || (isset($row[34]) && $row[34] != '#NULL!') || (isset($row[35]) && $row[35] != '#NULL!') ){
            $llc = new Llc; //начисления для компании
            $llc->hvs_llc = $row[31] != '#NULL!' ? $row[31] : null;
            $llc->gvs_llc = $row[32] != '#NULL!' ? $row[32] : null;
            $llc->sewerage_hv_llc = $row[33] != '#NULL!' ? $row[33] : null;
            $llc->sewerage_gv_llc = $row[34] != '#NULL!' ? $row[34] : null;
            $llc->thermal_energy_llc = $row[35] != '#NULL!' ? $row[35] : null;
            $llc->save();
        }

        if((isset($row[20]) && $row[20] != '#NULL!') ||
            (isset($row[21]) && $row[21] != '#NULL!') ||
            (isset($row[22]) && $row[22] != '#NULL!') ||
            (isset($row[23]) && $row[23] != '#NULL!') ||
            (isset($row[24]) && $row[24] != '#NULL!') ||
            (isset($row[25]) && $row[25] != '#NULL!') ||
            (isset($row[26]) && $row[26] != '#NULL!') ||
            (isset($row[27]) && $row[27] != '#NULL!') ||
            (isset($row[28]) && $row[28] != '#NULL!') ||
            (isset($row[29]) && $row[29] != '#NULL!') ||
            (isset($row[30]) && $row[30] != '#NULL!') ||
            (isset($row[36]) && $row[36] != '#NULL!') ||
            (isset($row[37]) && $row[37] != '#NULL!') ||
            (isset($row[39]) && $row[39] != '#NULL!') ||
            (isset($row[40]) && $row[40] != '#NULL!') ||
            (isset($row[41]) && $row[41] != '#NULL!') ||
            (isset($row[42]) && $row[42] != '#NULL!') ||
            (isset($row[43]) && $row[43] != '#NULL!') ||
            (isset($row[44]) && $row[44] != '#NULL!') ||
            (isset($row[49]) && $row[49] != '#NULL!') ||
            (isset($row[50]) && $row[50] != '#NULL!') ||
            (isset($row[51]) && $row[51] != '#NULL!') ||
            (isset($row[52]) && $row[52] != '#NULL!') ||
            (isset($row[53]) && $row[53] != '#NULL!')) {
                $works = new Works; //дополнительные услуги
                $works->santekh_work = $row[20] != '#NULL!' ? $row[20] : null;
                $works->electrotech_work = $row[21] != '#NULL!' ? $row[21] : null;
                $works->roofing = $row[22] != '#NULL!' ? $row[22] : null;
                $works->sanitary_service = $row[23] != '#NULL!' ? $row[23] : null;
                $works->sightseeing = $row[24] != '#NULL!' ? $row[24] : null;
                $works->lifts = $row[25] != '#NULL!' ? $row[25] : null;
                $works->aur_rkc_ps = $row[26] != '#NULL!' ? $row[26] : null;
                $works->special_work = $row[27] != '#NULL!' ? $row[27] : null;
                $works->additional_work = $row[28] != '#NULL!' ? $row[28] : null;
                $works->сivil_works = $row[29] != '#NULL!' ? $row[29] : null;
                $works->component_gvs = $row[30] != '#NULL!' ? $row[30] : null;
                $works->television = $row[36] != '#NULL!' ? $row[36] : null;
                $works->blagoustroystvo = $row[37] != '#NULL!' ? $row[37] : null;
                $works->cleaning_stairwells = $row[39] != '#NULL!' ? $row[39] : null;
                $works->maintenance_territory = $row[40] != '#NULL!' ? $row[40] : null;
                $works->management_services = $row[41] != '#NULL!' ? $row[41] : null;
                $works->lifts_maintenance = $row[42] != '#NULL!' ? $row[42] : null;
                $works->maintenance_appz = $row[43] != '#NULL!' ? $row[43] : null;
                $works->maintenance_aitp = $row[44] != '#NULL!' ? $row[44] : null;
                $works->maintenance_communications = $row[49] != '#NULL!' ? $row[49] : null;
                $works->maintenance_skud = $row[50] != '#NULL!' ? $row[50] : null;
                $works->emergency_dispatch_services = $row[51] != '#NULL!' ? $row[51] : null;
                $works->current_common_property = $row[52] != '#NULL!' ? $row[52] : null;
                $works->passport_registration_service = $row[53] != '#NULL!' ? $row[53] : null;
                $works->save();
            }

        $adrs->save();
        return $lc;
    }
}
