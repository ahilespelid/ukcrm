<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Licevoystchet extends Model
{
    protected $table = 'licevoy_stchet';

    /*
    protected $fillable = [
                            'id',
                            'user_id', //-
                            'group_houses_id', //-
                            'personal_number_symbol', //+ символьный номер лицевого счета
                            'personal_number', //номер лицевого счета
                            'created_at',
                            'updated_at',
                            'addresses_id',
                            'apartment', //номер квартиры
                            'total_area', //площадь
                            'total_persons', //количество проживающих
                            'last_payment',
                            'date_last_payment',
                            'payer', //плательщик
                            'ipu_cold_water',
                            'ipu_cold_water_date_off',
                            'ipu_cold_water_latest_indications_fact',
                            'ipu_cold_water_latest_indications_date',
                            'ipu_cold_water_latest_indications',
                            'ipu_cold_water_this_indications',
                            'ipu_hot_water',
                            'ipu_hot_water_date_off',
                            'ipu_hot_water_latest_indications_fact',
                            'ipu_hot_water_latest_indications_date',
                            'ipu_hot_water_latest_indications',
                            'ipu_hot_water_this_indications',
                            'ipu_electricity_day',
                            'ipu_electricity_day_date_off',
                            'ipu_electricity_day_latest_indications_fact',
                            'ipu_electricity_day_latest_indications_date',
                            'ipu_electricity_day_latest_indications',
                            'ipu_electricity_day_this_indications',
                            'ipu_electricity_night',
                            'ipu_electricity_night_date_off',
                            'ipu_electricity_night_latest_indications_fact',
                            'ipu_electricity_night_latest_indications_date',
                            'ipu_electricity_night_latest_indications',
                            'ipu_electricity_night_this_indications',
                            //------
                            'heating', //отопление
                            'channel_h_v', //Канал х..в.
                            'channel_g_v', //Канал г.в.
                            'hvs_odn', //ХВС ОДН
                            'el_day_odn', //Эл.день ОДН 13
                            'el_night_odn', //Эл.ночь ОДН 14
                            'gvs_odn', //ГВС ОДН
                            'santekh_work', //Сантех. работы
                            'electrotech_work', //Электротех. работы
                            'roofing', //Кровельные работы
                            'sanitary_service', //Санитар.обслуживание
                            'sightseeing', //Осмотры
                            'lifts', //Лифты
                            'aur_rkc_ps', //АУР,РКЦ,Пасп.стол
                            'special_work', //Особ. и спец. работы
                            'additional_work', //Доп. работы
                            'сivil_works', //Общестроит. работы
                            'component_gvs', //Компонент  на ГВС

                            'hvs_llc', //ХВС коммерция
                            'gvs_llc', //ГВС коммерция
                            'sewerage_hv_llc', //Канал х..в. коммерция
                            'sewerage_gv_llc', //Канал г.в. коммерция
                            'thermal_energy_llc', //Тепл.энергия коммерция

                            'television', //Телетрансляция
                            'blagoustroystvo', //Благоустройство
                            'gvs_up_coefficient', //ГВС повышающий
                            'cleaning_stairwells', //Уборка лестн. клеток
                            'maintenance_territory', //Содерж. придом. территории
                            'management_services', //Услуги по управл.
                            'lifts_maintenance', //Тех. обсл. лифтов
                            'maintenance_appz', //Обсл. сист. АППЗ
                            'maintenance_aitp', //Обсл. АИТП
                            'heating_consumption', //Отопление расход
                            'comp_gvs_odn', //Комп. на ГВС ОДН
                            'channel_h_v_odn', //Канал х..в. ОДН
                            'channel_g_v_odn', //Канал г..в. ОДН
                            'maintenance_communications', //Сод.и тех. обсл. коммуникаций
                            'maintenance_skud', //Обсл. СКУД
                            'emergency_dispatch_services', //Авар.-дисп. обсл
                            'current_common_property', //Тек.рем.общ.имущ.
                            'passport_registration_service', //Пасп-регистр.обсл
                            'active',
                        ];
    */
    public function user() //Licevoystchet -> user
    {
        return $this->belongsTo(User::class);
    }

    public function addresses() //Licevoystchet -> addresses
    {
        return $this->belongsTo(Addresses::class);
    }

    public function llc() //Licevoystchet -> начисления для компании
    {
        return $this->hasMany(App\Models\Llc::class);
    }

    public function odn() //Licevoystchet -> начисления общедомовые нужды
    {
        return $this->hasMany(App\Models\Odn::class);
    }

    public function payments() //Licevoystchet -> Платежи
    {
        return $this->hasMany(App\Models\Payments::class);
    }

    public function sewage() //Licevoystchet -> начисления канализация
    {
        return $this->hasMany(App\Models\Sewage::class);
    }

    public function works() //Licevoystchet -> начисления дополнительные услуги
    {
        return $this->hasMany(App\Models\Works::class);
    }

    public function coldwater() //Licevoystchet -> начисления холодная вода
    {
        return $this->hasMany(App\Models\Coldwater::class);
    }

    public function electroday() //Licevoystchet -> начисления электричество день
    {
        return $this->hasMany(App\Models\Electroday::class);
    }

    public function electronight() //Licevoystchet -> начисления электричество ночь
    {
        return $this->hasMany(App\Models\Electronight::class);
    }

    public function heating() //Licevoystchet -> начисления отопление
    {
        return $this->hasMany(App\Models\Heating::class);
    }

    public function hotwater() //Licevoystchet -> начисления горячая вода
    {
        return $this->hasMany(App\Models\Hotwater::class);
    }


}
