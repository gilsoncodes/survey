<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Day;
use App\Models\Hour;
use Carbon\Carbon;

class Datetimepicker extends Component
{
    public $dateShow;
    public $timeSelection;
    //hard code for now
    public $rangeDate=60;
    public $timeShow;
    public $totalDays;
    public $dayOfWeekRef;
    public $dayRef;
    public $monthRef;
    public $yearRef;
    public $month;
    public $year;
    public $availableDays=[];
    public $dateError = false;
    public $monthArray = [ "1" => "January", "2" => "February", "3" => "March", "4" => "April", "5" => "May", "6" => "June",
                           "7" => "July", "8" => "August", "9" => "September", "10" => "October", "11" => "November", "12" => "December"
                         ];
    public $monthNumber;
    public $calendar = false;
    public $hourOption;
    public $minuteOption;
    public $hasNextMonth = true;
    public $hasPrevMonth = false;

    protected $listeners = ['reset' => 'dateTimeReset'];


    public function dateTimeReset()
    {
      $this->dateShow = 'Select Date';
      $this->timeSelection = 0;
      $this->yearRef = 2020; // to make the date before today -> for not selecting a day on the calendar


    }

    public function mount(){
      $setupDays = Day::where( 'daySelected', '<', date('Y-m-d', strtotime("+" . $this->rangeDate ." days")))
                    ->where( 'daySelected', '>', date('Y-m-d', strtotime("-1 days")))
                    ->orderBy('daySelected')
                    ->get();//get the days from today to 60days later, today can be on the current month or not

      $dbDate2human = Carbon::createFromFormat('Y-m-d', $setupDays[0]['daySelected'])->format('l - F j, Y');
      $this->timeShow =  $setupDays[0]->hours->sortBy('timeSelected');
      $this->hourOption = $this->timeShow->first()['timeSelected'];

      $dbDate2array = explode("-", $setupDays[0]['daySelected']);
      $this->dayRef = 1;
      $this->monthRef = 1;
      $this->yearRef = 2020; // to make the date before today -> for not selecting a day on the calendar
      $this->month = $dbDate2array[1];
      $this->year = $dbDate2array[0];

      $this->totalDays = cal_days_in_month(CAL_GREGORIAN, $dbDate2array[1], $dbDate2array[0]);

      $unixTimestamp = strtotime($dbDate2array[0]."-".$dbDate2array[1]."-1");
      $this->dayOfWeekRef = date("w", $unixTimestamp);
      $this->monthNumber = date("n", $unixTimestamp);

       $this->dateShow = "Select Date";//$dbDate2human ; //"Fri April 23, 2021";

       for ($j=1; $j <= $this->totalDays; $j++){
         $dayAvailable = false;
         foreach ($setupDays as $setupDay) {
           $iteractionDay = explode("-", $setupDay['daySelected']);
           if ($iteractionDay[2] == $j && $iteractionDay[1] == $this->month && $iteractionDay[0] == $this->year) {
             $dayAvailable = true;
           }
         }
         if ($dayAvailable) {
           $this->availableDays[$j]= $j;
         } else {
           $this->availableDays[$j]= '';
         }
       }

       // dd($this->availableDays);
       // foreach ($setupDays as $setupDay) {
       //   $iteractionDay = explode("-", $setupDay['daySelected']);
       //   if ($iteractionDay[1] == $this->month){
       //     $this->availableDays[]= $iteractionDay[2];
       //   }
       // }
    }

    public function daySelected( $day ){
      //dd($this->availableDays);

      if ($day > 0) {
        $this->dateError = false;
        $dayRecord = Day::firstWhere('daySelected', $this->year . "-". $this->month . "-" . $day);
        if ($dayRecord) {
             $this->dayRef = $day;
             $this->monthRef = $this->month;
             $this->yearRef = $this->year;
             $dbDate2human = Carbon::createFromFormat('Y-m-d', $this->year ."-". $this->month ."-". $day)->format('l - F j, Y');
             $this->calendar = false;
            $this->timeShow = $dayRecord->hours->sortBy('timeSelected');

            $this->hourOption = $this->timeShow->first()['hourSelected'];
            $this->dateShow = $dbDate2human;
            $this->timeSelection = 0;

            $this->emitUp('selectedDate', $this->dateShow);

        } else { // in case, somoone is try to hack
            $this->dateError = $dbDate2human . "@" . $this->hourOption . " is not available. Please select another date.";
        }

      }
    }
    public function UpdatedTimeSelection(){
      $this->emitUp('selectedTime', $this->timeSelection);
    }

