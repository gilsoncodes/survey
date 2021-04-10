<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;

class ContactForm extends Component
{

    public $name;
    public $email;
    public $phone;
    public $message;
    public $successMessage;
    public $error_recaptha;
    public $captcha = 0;
    public $timeToken;
    public function updatedCaptcha($token)
    {
      $this->timeToken =  Carbon::now() . " " .  substr($token, -10);
        $response = Http::post('https://www.google.com/recaptcha/api/siteverify?secret=' . config('services.recaptcha.secret') . '&response=' . $token);
       // dd($response->json()['score']);
        $this->captcha = $response->json()['score'];
        $this->error_recaptha = false;
        if (!$this->captcha > .3) {
          $this->submitForm();
        } else {
          $this->error_recaptha = Carbon::now() . " " . $this->captcha . "Google thinks you are a bot, please refresh and try again." . substr($token, -10);
        }
    }

    public function submitForm(){
      $this->successMessage = false;

      $contact = $this->validate([
        'name' => 'required',
        'email' => 'required|email',
        'phone' => 'required',
        'message' => 'required',
      ]);


      Mail::to($contact['email'])->send(new ContactFormMail($contact));

      $this->successMessage =  Carbon::now() . " " . $this->captcha . "we received your message successfully." ;

      $this->resetForm();



    }

    private function resetForm(){
      $this->name = '';
      $this->email = '';
      $this->phone = '';
      $this->message = '';
    }

    public function render()
    {

        return view('livewire.contact-form');
    }
}
