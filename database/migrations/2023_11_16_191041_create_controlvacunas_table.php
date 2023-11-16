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
        Schema::create('controlvacunas', function (Blueprint $table) {
            $table ->unsignedInteger('mascota_id');
            $table->unsignedInteger('vacuna_id');
            $table->date('fecha');
            $table->timestamps();

            $table->primary(['mascota_id','vacuna_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('controlvacunas');
    }
};
