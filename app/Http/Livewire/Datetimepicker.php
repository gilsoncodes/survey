<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Day;
use App\Models\Hour;
use Carbon\Carbon;

class Datetimepicker extends Component
{
    public $dateShow;
    //hard code for now
    public $rangeDate=60;
    public $timeShow;
    public $minuteShow;
    public $totalDays;
    public $dayOfWeekRef;
    public $dayRef;
    public $monthRef;
    public $yearRef;
    public $month;
    public $year;
    public $availableDays=[];
    public $dateError;
    public $monthArray = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
    public $monthNumber;
    public $calendar = false;
    public $hourOption;
    public $minuteOption;

    public function mount(){

      $setupDays = Day::where( 'daySelected', '<', date('Y-m-d', strtotime("+" . $this->rangeDate ." days")))
                    ->where( 'daySelected', '>', date('Y-m-d', strtotime("-1 days")))
                    ->orderBy('daySelected')
                    ->get();//get the days from today to 60days later, today can be on the current month or not

      $dbDate2human = Carbon::createFromFormat('Y-m-d', $setupDays[0]['daySelected'])->format('D M j, Y');
      $this->timeShow =  $setupDays[0]->hours->sortBy('hourSelected');
      $this->minuteShow = $this->timeShow->first()->minutes->sortBy('minuteSelected');
      $this->hourOption = $this->timeShow->first()['hourSelected'];
      $this->minuteOption = $this->minuteShow->first()["minuteSelected"];
      if ($this->timeShow->first()['hourSelected'] > 12) {
        $dbTime2AmPm = $this->hourOption - 12 . ":" . $this->minuteOption . " PM";
      } else {
        $dbTime2AmPm = $this->hourOption . ":" . $this->minuteOption . " AM";
      }

      $dbDate2array = explode("-", $setupDays[0]['daySelected']);
      $this->dayRef = $dbDate2array[2];
      $this->monthRef = $dbDate2array[1];
      $this->yearRef = $dbDate2array[0];
      $this->month = $dbDate2array[1];
      $this->year = $dbDate2array[0];

      $this->totalDays = cal_days_in_month(CAL_GREGORIAN, $dbDate2array[1], $dbDate2array[0]);

      $unixTimestamp = strtotime($dbDate2array[0]."-".$dbDate2array[1]."-1");
      $this->dayOfWeekRef = date("w", $unixTimestamp);
      $this->monthNumber = date("n", $unixTimestamp);

       $this->dateShow = $dbDate2human . " " . $dbTime2AmPm; //"Fri April 23, 2021";

       foreach ($setupDays as $setupDay) {
         $iteractionDay = explode("-", $setupDay['daySelected']);
         if ($iteractionDay[1] == $this->month){
           $this->availableDays[]= $iteractionDay[2];
         }
       }

    }

    public function daySelected( $day ){

      $dayRecord = Day::firstWhere('daySelected', $this->year . "-". $this->month . "-" . $day);
       if ($dayRecord) {
             $this->dayRef = $day;
             $this->monthRef = $this->month;
             $this->yearRef = $this->year;
             $dbDate2human = Carbon::createFromFormat('Y-m-d', $this->year ."-". $this->month ."-". $day)->format('D M j, Y');
             $this->calendar = false;
            $this->timeShow = $dayRecord->hours->sortBy('hourSelected');

            $this->minuteShow = $this->timeShow->first()->minutes->sortBy('minuteSelected');
            $this->hourOption = $this->timeShow->first()['hourSelected'];
            $this->minuteOption = $this->minuteShow->first()["minuteSelected"];
            if ($this->timeShow->first()['hourSelected'] > 12) {
              $dbTime2AmPm = $this->hourOption - 12 . ":" . $this->minuteOption . " PM";
            } else {
              $dbTime2AmPm = $this->hourOption . ":" . $this->minuteOption . " AM";
            }
            // $dbDate2array = explode("-", $dayRecord['daySelected']);
            // $this->totalDays = cal_days_in_month(CAL_GREGORIAN, $dbDate2array[1], $dbDate2array[0]);
            $this->dateShow = $dbDate2human . " " . $dbTime2AmPm;
            //dd($this->timeShow);
        } else {
            $this->dateError = $dbDate2human . " is not available. Please select another date.";
        }
    }

    public function hourChange($value)
    {
        $this->minuteShow = Hour::where('id', $value)->first()->minutes->sortBy('minuteSelected');

    }

    public function render()
    {
      return view('livewire.datetimepicker');
    }
}
