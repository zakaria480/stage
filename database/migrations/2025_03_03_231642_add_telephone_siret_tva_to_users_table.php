<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('telephone')->after('email')->nullable(); // Numéro de téléphone, optionnel
            $table->string('siret')->after('telephone')->nullable(); // Numéro SIRET, optionnel
            $table->string('tva')->after('siret')->nullable();       // Numéro TVA, optionnel
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['telephone', 'siret', 'tva']);
        });
    }
};