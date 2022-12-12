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
        Schema::create('irrigation', function (Blueprint $table) {
            $table->id();
            $table->string('soil_moisture');
            $table->string('soil_temperature');
            $table->string('irr_district');
            $table->string('irr_sector');
            $table->string('irr_cell');
            $table->string('irr_village');
            $table->string('amount_of_water');
            $table->string('irr_coop');
            $table->string('time_happened');
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
        Schema::dropIfExists('irrigation');
    }
};