    public function nextMonth(){
      $this->dateError = false;
      $date = Carbon::createFromFormat('Y-m-d', $this->year ."-". $this->month ."-01")->addMonth();

        $startDate = $date->format('Y-m-d');
        $theMonth = $date->format('m');
        $theYear = $date->format('Y');
        $theTotalDays = cal_days_in_month(CAL_GREGORIAN, $theMonth, $theYear);
        $setupDays = Day::where( 'daySelected', '<=', $this->year . "-" . $theMonth . "-" . $theTotalDays)
                      ->where( 'daySelected', '>=', $startDate)
                      ->orderBy('daySelected')
                      ->get();//get the days within the next month

        $unixTimestamp = strtotime($date);
        $theDayOfWeek = date("w", $unixTimestamp);
        $theMonthNumber = date("n", $unixTimestamp);

        if ($setupDays->first()) {
          $this->hasPrevMonth = true;
           $firstDayMonthAhead = Carbon::createFromFormat('Y-m-d', $startDate)->addMonth();
           $dateOnMonthAhead= Day::where( 'daySelected', '>=', $firstDayMonthAhead)->first();
           if (!$dateOnMonthAhead) {
             $this->hasNextMonth = false;
           }
          $this->month = $theMonth;
          $this->year = $theYear;
          $this->totalDays = $theTotalDays;
          $this->dayOfWeekRef = $theDayOfWeek;
          $this->monthNumber = $theMonthNumber;
          $this->timeShow =  $setupDays[0]->hours->sortBy('timeSelected');
          for ($j=1; $j <= $this->totalDays; $j++){
            $dayAvailable = false;
            foreach ($setupDays as $setupDay) {
              $iteractionDay = explode("-", $setupDay['daySelected']);
              if ($iteractionDay[2] == $j) {
                $dayAvailable = true;
              }
            }
            if ($dayAvailable) {
              $this->availableDays[$j]= $j;
            } else {
              $this->availableDays[$j]= '';
            }
          }
        }else {
            $this->dateError = "Sorry! At this moment, we haven't setup the time for appointment on ".$this->monthArray[$theMonthNumber] . " " . $theYear . " Please request appointment by phone.";
        }
    }
    public function prevMonth(){
      $this->dateError = false;
      $date = Carbon::createFromFormat('Y-m-d', $this->year ."-". $this->month ."-01")->subMonth();
      $CurrentNow = Carbon::now()->format('Y-m-d');
      //dd($CurrentNow);
        $startDate = $date->format('Y-m-d');
        $theMonth = $date->format('m');
        $theYear = $date->format('Y');
        $theTotalDays = cal_days_in_month(CAL_GREGORIAN, $theMonth, $theYear);
        $setupDays = Day::where( 'daySelected', '<=', $this->year . "-" . $theMonth . "-" . $theTotalDays)
                      ->where( 'daySelected', '>=', $startDate)
                      ->where( 'daySelected', '>=', $CurrentNow)
                      ->orderBy('daySelected')
                      ->get();//get the days within the next month

        $unixTimestamp = strtotime($date);
        $theDayOfWeek = date("w", $unixTimestamp);
        $theMonthNumber = date("n", $unixTimestamp);

        if ($setupDays->first()) {
          $this->hasNextMonth = true;
           $firstDayMonthBehind = Carbon::createFromFormat('Y-m-d', $startDate)->subMonth();
           $dateNow = Carbon::now()->subMonth();

           //dd($date . " " . $firstDayMonthBehind . " " . $dateNow );
           if ($firstDayMonthBehind->lt($dateNow)) {
             //dd('entried');
             $this->hasPrevMonth = false;
           }
          $this->month = $theMonth;
          $this->year = $theYear;
          $this->totalDays = $theTotalDays;
          $this->dayOfWeekRef = $theDayOfWeek;
          $this->monthNumber = $theMonthNumber;
          $this->timeShow =  $setupDays[0]->hours->sortBy('timeSelected');
          for ($j=1; $j <= $this->totalDays; $j++){
            $dayAvailable = false;
            foreach ($setupDays as $setupDay) {
              $iteractionDay = explode("-", $setupDay['daySelected']);
              if ($iteractionDay[2] == $j) {
                $dayAvailable = true;
              }
            }
            if ($dayAvailable) {
              $this->availableDays[$j]= $j;
            } else {
              $this->availableDays[$j]= '';
            }
          }
        }else {
            $this->dateError = "Appointments cannot be in the past.";
        }
    }

    public function render()
    {
      return view('livewire.datetimepicker');
    }
}
