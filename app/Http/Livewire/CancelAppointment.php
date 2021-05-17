<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Appointment;
use Carbon\Carbon;

class CancelAppointment extends Component
{
    public $appointment;
    public $hasAppointment;
    public $dayYear;
    public $month;
    public $day;
    public $dayName;
    public $dateENorPT;
    public $time;

    public function mount(){
      if (request()->has('a') && request()->has('r')) {
        $this->appointment = Appointment::where('id', request('a'))->where('reference', request('r'))->get();
        if ($this->appointment->count()) {
          $this->Year = Carbon::createFromFormat('Y-m-d H:i:s', $this->appointment[0]['dateTime'])->format('Y');
          $this->month = Carbon::createFromFormat('Y-m-d H:i:s', $this->appointment[0]['dateTime'])->format('F');
          $this->day = Carbon::createFromFormat('Y-m-d H:i:s', $this->appointment[0]['dateTime'])->format('j');
          $this->dayName = Carbon::createFromFormat('Y-m-d H:i:s', $this->appointment[0]['dateTime'])->format('l');
          if (app()->getLocale() == 'en') {
            $this->dateENorPT = trans($this->dayName) . ' - ' . trans($this->month) . ' ' . $this->day . ', ' . $this->Year;
          } else {
            $this->dateENorPT = trans($this->dayName) . ' - ' . $this->day . ' de ' . trans($this->month) . ' de ' . $this->Year;
          }

          $this->time = Carbon::createFromFormat('Y-m-d H:i:s', $this->appointment[0]['dateTime'])->format('h:i A');
            if ($this->appointment[0]['status']) {
              $this->hasAppointment = true;
            } else {
              $this->hasAppointment = false;
            }
        } else {
          abort(404);
        }
      } else {
        abort(404);
      }
    }
    public function cancelAppointment($id, $ref)
    {
      Appointment::where('id', $id)->where('reference', $ref)->update(['status' => 0]);
      $this->hasAppointment = false;
    }
    public function render()
    {
      return view('livewire.cancel-appointment');
    }
}
