<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Mail\AppointmentFormMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rule;
use Carbon\Carbon;
use App\Models\Appointment;

class AppointmentForm extends Component
{
    public $name;
    public $business;
    public $email;
    public $phone;
    public $selectedMeeting = '1';
    public $address;
    public $message;
    public $dateShow;
    public $selectedHour = '1';
    public $selectedMinute = '00';
    public $selectedAmPm = 'AM';
    public $extra;
    public $errorName;
    public $errorBusiness;
    public $errorEmail;
    public $errorPhone;
    public $errorMeeting;
    public $errorMessage;
    public $errorDate;
    public $errorHour;
    public $errorMinute;
    public $errorAmPm;

    public function errorName(){
      $this->errorName = false;
    }
    public function errorBusiness(){
      $this->errorBusiness = false;
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
    public function errorMeeting(){
      $this->errorMeeting = false;
    }
    public function errorDate(){
      $this->errorDate = false;
    }
    public function errorHour(){
      $this->errorHour = false;
    }
    public function errorMinute(){
      $this->errorMinute = false;
    }
    public function errorAmPm(){
      $this->errorAmPm = false;
    }
    public function submitForm(){

        $this->errorName = true;
        $this->errorBusiness = true;
        $this->errorEmail = true;
        $this->errorPhone = true;
        $this->errorMessage = true;
        $this->errorMeeting = true;
        $this->errorDate = true;
        $this->errorHour = true;
        $this->errorMinute = true;
        $this->errorAmPm = true;
        //dd(Carbon::hasFormat('Thursday 25th December 1975', 'l jS F Y'));
        //dd(Carbon::createFromFormat('l F jS, Y', 'Wednesday December 28th, 1977')->format('Y-m-d'));
        // dd(Carbon::createFromFormat('D M jS, Y', 'Wed Dec 28th, 1977')->format('Y-m-d'));
        //dd(Carbon::createFromFormat('Y-m-d', '1977-12-28')->format('D M jS, Y'));

        //dd(Carbon::createFromFormat('Y-m-d', '1977-12-28')->format('l F jS, Y'));
// dd($this->date);
      //dd($this->dateShow);
      $appointment = $this->validate([
        'name' => 'required',
        'business' => 'required',
        'extra' => ['present', 'max:0'],
        'email' => 'required|email',
        'phone' => 'required',
        'message' => 'required',
        'selectedMeeting' => 'required',
        'address' => Rule::requiredIf($this->selectedMeeting == '0'),
        'dateShow' => 'required', // I need to create a Rule to check if "l F jS, Y hh:mm XM" is available on db
        'selectedHour' => 'required',
        'selectedMinute' => 'required',
        'selectedAmPm' => 'required',
      ]);
      if ($this->selectedMeeting == '0') {
        $newAddress = $appointment['address'];
      } else {
        $newAddress = '';
      }

      //dd($appointment['dateShow']);
      //$date4db = Carbon::createFromFormat('D M jS Y', $appointment['dateShow'])->format('Y-m-d');
      $date4db = Carbon::createFromFormat('D M j, Y', $appointment['dateShow'])->format('Y-m-d');
      //dd($date4db);
      $hour4db = $appointment['selectedHour'];
      if($this->selectedAmPm == 'PM'){
        $hour4db = $hour4db + 12;
      }
      // do I need to adjust the leading zeros
      $time4db = $hour4db . ":" . $appointment['selectedMinute'] . ":00";
      //dd($time4db);
 //     10:22:40:54
       Appointment::create([
         'name' => $appointment['name'],
         'email' => $appointment['email'],
         'phone' => $appointment['phone'],
         'message' => $appointment['message'],
         'business' => $appointment['business'],
         'selectedMeeting' => $appointment['selectedMeeting'],
         'address' => $newAddress,
         'dateTime' => $date4db . " " . $time4db,
         'status' => 1,
         'reference' => 'reference_1234567890'
       ]);

      Mail::to($appointment['email'])->send(new AppointmentFormMail($appointment));
      $this->emit('successRequest');

      $this->resetForm();


    }

    private function resetForm(){
      $this->name = '';
      $this->business = '';
      $this->email = '';
      $this->phone = '';
      $this->message = '';
      $this->dateShow = '';
      $this->address = '';
      $this->extra = '';
      $this->selectedMeeting = '1';
      $this->selectedHour = '';
      $this->selectedMinute = '';
      $this->selectedAmPm = 'initAgain';
    }

    public function render()
    {
        return view('livewire.appointment-form');
    }
}
