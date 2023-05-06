<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $super_admin = new Role();
        $super_admin->name = 'SuperAdmin';
        $super_admin->slug = 'super-admin';
        $super_admin->save();
        $manager = new Role();
        $manager->name = 'Manager';
        $manager->slug = 'manager';
        $manager->save();
        $owner = new Role();
        $owner->name = 'Owner';
        $owner->slug = 'owner';
        $owner->save();
    }
}
