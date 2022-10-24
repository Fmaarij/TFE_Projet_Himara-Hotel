<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Roomreview extends Mailable
{
    use Queueable, SerializesModels;
    // private $data = [];
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from( 'himarahotel@gmail.com')
        ->subject('Room Review' )
        ->view( 'emails.email-roomreview');
    }
}
