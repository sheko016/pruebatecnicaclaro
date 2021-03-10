<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AdFieldUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('firstname', 100)->after('email');
            $table->string('lastname', 100)->after('firstname');
            $table->string('telephone', 14)->after('lastname');
            $table->string('identification_document', 11)->after('telephone')->unique();
            $table->date('birthdate')->after('Identification_document');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('firstname', 'lastname', 'telephone', 'Identification_document', 'Birthdate');
        });
    }
}
