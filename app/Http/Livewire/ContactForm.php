<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

class ContactForm extends Component
{

    public $name;
    public $email;
    public $phone;
    public $message;
    public $successMessage;

    public function submitForm(){
      $this->successMessage = false;

      $contact = $this->validate([
        'name' => 'required',
        'email' => 'required|email',
        'phone' => 'required',
        'message' => 'required',
      ]);

      // $contact['name'] = $this->name;
      // $contact['email'] = $this->email;
      // $contact['phone'] = $this->phone;
      // $contact['message'] = $this->message;

      // sleep(1);
      
      Mail::to($contact['email'])->send(new ContactFormMail($contact));

      $this->successMessage = "we received your message successfully.";

      $this->resetForm();

      //session()->flash('message', 'Post successfully updated.');

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
