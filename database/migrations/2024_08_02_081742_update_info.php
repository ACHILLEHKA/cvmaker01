<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateInfoIdNullableInLanguesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('langues', function (Blueprint $table) {
            $table->foreign('info_id')->references('id')->on('infos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('langues', function (Blueprint $table) {
            $table->dropForeign(['info_id']);
        });
    }
}
