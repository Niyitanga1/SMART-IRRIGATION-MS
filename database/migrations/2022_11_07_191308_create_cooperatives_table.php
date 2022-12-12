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
        Schema::create('cooperatives', function (Blueprint $table) {
            $table->integerIncrements('id');
        
            $table->string('coop_name');
            $table->string('coop_district');
            $table->string('coop_sector');
            $table->string('coop_cell');
            $table->string('coop_village');
            $table->string('coop_tel');
            $table->string('coop_email');
            $table->string('coop_tin');
            
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
        Schema::dropIfExists('cooperatives');
    }
};
