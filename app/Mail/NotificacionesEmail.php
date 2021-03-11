<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NotificacionesEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $firstname;
    public $lastname;
    public $asunto;
    public $mensaje;
    public $emailSend;
    public $nameSend;
    public $lastnameSend;


    public function __construct($firstname, $lastname, $asunto, $mensaje, $emailSend, $nameSend, $lastnameSend)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->asunto = $asunto;
        $this->mensaje = $mensaje;
        $this->emailSend = $emailSend;
        $this->nameSend = $nameSend;
        $this->lastnameSend = $lastnameSend;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.email-notificaciones')->with('name', 'jose')
        ->from($this->emailSend, $this->nameSend . $this->nameSend = $this->lastnameSend)
        ->subject($this->asunto);
    }
}
