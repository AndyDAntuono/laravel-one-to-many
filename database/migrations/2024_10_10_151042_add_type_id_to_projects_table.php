<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTypeIdToProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('projects', function (Blueprint $table) {
            if (!Schema::hasColumn('projects', 'type_id')) {
                $table->unsignedBigInteger('type_id')->nullable(); // Aggiunge la colonna solo se non esiste
            }
        
            // Crea la chiave esterna solo se la colonna è stata aggiunta
            $table->foreign('type_id')->references('id')->on('types')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('projects', function (Blueprint $table) {
            // Rimuovi la chiave esterna e la colonna quando annulli la migration
            $table->dropForeign(['type_id']);
            $table->dropColumn('type_id');
        });
    }
}
