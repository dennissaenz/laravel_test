<?php

namespace Database\Seeders;

use App\Models\UserDomicilio;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS  = 0');
        DB::table('users')->truncate();
        DB::table('user_domicilios')->truncate();
            \App\Models\User::factory(10)->create();
            UserDomicilio::factory(10)->create();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
