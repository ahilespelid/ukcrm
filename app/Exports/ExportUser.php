<?php

namespace App\Exports;

use App\Models\User;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithMapping;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class ExportUser implements FromCollection, WithHeadings, WithColumnFormatting, WithMapping, ShouldAutoSize
{
    use Exportable;
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $users = User::get();

        foreach($users as $user) {
            $item_role='';
            foreach($user->roles as $role) {
                $item_role = isset($role) ? $role->name : '';
            }
            $item_user[] = [
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
                'item_role' => $item_role,
                'created_at' => $user->created_at,
                'updated_at' => $user->updated_at,
            ];
        };
        return collect($item_user);
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function headings():array
    {
        return ["ID", "Имя", "Email", "Роль", "Дата создания", "Дата обновления"];
    }
    /**
    * @var User $user
    */
    public function map($item_user): array
    {
        return [
            $item_user['id'],
            $item_user['name'],
            $item_user['email'],
            $item_user['item_role'],
            Date::dateTimeToExcel($item_user['created_at']),
            Date::dateTimeToExcel($item_user['updated_at']),
        ];
    }
    public function columnFormats(): array
    {
        return [
            'E' => NumberFormat::FORMAT_DATE_DDMMYYYY,
            'F' => NumberFormat::FORMAT_DATE_DDMMYYYY,
        ];
    }
}
