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
        Schema::create('devices', function (Blueprint $table) {
            $table->id();
            $table->string('dev_id');
            $table->string('dev_name');
            $table->string('dev_holder');
            $table->string('dev_district');
            $table->string('dev_sector');
            $table->string('dev_cell');
            $table->string('dev_village');
            $table->integer('cooperatives_id')->unsigned();


            $table->timestamps();
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
        Schema::dropIfExists('devices');
    }
};
