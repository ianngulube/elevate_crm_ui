<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNullablesDefaultsAndNullsToMembersTable extends Migration
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
            $table->string('title')->nullable()->nullable()->default('')->change();
            $table->string('firstname')->nullable()->default('')->change();
            $table->string('surname')->nullable()->default('')->change();
            $table->date('dob')->nullable()->default('1800-12-12')->change();
            $table->string('gender')->nullable()->default('')->change();
            $table->date('membership_date')->nullable()->default('1800-12-12')->change();
            $table->string('id_number')->nullable()->default('')->change();            
            $table->string('profession')->nullable()->default('')->change();
            $table->string('passport_number')->nullable()->default('')->change();
            $table->string('status')->nullable()->default('')->change();
            $table->string('marital_status')->nullable()->default('')->change();
            $table->string('member_type')->nullable()->default('')->change();
            $table->string('home_number')->nullable()->default('')->change();
            $table->string('office_number')->nullable()->default('')->change();
            $table->string('cellphone_number')->nullable()->default('')->change();
            $table->string('email')->nullable()->default('')->change();
            $table->string('website')->nullable()->default('')->change();
            $table->string('address_line1')->nullable()->default('')->change();
            $table->string('address_line2')->nullable()->default('')->change();
            $table->string('address_line3')->nullable()->default('')->change();
            $table->string('postal_code')->nullable()->default('')->change();
            $table->string('city')->nullable()->default('')->change();
            $table->string('province')->nullable()->default('')->change();
            $table->string('office_address_line1')->nullable()->default('')->change();
            $table->string('office_address_line2')->nullable()->default('')->change();
            $table->string('office_address_line3')->nullable()->default('')->change();
            $table->string('office_postal_code')->nullable()->default('')->change();
            $table->string('office_province')->nullable()->default('')->change();
            $table->string('next_of_kin_firstname')->nullable()->default('')->change();
            $table->string('next_of_kin_surname')->nullable()->default('')->change();
            $table->string('next_of_kin_phone')->nullable()->default('')->change();     
            $table->string('next_of_kin_email')->nullable()->default('')->change();  
            $table->string('membership_number')->nullable()->default('')->change();  
            $table->string('member_user_id')->nullable()->default('')->change();  
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
