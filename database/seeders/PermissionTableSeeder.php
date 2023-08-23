<?php

namespace Database\Seeders;
use Spatie\Permission\Models\Permission;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            'Profile',
            'Users',
            'Admin_Books',
            'User_Books',
            ];
            foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
            }
    }
}
