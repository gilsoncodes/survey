<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Day;
use App\Models\Hour;
use Carbon\Carbon;

class Datetimepicker extends Component
{
    public $dateShow;
    public $dateHide;
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
    //public $may= trans('May');
    public $monthArray = [ "1" => "January", "2" => "February", "3" => "March", "4" => "April", "5" => 'May', "6" => "June",
                           "7" => "July", "8" => "August", "9" => "September", "10" => "October", "11" => "November", "12" => "December"
                         ];
    public $monthArrayPT = [ "1" => "Janeiro", "2" => "Fevereiro", "3" => "Março", "4" => "Abril", "5" => 'Maio', "6" => "Junho",
                           "7" => "Julho", "8" => "Agosto", "9" => "Setembro", "10" => "Outubro", "11" => "Novembro", "12" => "Dezembro"
                         ];
    public $monthNumber;
    public $calendar = false;
    public $hourOption;
    public $minuteOption;
    public $hasNextMonth = true;
    public $hasPrevMonth = false;

    protected $listeners = ['reset' => 'dateTimeReset'];

    const date_select = 'livewire.select_date';

    // Computed Property
    public function getClockProperty()
    {
        return ($this->timeSelection == 0 ? 'color-gray' : 'color-black');
    }
    public function getClockiconProperty()
    {
        return ($this->timeSelection == 0 ? '#D1D5DB' : '#000000');
    }
    public function getCalendProperty()
    {
        return ($this->dateShow == 'Select Date' || $this->dateShow == 'Selecione o dia' ? 'color-gray' : 'color-black');
    }
    public function getCalendiconProperty()
    {
        return ($this->dateShow == 'Select Date' || $this->dateShow == 'Selecione o dia' ? '#D1D5DB' : '#000000');
    }
    public function dateTimeReset()
    {
      $this->dateShow = trans('livewire.select_date');
      $this->timeSelection = 0;
      $this->yearRef = 2020; // to make the date before today -> for not selecting a day on the calendar
    }

    public function mount(){
      $setupDays = Day::where( 'daySelected', '<', date('Y-m-d', strtotime("+" . $this->rangeDate ." days")))
                    ->where( 'daySelected', '>', date('Y-m-d', strtotime("-1 days")))
                    ->orderBy('daySelected')
                    ->get();//get the days from today to 60days later, today can be on the current month or not

      if ($setupDays->count() > 0) {
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

         $this->dateShow = trans('livewire.select_date');//"Select Date";//$dbDate2human ; //"Fri April 23, 2021";

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
      }

    }

    public function daySelected( $day ){

      if ($day > 0) {
        $this->dateError = false;
        $dayRecord = Day::firstWhere('daySelected', $this->year . "-". $this->month . "-" . $day);
        if ($dayRecord) {
             $this->dayRef = $day;
             $this->monthRef = $this->month;
             $this->yearRef = $this->year;

             //
             //$this->Year = Carbon::createFromFormat('Y-m-d H:i:s', $this->appointment[0]['dateTime'])->format('Y');
             //$this->month = Carbon::createFromFormat('Y-m-d H:i:s', $this->appointment[0]['dateTime'])->format('F');
             //$this->day = Carbon::createFromFormat('Y-m-d H:i:s', $this->appointment[0]['dateTime'])->format('j');
             $dayNameEN = Carbon::createFromFormat('Y-m-d', $this->year . "-". $this->month . "-" . $day)->format('l');
             $mountNameEN = Carbon::createFromFormat('Y-m-d', $this->year . "-". $this->month . "-" . $day)->format('F');
             if (app()->getLocale() == 'en') {
               $dbDate2human = trans($dayNameEN) . ' - ' . trans($mountNameEN) . ' ' . $day . ', ' . $this->year;
             } else {
               $dbDate2human = trans($dayNameEN) . ' - ' . $day . ' de ' . trans($mountNameEN) . ' de ' . $this->year;
             }
             //
            $this->dateHide = Carbon::createFromFormat('Y-m-d', $this->year ."-". $this->month ."-". $day)->format('l - F j, Y');
             $this->calendar = false;
            $this->timeShow = $dayRecord->hours->sortBy('timeSelected');

            $this->hourOption = $this->timeShow->first()['hourSelected'];
            $this->dateShow = $dbDate2human;

            $this->timeSelection = 0;

           $this->emitUp('selectedShow', $this->dateShow);

           $this->emitUp('selectedHide', $this->dateHide);

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
          // if (app()->getLocale() == 'pt-br') {
          //   $this->dateError = "Sorry! At this moment, we haven't setup the time for appointment on ".$this->monthArrayPT[$theMonthNumber] . " " . $theYear . " Please request appointment by phone.";
          // } else {// en
            $this->dateError = "Sorry! At this moment, we haven't setup the time for appointment on ". trans($this->monthArray[$theMonthNumber]) . " " . $theYear . " Please request appointment by phone.";
          // }
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
       if ($firstDayMonthBehind->lt($dateNow)) {
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
