<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class HicokoEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('sender@hicokostudio.com')
                    ->subject('Tesing Email')
                    ->view('emailku')
                    ->with([
                        'nama' => 'Kevin Thanos',
                        'website' => 'Kevinthanos.com'
                    ]);
    }
}
