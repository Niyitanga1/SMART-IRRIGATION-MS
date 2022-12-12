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
        Schema::create('managers', function (Blueprint $table) {
            $table->id();
            $table->string('man_id');
            $table->string('man_fname');
            $table->string('man_lname');
            $table->string('man_cooperative');
            $table->string('man_district');
            $table->string('man_sector');
            $table->string('man_cell');
            $table->string('man_village');
            $table->string('man_tel');
            $table->string('man_email');
            $table->string('man_password');
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
        Schema::dropIfExists('managers');
    }
};
