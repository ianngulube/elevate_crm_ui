<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNameColumnToOpportunitySubCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('opportunity_sub_categories', function (Blueprint $table) {
            //
            $table->string('name')->nullable()->default('');
            $table->text('description')->nullable();
            $table->integer('opportunity_category_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('opportunity_sub_categories', function (Blueprint $table) {
            //
        });
    }
}
