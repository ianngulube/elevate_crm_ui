<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
 
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('firstname')->nullable();
            $table->string('surname')->nullable();
            $table->date('dob')->nullable();
            $table->string('gender')->nullable();
            $table->date('membership_date')->nullable();
            $table->string('id_number')->nullable();            
            $table->string('profession')->nullable();
            $table->string('passport_number')->nullable();
            $table->string('status')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('member_type')->nullable();
            $table->string('home_number')->nullable();
            $table->string('office_number')->nullable();
            $table->string('cellphone_number')->nullable();
            $table->string('email')->nullable();
            $table->string('website')->nullable();
            $table->string('address_line1')->nullable();
            $table->string('address_line2')->nullable();
            $table->string('address_line3')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('city')->nullable();
            $table->string('province')->nullable();
            $table->string('office_address_line1')->nullable();
            $table->string('office_address_line2')->nullable();
            $table->string('office_address_line3')->nullable();
            $table->string('office_postal_code')->nullable();
            $table->string('office_province')->nullable();
            $table->string('next_of_kin_firstname')->nullable();
            $table->string('next_of_kin_surname')->nullable();
            $table->string('next_of_kin_phone')->nullable();     
            $table->string('next_of_kin_email')->nullable();  
            $table->string('membership_number')->nullable();     
            $table->text('signature')->nullable();  
            $table->text('other')->nullable();          
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
    }
}
