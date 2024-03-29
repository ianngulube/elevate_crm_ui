<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalLinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_lines', function (Blueprint $table) {
            $table->id();
            $table->date('effective_date_appointment')->nullable();
            $table->string('name_of_stokfela')->nullable();
            $table->string('current_insurance')->nullable();
            $table->string('contact_person_1')->nullable();
            $table->string('id_number_1')->nullable();
            $table->string('contact_person_2')->nullable();
            $table->string('id_number_2')->nullable();
            $table->string('name_of_signatory');
            $table->string('contact_number');
    
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
        Schema::dropIfExists('personal_lines');
    }
}
