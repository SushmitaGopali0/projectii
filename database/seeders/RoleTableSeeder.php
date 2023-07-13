<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            [
                'role_name' => 'Admin',
                'role_value' => 'Admin'
            ],
            [
                'role_name' => 'Designer',
                'role_value' => 'Designer'
            ],
            [
                'role_name' => 'User',
                'role_value' => 'User'
            ],
        ]);
    }
}
