<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use App\Mail\ContactMarkdown;
use Illuminate\Support\Facades\Mail;
use App\Models\Contact;

class ContactForm extends Component
{
    public $name;
    public $extra;
    public $email;
    public $email2;
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
    public function getNameiconProperty()
    {
        return ($this->name == '' ? '#D1D5DB' : '#000000');
    }
    public function getEmailiconProperty()
    {
        return ($this->email == '' ? '#D1D5DB' : '#000000');
    }
    public function getPhoneiconProperty()
    {
        return ($this->phone == '' ? '#D1D5DB' : '#000000');
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
        'email' => ['required', 'email:rfc,dns'],
        'phone' => 'required|min:10',
        'message'  => 'required',
      ]);

      Contact::create([
    		'name' => $contact['name'],
    		'email' => $contact['email'],
    		'phone' => $contact['phone'],
        'message' => $contact['message']
    	]);
      $this->email2 = $this->email;
      Mail::to($contact['email'])
            ->send(new ContactMarkdown($contact));
      Mail::to('restaurant@garsolutions.com')
            ->send(new ContactMarkdown($contact));
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
