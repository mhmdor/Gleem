<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('fName');
            $table->string('sName');
            $table->string('lName');
            $table->string('gender');
            $table->date('dBirth');
            $table->integer('EsYear');
            $table->integer('EsMonth');
            $table->string('religion');
            $table->integer('nationality_id');
            $table->integer('idNumber');
            $table->string('email');
            $table->integer('hPhone')->nullable();
            $table->integer('wPhone')->nullable();
            $table->integer('mobile');
            $table->integer('city_id');
            $table->integer('country_id');
            $table->integer('company_id')->nullable();
            $table->string('region');
            $table->longText('address');
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
        Schema::dropIfExists('clients');
    }
}
