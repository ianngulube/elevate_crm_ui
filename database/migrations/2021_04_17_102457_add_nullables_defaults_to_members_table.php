<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNullablesDefaultsToMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('members', function (Blueprint $table) {
            //
            $table->string('title')->default('')->change();
            $table->string('firstname')->default('')->change();
            $table->string('surname')->default('')->change();
            $table->date('dob')->default('1800-12-12')->change();
            $table->string('gender')->default('')->change();
            $table->date('membership_date')->default('1800-12-12')->change();
            $table->string('id_number')->default('')->change();            
            $table->string('profession')->default('')->change();
            $table->string('passport_number')->default('')->change();
            $table->string('status')->default('')->change();
            $table->string('marital_status')->default('')->change();
            $table->string('member_type')->default('')->change();
            $table->string('home_number')->default('')->change();
            $table->string('office_number')->default('')->change();
            $table->string('cellphone_number')->default('')->change();
            $table->string('email')->default('')->change();
            $table->string('website')->default('')->change();
            $table->string('address_line1')->default('')->change();
            $table->string('address_line2')->default('')->change();
            $table->string('address_line3')->default('')->change();
            $table->string('postal_code')->default('')->change();
            $table->string('city')->default('')->change();
            $table->string('province')->default('')->change();
            $table->string('office_address_line1')->default('')->change();
            $table->string('office_address_line2')->default('')->change();
            $table->string('office_address_line3')->default('')->change();
            $table->string('office_postal_code')->default('')->change();
            $table->string('office_province')->default('')->change();
            $table->string('next_of_kin_firstname')->default('')->change();
            $table->string('next_of_kin_surname')->default('')->change();
            $table->string('next_of_kin_phone')->default('')->change();     
            $table->string('next_of_kin_email')->default('')->change();  
            $table->string('membership_number')->default('')->change();  
            $table->string('member_user_id')->default('')->change();  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('members', function (Blueprint $table) {
            //
        });
    }
}
