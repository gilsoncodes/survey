<?php
namespace App\Http\Livewire;
use Livewire\Component;
use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use App\Rules\Recaptcha;
use Illuminate\Support\Facades\Mail;
class ContactForm extends Component{
    public $name;
    public $email;
    public $phone;
    public $message;
    public $grecaptcharesponse;
    public $successMessage;

     protected $listeners = ['validateRecaptcha' => 'submitForm'];

    public function submitForm($try){

      $this->grecaptcharesponse = $try;
      //ddd($this->grecaptcharesponse);
      //dd($this->name . "=" .$this->email . "=" .$this->phone . "=" .$this->message . "=>>" . $this->grecaptcharesponse);
      $this->successMessage = false;
      $contact = $this->validate([
        'name' => 'required',
        'email' => 'required|email',
        'phone' => 'required',
        'message' => 'required',
        'grecaptcharesponse' => ['required', new Recaptcha],
      ]);
      Mail::to($contact['email'])->send(new ContactFormMail($contact));
      $this->successMessage = "we received your message successfully.";
      $this->resetForm();
    }
    private function resetForm(){
      $this->name = '';
      $this->email = '';
      $this->phone = '';
      $this->message = '';
      $this->grecaptcharesponse = '';
    }
    public function render()
    {
        return view('livewire.contact-form');
    }
}
