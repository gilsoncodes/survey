<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Mail\AppointmentFormMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rule;
use Carbon\Carbon;
use App\Models\Appointment;
use App\Models\Hour;
use App\Rules\ValidateDate;
use App\Rules\ValidateTime;

class AppointmentForm extends Component
{
    public $name;
    public $business;
    public $email;
    public $phone;
    public $selectedMeeting = '1';
    public $address;
    public $dateShow;
    public $timeSelection;
    public $message;
    public $extra;
    public $errorName;
    public $errorBusiness;
    public $errorEmail;
    public $errorPhone;
    public $errorMeeting;
    public $errorAddress;
    public $errorDate;
    public $errorTime;
    public $errorMessage;
    public $date_id;
    public $test='123';

    protected $listeners = ['selectedDate', 'selectedTime'];


    public function selectedDate($passDate)
    {
        $this->dateShow = $passDate;
    }

    public function selectedTime($passTimeId)
    {
        $this->timeSelection = $passTimeId;
    }

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
    public function errorMeeting(){
      $this->errorMeeting = false;
    }
    public function errorAddress(){
      $this->errorAddress = false;
    }
    public function errorDate(){
      $this->errorDate = false;
    }
    public function errorTime(){
      $this->errorTime = false;
    }
    public function errorMessage(){
      $this->errorMessage = false;
    }
    public function submitForm(){
      //dd('name='.$this->business.' email='.$this->email.' phone='.$this->phone.' address='.$this->address.' msg='.$this->message.' date='.$this->dateShow.' time='.$this->timeSelection);
        $this->errorName = true;
        $this->errorBusiness = true;
        $this->errorEmail = true;
        $this->errorPhone = true;
        $this->errorMeeting = true;
        $this->errorAddress = true;
        $this->errorDate = true;
        $this->errorTime = true;
        $this->errorMessage = true;

      $appointment = $this->validate([
        'name' => 'required',
        'business' => 'required',
        'extra' => ['present', 'max:0'],
        'email' => 'email:rfc,dns',
        'phone' => 'required|min:10',
        'selectedMeeting' => ['required', Rule::in([0, 1])],
        'address' => Rule::requiredIf($this->selectedMeeting == '0'),
        'dateShow' => ['required', new ValidateDate], // I need to create a Rule to check if "l F jS, Y hh:mm XM" is available on db
        'timeSelection' => ['required', new ValidateTime($this->dateShow)],
        'message' => 'required',
      ]);

     if ($this->selectedMeeting == '0') {
        $newAddress = $appointment['address'];
      } else {
        $newAddress = '';
      }
     // dd($appointment);
      //$date4db = Carbon::createFromFormat('D M jS Y', $appointment['dateShow'])->format('Y-m-d');
      $date4db = Carbon::createFromFormat('l - F j, Y', $appointment['dateShow'])->format('Y-m-d');
      //dd($date4db);
      $getTimeRecord = Hour::findOrFail($this->timeSelection);
      //dd($getTimeRecord->timeSelected);
      $time4Mail = date('g:i A', strtotime($getTimeRecord->timeSelected));
      //dd($time4Mail);
       $appointmentDB = Appointment::create([
         'name' => $appointment['name'],
         'business' => $appointment['business'],
         'email' => $appointment['email'],
         'phone' => $appointment['phone'],
         'selectedMeeting' => $appointment['selectedMeeting'],
         'address' => $newAddress,
         'dateTime' => $date4db . " " . $getTimeRecord->timeSelected,
         'message' => $appointment['message'],
         'status' => 1,
         'reference' => 'reference_1234567890'
       ]);
       //dd($appointmentDB);
      Mail::to($appointment['email'])->send(new AppointmentFormMail($appointment, $time4Mail, $appointmentDB['reference']));
      $this->emit('successRequest');

      Hour::findOrFail($this->timeSelection)->delete();

      $this->resetForm();


    }

    private function resetForm(){
      $this->name = '';
      $this->business = '';
      $this->extra = '';
      $this->email = '';
      $this->phone = '';
      $this->selectedMeeting = '1';
      $this->address = '';
      $this->message = '';
      $this->emit('reset');

    }

    public function render()
    {
        return view('livewire.appointment-form');
    }
}
