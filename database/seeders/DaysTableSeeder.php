<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Day;
use App\Models\Hour;
use App\Models\Code;

class DaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Day::truncate();
        Hour::truncate();
        Code::truncate();
        $today= date("Y-m-d");
        $numberDayOfWeek = date("w");
        $this->populate($today, $numberDayOfWeek);

        for ($nextDay=1; $nextDay < 70; $nextDay++) { //create 69 records
          $nextDate = date('Y-m-d', strtotime("+" . $nextDay ." days"));
          $unixTimestamp = strtotime($nextDate);
          $numberDayOfWeek = date("w", $unixTimestamp);

            $this->populate($nextDate, $numberDayOfWeek);
        }

        Code::create(['business' => 'Recruter', 'code' => 'JobApplication']);
    }

    public function populate($date, $week){
      if ($week == 1) {//Monday
        $dayCreated = Day::create([ 'daySelected' => $date ]);
        for ($hour=8; $hour < 18 ; $hour++) {
          $hr = $hour;
          if ($hour < 10) {
            $hr = "0" . $hour;
          }
          for ($i=0; $i < 50 ; $i = $i + 15) {
            $min = $i;
            if ($i < 10) {
              $min = "0" . $i;
            }
            Hour::create(['timeSelected' => $hr . ":" . $min . ":00", 'day_id' => $dayCreated->id]);
          }
        }
      }
      if ($week == 2) {//Tuesday
        $dayCreated = Day::create([ 'daySelected' => $date ]);
        for ($hour=8; $hour < 15 ; $hour++) {
          $hr = $hour;
          if ($hour < 10) {
            $hr = "0" . $hour;
          }
          for ($i=10; $i < 60 ; $i = $i + 15) {
            $min = $i;
            Hour::create(['timeSelected' => $hr . ":" . $min . ":00", 'day_id' => $dayCreated->id]);
          }
        }
      }
      if ($week == 3) {//Wednesday
        $dayCreated = Day::create([ 'daySelected' => $date ]);
        for ($hour=12; $hour < 18 ; $hour++) {
          $hr = $hour;
          if ($hour < 10) {
            $hr = "0" . $hour;
          }
          for ($i=0; $i < 50 ; $i = $i + 20) {
            $min = $i;
            if ($i < 10) {
              $min = "0" . $i;
            }
            Hour::create(['timeSelected' => $hr . ":" . $min . ":00", 'day_id' => $dayCreated->id]);
          }
        }
      }
      if ($week == 4) {//Thursday
        $dayCreated = Day::create([ 'daySelected' => $date ]);
        for ($hour=8; $hour < 18 ; $hour++) {
          $hr = $hour;
          if ($hour < 10) {
            $hr = "0" . $hour;
          }
          for ($i=0; $i < 60 ; $i = $i + 20) {
            $min = $i;
            if ($i < 10) {
              $min = "0" . $i;
            }
            Hour::create(['timeSelected' => $hr . ":" . $min . ":00", 'day_id' => $dayCreated->id]);
          }
        }
      }
      if ($week == 5) {//Friday
        $dayCreated = Day::create([ 'daySelected' => $date ]);
        for ($hour=8; $hour < 18 ; $hour++) {
          $hr = $hour;
          if ($hour < 10) {
            $hr = "0" . $hour;
          }
          for ($i=0; $i < 50 ; $i = $i + 30) {
            $min = $i;
            if ($i < 10) {
              $min = "0" . $i;
            }
            Hour::create(['timeSelected' => $hr . ":" . $min . ":00", 'day_id' => $dayCreated->id]);
          }
        }
      }
      if ($week == 6) {//Saturday
        $dayCreated = Day::create([ 'daySelected' => $date ]);
        for ($hour=8; $hour < 12 ; $hour++) {
          $hr = $hour;
          if ($hour < 10) {
            $hr = "0" . $hour;
          }
          for ($i=0; $i < 50 ; $i = $i + 15) {
            $min = $i;
            if ($i < 10) {
              $min = "0" . $i;
            }
            Hour::create(['timeSelected' => $hr . ":" . $min . ":00", 'day_id' => $dayCreated->id]);
          }
        }
      }
    }
}
