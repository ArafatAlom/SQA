<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_makes', function (Blueprint $table) {
            $table->id();

            $table->string('gmail');
            $table->string('private_or_batch');
            $table->string('subject');
            $table->string('no_of_student');
            $table->string('address');
            $table->string('phone_no');
            $table->string('teacher_id');
            $table->string('opinion');
            
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
        Schema::dropIfExists('requests');
    }
}
