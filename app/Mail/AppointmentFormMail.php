<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AppointmentFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $appointment;
    public $timeMail;
    public $linkRef;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($appointment, $time4Mail, $reference)
    {
        $this->appointment = $appointment;
        $this->timeMail = $time4Mail;
        $this->linkRef = $reference;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
      return $this->view('emails.appointment-form',[
        'appointment' => $this->appointment,
        'timeMail' => $this->timeMail,
        'linkRef' => $this->linkRef,
      ]);
    }
}
