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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();

            // creo le nuove tabelle
            $table->string('azienda', 100);
            $table->string('stazione_partenza', 80);
            $table->string('stazione_arrivo', 80);
            $table->dateTime('orario_partenza');
            $table->dateTime('orario_arrivo');
            $table->unsignedTinyInteger('n_carrozza');
            $table->boolean('in_orario')->default(1);
            $table->boolean('cancellato')->default(0);
            
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
        Schema::dropIfExists('trains');
    }
};
