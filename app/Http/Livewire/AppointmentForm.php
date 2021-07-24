<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Mail\AppointmentMarkdown;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rule;
use Carbon\Carbon;
use App\Models\Appointment;
use App\Models\Hour;
use App\Models\Day;
use App\Rules\ValidateDate;
use App\Rules\ValidateTime;
use Illuminate\Support\Str;

class AppointmentForm extends Component
{
    public $name;
    public $business;
    public $email;
    public $email2;
    public $phone;
    public $selectedMeeting = '1';
    public $address;
    public $dateShow;
    public $dateHide;
    public $timeSelection;
    public $message;
    public $extra;
    public $errorName;
    public $errorBusiness;
    public $errorEmail;
    public $errorPhone;
    public $errorMeeting;
    public $errorDate;
    public $errorTime;
    public $errorMessage;
    public $date_id;
    public $test='123';
    public $hasDates = false;

    protected $listeners = ['selectedHide', 'selectedShow', 'selectedTime']; //, 'hasAvailability'];

    public function mount(){
      $setupDays = Day::where( 'daySelected', '<', date('Y-m-d', strtotime("+60 days")))
                    ->where( 'daySelected', '>', date('Y-m-d', strtotime("-1 days")))
                    ->orderBy('daySelected')
                    ->get();
       if ($setupDays->count() > 0) {
         $this->hasDates = true;
       }
    }

    // public function hasAvailability($passAvailability){
    //   $this->hasDates = $passAvailability;
    // }
    public function getNameiconProperty()
    {
        return ($this->name == '' ? '#D1D5DB' : '#000000');
    }
    public function getBusinessiconProperty()
    {
        return ($this->business == '' ? '#D1D5DB' : '#000000');
    }
    public function getEmailiconProperty()
    {
        return ($this->email == '' ? '#D1D5DB' : '#000000');
    }
    public function getPhoneiconProperty()
    {
        return ($this->phone == '' ? '#D1D5DB' : '#000000');
    }
    public function getAddressiconProperty()
    {
        return ($this->address == '' ? '#D1D5DB' : '#000000');
    }
    public function getTexticonProperty()
    {
        return ($this->message == '' ? '#D1D5DB' : '#000000');
    }
    public function selectedShow($passShow)
    {
        $this->dateShow = $passShow;
    }

    public function selectedHide($passHide)
    {
        $this->dateHide = $passHide;
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
        'dateHide' => ['required', new ValidateDate], // I need to create a Rule to check if "l F jS, Y hh:mm XM" is available on db
        'timeSelection' => ['required', new ValidateTime($this->dateHide)],
        'message' => '',
      ]);

     if ($this->selectedMeeting == '0') {
        $newAddress = $appointment['address'];
      } else {
        $newAddress = '';
      }

     // dd($appointment);
      //$date4db = Carbon::createFromFormat('D M jS Y', $appointment['dateShow'])->format('Y-m-d');
      $date4db = Carbon::createFromFormat('l - F j, Y', $this->dateHide)->format('Y-m-d');
      //dd($date4db);
      $getTimeRecord = Hour::findOrFail($this->timeSelection);
      //dd($getTimeRecord->timeSelected);
      $time4Mail = date('g:i A', strtotime($getTimeRecord->timeSelected));
      //dd($time4Mail);
      $nowSeconds = Carbon::now()->timestamp;
      $randomChars = Str::random(16);
      $token = $nowSeconds . $randomChars;
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
         'reference' => $token
       ]);
       $this->email2 = $this->email;
       //dd($appointmentDB);
      Mail::to($appointment['email'])->send(new AppointmentMarkdown($appointmentDB, $time4Mail, $this->dateShow));

      Mail::to('restaurant@garsolutions.com')->send(new AppointmentMarkdown($appointmentDB, $time4Mail, $this->dateShow));


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
