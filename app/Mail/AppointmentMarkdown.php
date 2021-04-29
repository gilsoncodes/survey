<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AppointmentMarkdown extends Mailable
{
    use Queueable, SerializesModels;

    public $appointment;
    public $timeMail;
    public $dateMail;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($appointment, $timeMail, $dateMail)
    {
        $this->appointment = $appointment;
        $this->timeMail = $timeMail;
        $this->dateMail = $dateMail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('contact@garsolutions.com')
                    ->subject('GAR Solutions has received your appointment request.')
                    ->markdown('emails.appointment-markdown',[
                      'appointment' => $this->appointment,
                      'timeMail' => $this->timeMail,
                      'dateMail' => $this->dateMail,
                    ]);
    }
}
