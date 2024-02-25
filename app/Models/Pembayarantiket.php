<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayarantiket extends Model
{
    use HasFactory;
    protected $table = "pembayarantiket" ;
    protected $fillable = ['reservasi_id', 'bank_tf', 'nama_rek', 'tanggal_transfer', 'bukti_transfer', 'created_by'];

    public function reservasi()
    {
        return $this->belongsTo(Reservasi::class);
    }

    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
