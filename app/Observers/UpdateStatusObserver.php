<?php

namespace App\Observers;

use Illuminate\Support\Facades\Mail;
use App\Models\Reservasi;
use App\Notifications\ReservationSuccessNotification;

class UpdateStatusObserver
{
    public function updateStatus(string $id)
    {
        $data = Reservasi::where('id', $id)->firstOrFail();
    
        $data->update(['status' => 'Success']);
    
        // Kirim notifikasi email
        Mail::to($data->email)->send(new ReservationSuccessNotification($data));
    }
}
