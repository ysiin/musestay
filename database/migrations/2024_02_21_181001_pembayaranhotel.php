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
        Schema::create('pembayaranhotel', function (Blueprint $table) {
            $table->id();
            $table->foreignId('reservasi_hotel_id')->constrained('reservasi_hotel');
            $table->string('nama_rek');
            $table->string('bank_tf');
            $table->date('tanggal_transfer');
            $table->string('bukti_transfer');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayaranhotel');

    }
};
