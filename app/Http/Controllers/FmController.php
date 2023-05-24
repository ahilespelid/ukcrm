<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ImportFm;
use App\Services\Exel;
use App\Models\Licevoystchet;

class FmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function import(Request $request)
    {
        $data['items'] = '';
        return view('admin.pages.file-manager.import')->with('data', $data);
    }
    /**
     * Display a listing of the resource.
     */
    public function export()
    {
        $data['items'] = '';
        return view('admin.pages.file-manager.export')->with('data', $data);
    }
    /**
     * Display a listing of the resource.
     */
    public function setting()
    {
        $data['items'] = '';
        return view('admin.pages.file-manager.settings')->with('data', $data);
    }

    /**
    * @return \Illuminate\Support\Collection
    */
///*/ ahilespelid ///*/ 
public function import_post(Request $request){
    $request->validate(['table' => 'required|in:User,Houses,Reklama,Accruals,Payments','file' => 'required']);
    $mes = 'Экспорт данных успешно завершен.';
//
/*/Excel::import(new 'App\Imports\Import'.$class, request()->file('file'));
return redirect('/file-manager/import')->with('status', 'Экспорт данных успешно завершен.');
///*/
    
    if(is_array($arExel = Exel::toArray(request()->file('file'))) && !empty($arExel)){
        
        //pa($arExel); exit;
        
        if('User'     == $request->table){
            foreach($arExel as $k => $v){//if(6>$k || empty($v[2])){continue;}
                $LC = Licevoystchet::firstOrNew(['personal_number' => trim($v[2])]);  ///*/                                     = $v[0] ///*/
                $LC->personal_number = trim($v[2]);                                   ///*/ Числовой номер л/счета              = $v[2] ///*/
                $LC->email = trim($v[3]);                                             ///*/ Email                               = $v[3] ///*/
          
                //$LC->save();
            }pa($LC->toArray()); pa($arExel); exit;
            
        }else
        if('Houses'   == $request->table){}else
        if('Reklama'  == $request->table){}else
        if('Accruals' == $request->table){
            foreach($arExel as $k => $v){if(6>$k || empty($v[2])){continue;}
                $LC = Licevoystchet::firstOrNew(['personal_number' => trim($v[2])]);  ///*/                                     = $v[0] ///*/
                $LC->personal_number_symbol = trim($v[1]);                            ///*/ Символьный номер л/счета            = $v[1] ///*/
                $LC->personal_number = trim($v[2]);                                   ///*/ Числовой номер л/счета              = $v[2] ///*/
                $LC->payer = trim($v[3]);                                             ///*/ Наниматель                          = $v[3] ///*/
                $LC->apartment = trim($v[4]);                                         ///*/ Адрес                               = $v[4] ///*/
                //$LC->token = $v[5];///*/ Всего                               = $v[5] ///*/
                $LC->total_area = trim($v[6]);                                        ///*/ Площ.                               = $v[6] ///*/
                $LC->total_persons = trim($v[7]);                                     ///*/ Пропи- сано                         = $v[7] ///*/ 
                $LC->imprest = trim($v[8]);                                           ///*/ Аванс                               = $v[8] ///*/ 
                $LC->ipu_cold_water = trim($v[9]);                                    ///*/ Хол.вода                            = $v[9] ///*/ 
                $LC->ipu_hot_water = trim($v[10]);                                    ///*/ Горяч. вода                         = $v[10] ///*/ 
                $LC->ipu_electricity_day = trim($v[11]);                              ///*/ Электр.день                         = $v[11] ///*/ 
                $LC->ipu_electricity_night = trim($v[12]);                            ///*/ Электр. ночь                        = $v[12] ///*/ 
                //$LC->token = $v[13];///*/ Отопление 5                         = $v[13] ///*/ 
                //$LC->token = $v[14];///*/ Канал х..в.                         = $v[14] ///*/ 
                //$LC->token = $v[15];///*/ Канал г.в.                          = $v[15] ///*/ 
                //$LC->token = $v[16];///*/ ХВС ОДН                             = $v[16] ///*/ 
                //$LC->token = $v[17];///*/ Эл.день ОДН 13                      = $v[17] ///*/ 
                //$LC->token = $v[18];///*/ Эл.ночь ОДН 14                      = $v[18] ///*/ 
                //$LC->token = $v[19];///*/ ГВС ОДН                             = $v[19] ///*/ 
                //$LC->token = $v[20];///*/ Сантех. работы                      = $v[20] ///*/ 
                //$LC->token = $v[21];///*/ Электротех. работы                  = $v[21] ///*/ 
                //$LC->token = $v[22];///*/ Кровельные работы                   = $v[22] ///*/ 
                //$LC->token = $v[23];///*/ Санитар.обслуживание                = $v[23] ///*/ 
                //$LC->token = $v[24];///*/ Осмотры                             = $v[24] ///*/ 
                //$LC->token = $v[25];///*/ Лифты                               = $v[25] ///*/ 
                //$LC->token = $v[26];///*/ АУР,РКЦ,Пасп.стол                   = $v[26] ///*/ 
                //$LC->token = $v[27];///*/ Особ. и спец. работы                = $v[27] ///*/ 
                //$LC->token = $v[28];///*/ Доп. работы                         = $v[28] ///*/ 
                //$LC->token = $v[29];///*/ Общестроит. работы                  = $v[29] ///*/ 
                //$LC->token = $v[30];///*/ Компонент  на ГВС                   = $v[30] ///*/ 
                //$LC->token = $v[31];///*/ ХВС коммерция                       = $v[31] ///*/ 
                //$LC->token = $v[32];///*/ ГВС коммерция                       = $v[32] ///*/ 
                //$LC->token = $v[33];///*/ Канал х..в. коммерция               = $v[33] ///*/ 
                //$LC->token = $v[34];///*/ Канал г.в. коммерция                = $v[34] ///*/ 
                //$LC->token = $v[35];///*/ Тепл.энергия коммерция              = $v[35] ///*/ 
                //$LC->token = $v[36];///*/ Телетрансляция                      = $v[36] ///*/ 
                //$LC->token = $v[37];///*/ Благоустройство                     = $v[37] ///*/ 
                //$LC->token = $v[38];///*/ ГВС повышающий                      = $v[38] ///*/  
                //$LC->token = $v[39];///*/ Уборка лестн. клеток                = $v[39] ///*/ 
                //$LC->token = $v[40];///*/ Содерж. придом. территории          = $v[40] ///*/ 
                //$LC->token = $v[41];///*/ Услуги по управл.                   = $v[41] ///*/ 
                //$LC->token = $v[42];///*/ Тех. обсл. лифтов                   = $v[42] ///*/ 
                //$LC->token = $v[43];///*/ Обсл. сист. АППЗ                    = $v[43] ///*/ 
                //$LC->token = $v[44];///*/ Обсл. АИТП                          = $v[44] ///*/ 
                //$LC->token = $v[45];///*/ Отопление расход                    = $v[45] ///*/ 
                //$LC->token = $v[46];///*/ Комп. на ГВС ОДН                    = $v[46] ///*/ 
                //$LC->token = $v[47];///*/ Канал х..в. ОДН                     = $v[47] ///*/ 
                //$LC->token = $v[48];///*/ Канал г..в. ОДН                     = $v[48] ///*/
                //$LC->token = $v[49];///*/ Сод.и тех. обсл. коммуникаций       = $v[49] ///*/ 
                //$LC->token = $v[50];///*/ Обсл. СКУД                          = $v[50] ///*/
                //$LC->token = $v[51];///*/ Авар.-дисп. обсл                    = $v[51] ///*/ 
                //$LC->token = $v[52];///*/ Тек.рем.общ.имущ.                   = $v[52] ///*/ 
                //$LC->token = $v[53];///*/ Пасп-регистр.обсл                   = $v[53] ///*/ 

                $LC->active = 1;
                $LC->save();
            }
        }elseif('Payments' == $request->table){}else{$mes = 'Не выбран объект для загрузки.';}}//pa($arExel); exit;
return to_route('fm_import')->with('status', $mes);}
}
