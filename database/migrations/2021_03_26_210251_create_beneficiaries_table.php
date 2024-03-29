<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeneficiariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beneficiaries', function (Blueprint $table) {
            $table->id();
            $table->string('beneficiary_firstname');
            $table->string('beneficiary_surname');
            $table->string('beneficiary_contact');
            $table->string('beneficiary_id_no');
            $table->string('beneficiary_email');
            $table->mediumText('beneficiary_address');
            $table->date('beneficiary_dob');
            $table->string('beneficiary_gender');
            $table->string('beneficiary_relationship');
            $table->unsignedBigInteger('member_id'); 
            $table->timestamps();

            $table->foreign('member_id')->references('id')->on('members')->onDelete('cascade');  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('beneficiaries');
    }
}
