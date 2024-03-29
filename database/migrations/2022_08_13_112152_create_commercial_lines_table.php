<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommercialLinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commercial_lines', function (Blueprint $table) {
            $table->id();
            $table->date('effective_date_appointment')->nullable();
            $table->string('name_of_stokfela')->nullable();
            $table->string('current_insurance')->nullable();
            $table->string('name_of_business')->nullable();
            $table->string('registration_number')->nullable();
            $table->string('vat_no')->nullable();
            $table->string('contact_person')->nullable();
            $table->string('name_of_signatory')->nullable();
            $table->string('contact_number')->nullable();         
            $table->text('signature_file');
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
        Schema::dropIfExists('commercial_lines');
    }
}
