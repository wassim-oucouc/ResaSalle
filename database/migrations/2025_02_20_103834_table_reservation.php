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
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
            $table->String('Type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
