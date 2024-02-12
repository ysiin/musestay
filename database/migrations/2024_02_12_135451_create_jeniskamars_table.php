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
        Schema::create('jeniskamar', function (Blueprint $table) {
            $table->id();
            $table->foreignId('hotel_id')->constrained('hotel');
            $table->string('n_jenis_kamar');
            $table->string('tipe_kasur');
            $table->string('jumlah_kasur');
            $table->integer('max_orang');
            $table->string('harga');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jeniskamar');
    }
};
