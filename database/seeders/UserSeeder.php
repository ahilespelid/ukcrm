<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\User;
use App\Models\Permission;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $developer = Role::where('slug','super-admin')->first();
        $manager = Role::where('slug', 'manager')->first();
        $lk = Role::where('slug', 'owner')->first();
        $createTasks = Permission::where('slug','create-tasks')->first();
        $manageUsers = Permission::where('slug','manage-users')->first();
        $super = new User();
        $super->name = 'SuperAdmin';
        $super->email = 'admin@gmail.com';
        $super->password = Hash::make('password');
        $super->save();
        $super->roles()->attach($developer);
        $super->permissions()->attach($createTasks);
        $adm = new User();
        $adm->name = 'Mike Thomas';
        $adm->email = 'user@gmail.com';
        $adm->password = Hash::make('password');
        $adm->save();
        $adm->roles()->attach($manager);
        $adm->permissions()->attach($manageUsers);
        $owner = new User();
        $owner->name = 'Dim Dimicth';
        $owner->email = 'owner@gmail.com';
        $owner->password = Hash::make('password');
        $owner->save();
        $owner->roles()->attach($lk);
        $owner->permissions()->attach($manageUsers);
    }
}
