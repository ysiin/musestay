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
        Schema::create('reservasi_hotel', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kamar_id')->constrained('kamar');
            $table->string('nama_tamu');
            $table->string('no_telp');
            $table->string('tanggal_booking');
            $table->string('tanggal_checkin');
            $table->string('tanggal_checkout');
            $table->enum('status', ['Pending', 'Success'])->default('Pending');
            $table->foreignId('created_by')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservasi_hotels');
    }
};
