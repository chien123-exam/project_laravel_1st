<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class MailCart extends Mailable
{
    use Queueable, SerializesModels;

    public function build()
    {
        return $this->subject('Xác nhận đơn hàng thành công')->view('emails.orderSuccess');
    }
}
