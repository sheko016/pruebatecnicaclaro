<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDestinationsemailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destinationsemails', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_email');
            $table->unsignedBigInteger('id_destinatario');
            $table->timestamps();

            $table->foreign('id_email')
                ->references('id')->on('emails');

            $table->foreign('id_destinatario')
                ->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('destinationsemails');
    }
}
