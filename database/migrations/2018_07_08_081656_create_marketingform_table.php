<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use app\marketingform;

class CreateMarketingformTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marketingform', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Organization_Name');
            $table->string('Country_Name');
            $table->string('Other_Country');
            $table->string('State');
            $table->string('city');
            $table->string('Address');
            $table->string('Email');
            $table->string('industry');
            $table->string('representative');
            $table->string('followup');
            $table->string('note');
            $table->string('Response');
            $table->string('value');
            $table->integer('contactno');
            $table->string('duties');
            $table->string('clienttype');
            $table->string('dutiesotherfield');
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
        Schema::dropIfExists('marketingform');
    }
}
