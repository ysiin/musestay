<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\Reservasi;

class ReservationSuccessNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $reservasi;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Reservasi $reservasi)
    {
        $this->reservasi = $reservasi;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Notifikasi Reservasi Berhasil')
                    ->view('emails.reservation_success'); // Pastikan Anda telah membuat view email dengan nama 'reservation_success.blade.php'
    }
}
