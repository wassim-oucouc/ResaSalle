<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('Réservation', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('Description');
            $table->integer('salle_id');
            $table->integer('client_id');
            $table->foreign('salle_id')->references('id')->on('salle');
            $table->foreign('client_id')->references('id')->on('utilisateur');
            $table->date('reservation_date');
            $table->time('reservation_time');
            $table->timestamp('Date_Creation');
            $table->String('Type');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Réservation');
    }
};
