<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;
use App\Models\Contact;

class ContactForm extends Component
{

    public $name;
    public $extra;
    public $email;
    public $phone;
    public $message;
    public $errorName;
    public $errorEmail;
    public $errorPhone;
    public $errorMessage;
    // public $successMessage;
    public function errorName(){
      $this->errorName = false;
    }
    public function errorEmail(){
      $this->errorEmail = false;
    }
    public function errorPhone(){
      $this->errorPhone = false;
    }
    public function errorMessage(){
      $this->errorMessage = false;
    }
    public function submitForm(){
      // $this->successMessage = false;
        $this->errorName = true;
        $this->errorEmail = true;
        $this->errorPhone = true;
        $this->errorMessage = true;

      $contact = $this->validate([
        'name' => 'required',
        'extra' => ['present', 'max:0'],
        'email' => 'required|email',
        'phone' => 'required',
        'message' => 'required',
      ]);

      Contact::create([
    		'name' => $contact['name'],
    		'email' => $contact['email'],
    		'phone' => $contact['phone'],
        'message' => $contact['message']
    	]);

      Mail::to($contact['email'])
            //->bcc('restaurant@garsolutions.com')
            ->send(new ContactFormMail($contact));
      Mail::to('restaurant@garsolutions.com')
            ->send(new ContactFormMail($contact));
      $this->emit('successMessage');
      // $this->successMessage = "we received your message successfully.";

      $this->resetForm();


    }

    private function resetForm(){
      $this->name = '';
      $this->email = '';
      $this->phone = '';
      $this->message = '';
      $this->extra = '';
    }

    public function render()
    {

        return view('livewire.contact-form');
    }
}
