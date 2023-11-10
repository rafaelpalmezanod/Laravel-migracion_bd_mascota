<?php

use App\Models\Raza;
use App\Models\Tipomascota;
use App\Models\User;
use Database\Factories\RazaFactory;
use Database\Factories\TipomascotaFactory;
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
        Schema::create('mascotas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->dateTime('FechaNacimiento')->nullable();
            $table->binary('foto');
            $table->foreignIdFor(User::class)->constrained();
            $table->foreignIdFor(Tipomascota::class)->constrained();
            $table->foreignIdFor(Raza::class)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mascotas');
    }
};
