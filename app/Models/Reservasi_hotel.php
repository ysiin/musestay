<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservasi_hotel extends Model
{
    use HasFactory;
    protected $table = "reservasi_hotel";
    protected $fillable = [
        'kamar_id',
        'nama_tamu',
        'no_telp',
        'tanggal_booking',
        'tanggal_checkin',
        'tanggal_checkout',
        'status',
        'created_by',
    ];

    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function kamar()
    {
        return $this->belongsTo(Kamar::class);
    }
}
