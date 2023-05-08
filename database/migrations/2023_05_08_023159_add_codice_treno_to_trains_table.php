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
        // aggiungiamo un nuovo campo
        Schema::table('trains', function (Blueprint $table) {
            $table->string('codice_treno', 100)->after('orario_arrivo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('trains', function (Blueprint $table) {
            // con dropcolumn rimuoviamo
            $table->dropColumn('codice_treno');
        });
    }
};
