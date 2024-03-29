<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $count = DB::table('users')->count();

        if($count<1){
            $this->call(UserSeeder::class);
            $this->call(RoleSeeder::class);
            $this->call(RoleUserSeeder::class);
            $this->call(StatusSeeder::class);
        
        }
       
    }
}
