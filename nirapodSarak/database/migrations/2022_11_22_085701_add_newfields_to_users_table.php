<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            
            // Personal Info
            $table->string('phone');
            // $table->string('name');
            $table->string('nid');
            $table->string('gender');
            $table->string('birthDate');
            $table->string('bloodGroup');
            // $table->string('password');
            $table->string('photo');

            // Vehicle Info
            $table->string('city');
            $table->string('vehicle');
            $table->string('drivingLicense');
            
            // Vehicle Info
            $table->string('cityName');
            $table->string('category');
            $table->string('number');
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
        });
    }
};
