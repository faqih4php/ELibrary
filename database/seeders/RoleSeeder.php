<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Role::create([
           'name' => 'Admin',
           'guard_name' => 'admin'
        ]);
        
        Role::create([
           'name' => 'Pegawai',
           'guard_name' => 'pegawai'
        ]);
        
        Role::create([
           'name' => 'User',
           'guard_name' => 'user'
        ]);
    }
}
