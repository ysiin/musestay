<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservasi extends Model
{
    use HasFactory;
    protected $table = "reservasis" ;
    protected $fillable = [
        'nama',
        'jumlah_tiket',
        'tanggal_datang',
        'harga_total',
        'no_telp',
        'email',
        'status',
    ];

}
