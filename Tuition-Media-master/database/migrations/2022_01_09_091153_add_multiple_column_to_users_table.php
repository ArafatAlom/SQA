<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMultipleColumnToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->string('user_type')->after('name');
            $table->string('gender')->after('user_type');
            $table->string('institution')->after('gender');
            $table->string('contact_no')->after('institution');
            $table->string('address')->after('contact_no');

            
          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->drop(['user_type','gender','institution','contact_no','address']);
        });
    }
}
