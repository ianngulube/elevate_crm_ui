<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //Role::factory()->times(10)->create();
        DB::table('roles')->insert(['name'=>'Admin'
        ]);
        DB::table('roles')->insert(['name'=>'Author'
        ]);
        DB::table('roles')->insert(['name'=>'User'
        ]);
        DB::table('roles')->insert(['name'=>'Member'
        ]);
        DB::table('roles')->insert(['name'=>'Management'
        ]);
    }
}
