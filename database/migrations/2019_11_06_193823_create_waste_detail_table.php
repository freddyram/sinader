<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWasteDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('waste_details', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->integer('declaration_id')->references('id')->on('declaration');

            $table->string('waste');

            $table->string('company');
            $table->string('establishment');
            $table->string('processing');
            $table->string('gestion');
            $table->string('recolection');
            
            $table->string('pais')->nullable();
            $table->string('empresa')->nullable();
            $table->string('contacto')->nullable();
            $table->string('email')->nullable();

            
            $table->double('quantity', 12 , 4)->nullable();
            $table->integer('waste_id')->references('id')->on('ler_waste');
            $table->integer('company_id')->references('id')->on('companies');
            $table->integer('establishment_id')->references('id')->on('establishment');

            $table->integer('manage_id')->references('id')->on('manage_types');
            $table->integer('process_id')->references('id')->on('process_types');
            $table->integer('unit_id')->references('id')->on('units');
            $table->integer('recolection_id')->references('id')->on('recolection_types');


            $table->integer('carrier_id')->references('id')->on('carriers');
            $table->string('carrier_name');
            $table->integer('plate')->references('plate')->on('vehicle');


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
        Schema::dropIfExists('waste_details');
    }
}
