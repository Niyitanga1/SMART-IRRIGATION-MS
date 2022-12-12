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
        Schema::create('agronomist', function (Blueprint $table) {
           $table->bigIncrements('id');
            $table->string('ag_id');
            $table->string('ag_fname');
            $table->string('ag_lname');
            $table->string('ag_district');
            $table->string('ag_sector');
            $table->string('ag_cell');

            $table->string('ag_village');
            $table->string('ag_tel');
            $table->string('ag_email');
            $table->string('ag_password');
            $table->unsignedBigInteger('managers_id');
            $table->integer('cooperatives_id')->unsigned();
            $table->timestamps();
            $table->foreign('managers_id')->references('id')->on('managers')->onDelete('cascade');
           $table->foreign('cooperatives_id')->references('id')->on('cooperatives')->onDelete('cascade');
            
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agronomist');
    }
};
