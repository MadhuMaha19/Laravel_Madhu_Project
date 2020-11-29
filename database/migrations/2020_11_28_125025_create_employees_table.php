<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->boolean('id_format');
            $table->string('organisation_name');
            $table->string('organisation_address');
            $table->string('user_name');
            $table->string('designation');
            $table->binary('user_image');
            $table->string('address');
            $table->date('DOB');
            $table->string('blood_group');
            $table->string('phone_number')->unique();
            $table->string('email_id')->unique();
            $table->binary('bg_image');
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
        Schema::dropIfExists('employees');
    }
}
