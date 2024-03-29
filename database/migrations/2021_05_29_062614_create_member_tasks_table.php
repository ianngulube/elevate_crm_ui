<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemberTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member_tasks', function (Blueprint $table) {         
            $table->id();
            $table->string('reference')->default('');
            $table-> string('name');// subject  
            $table-> mediumText('description');            
            $table-> string('type');
            $table-> date('dueDate');
            $table-> string('status')->default('NEW');
            $table-> string('priority');               
            $table->unsignedBigInteger('user_id');    
            $table->unsignedBigInteger('assignedTo');    
            $table->unsignedBigInteger('member_id');   
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); 
            $table->foreign('assignedTo')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('member_tasks');
    }
}
