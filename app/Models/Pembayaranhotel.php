<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaranhotel extends Model
{
    use HasFactory;

    protected $table = "pembayaranhotel" ;
    protected $fillable = ['reservasi_hotel_id', 'bank_tf', 'nama_rek', 'tanggal_transfer', 'bukti_transfer'];

    public function reservasi_hotel()
    {
        return $this->belongsTo(Reservasi_hotel::class);
    }

}
