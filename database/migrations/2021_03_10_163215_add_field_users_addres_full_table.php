<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldUsersAddresFullTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('id_estate')->after('Birthdate');
            $table->unsignedBigInteger('id_municipality')->after('id_estate');
            $table->unsignedBigInteger('id_parishe')->after('id_municipality');
            $table->foreign('id_estate')
                ->references('id')->on('states')
                ->onDelete('no action')
                ->onUpdate('no action');
            $table->foreign('id_municipality')
                ->references('id')->on('municipalitys')
                ->onDelete('no action')
                ->onUpdate('no action');
            $table->foreign('id_parishe')
                ->references('id')->on('parishes')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $table->dropColumn('id_estate');
        $table->dropColumn('id_municipality');
        $table->dropColumn('id_parishes');
    }
}
