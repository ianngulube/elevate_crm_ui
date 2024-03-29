<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //$adminRole = Role::where('name','=','Admin')->first();
      //  $adminUser  = User::where('email','=','fndlovu48@gmail.com');
        DB::table('role_user')->insert(['role_id'=>1,'user_id'=> 1
        ]);
    }
}
