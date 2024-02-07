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
        Schema::create('reservasis', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('jumlah_tiket');
            $table->string('tanggal_datang');
            $table->string('harga_total');
            $table->string('no_telp');
            $table->string('email');
            $table->enum('status', ['aktif', 'tidak aktif']);
            $table->timestamps(); // Tambahkan kolom created_at dan updated_at
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservasis');
    }
};
