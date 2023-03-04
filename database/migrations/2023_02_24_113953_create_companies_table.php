<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('companyName');
            $table->string('PersonName');
            $table->string('companyEmail');
            $table->string('personEmail');
            $table->string('photo')->nullable();
            $table->integer('mobPhone');
            $table->integer('companyPhone');
            $table->integer('workPhone');
            $table->integer('city_id');
            $table->integer('country_id');
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
        Schema::dropIfExists('companies');
    }
}
