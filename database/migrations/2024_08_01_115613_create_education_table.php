<?php

use App\Models\Info;
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
        Schema::create('educations', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->enum('formation', ['bachelier','secondaire', 'master', 'doctorat', 'licence', 'bts'])->default('bachelier');
            $table->string('titre_formation');
            $table->string('ecole');
            $table->string('lieu_formation');
            $table->date('date_debut_formation');
            $table->date('date_fin_formation');
            $table->foreignIdFor(Info::class)->constrained()->cascadeOnDelete();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('educations');
    }
};
