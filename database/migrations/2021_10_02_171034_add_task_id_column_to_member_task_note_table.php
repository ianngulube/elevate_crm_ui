<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTaskIdColumnToMemberTaskNoteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('member_task_notes', function (Blueprint $table) {
            //
            $table->unsignedBigInteger('task_id');
            $table->foreign('task_id')->references('id')->on('member_tasks')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('member_task_notes', function (Blueprint $table) {
            //
        });
    }
}
