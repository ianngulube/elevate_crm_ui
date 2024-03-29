<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('reference');
            $table->date('payment_date');
            $table->string('payment_reason');
            $table->string('type');
            $table->decimal('amount',20,2);
            $table->unsignedBigInteger('beneficiary_id'); 
            $table->unsignedBigInteger('bank_account_id'); 
            $table->unsignedBigInteger('user_id');    
            $table->timestamps();

            $table->foreign('bank_account_id')->references('id')->on('bank_accounts')->onDelete('cascade');
            $table->foreign('beneficiary_id')->references('id')->on('beneficiaries')->onDelete('cascade');  
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); 
  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
