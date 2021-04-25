<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Day;
use App\Models\Hour;
use App\Models\Minute;

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
        Minute::truncate();
        $today= date("Y-m-d");
        $numberDayOfWeek = date("w");
        $this->populate($today, $numberDayOfWeek);

        for ($nextDay=1; $nextDay < 70; $nextDay++) { //create 69 records
          $nextDate = date('Y-m-d', strtotime("+" . $nextDay ." days"));
          $unixTimestamp = strtotime($nextDate);
          $numberDayOfWeek = date("w", $unixTimestamp);

            $this->populate($nextDate, $numberDayOfWeek);
        }
    }

    public function populate($date, $week){
      if ($week == 1) {//Monday
          $dayCreated = Day::create([ 'daySelected' => $date ]);
          for ($hour=8; $hour < 18 ; $hour++) {
              $hourCreated = Hour::create([
                'hourSelected' => $hour,
                'day_id' => $dayCreated->id
              ]);
              for ($minute=0; $minute < 50; $minute = $minute +15) {
                $saveMinute = $minute;
                if ($minute < 10) {
                  $saveMinute = '0' . $minute;
                }
                Minute::create([
                  'minuteSelected' => $saveMinute,
                  'hour_id' => $hourCreated->id
                ]);
              }
          }
      }
      if ($week == 2) {//Tuesday
          $dayCreated = Day::create([ 'daySelected' => $date ]);
          for ($hour=8; $hour < 16 ; $hour++) {
              $hourCreated = Hour::create([
                'hourSelected' => $hour,
                'day_id' => $dayCreated->id
              ]);
              for ($minute=0; $minute < 50; $minute = $minute +15) {
                $saveMinute = $minute;
                if ($minute < 10) {
                  $saveMinute = '0' . $minute;
                }
                Minute::create([
                  'minuteSelected' => $saveMinute,
                  'hour_id' => $hourCreated->id
                ]);
              }
          }
      }
      if ($week == 3) {//Wednesday
          $dayCreated = Day::create([ 'daySelected' => $date ]);
          for ($hour=13; $hour < 18 ; $hour++) {
              $hourCreated = Hour::create([
                'hourSelected' => $hour,
                'day_id' => $dayCreated->id
              ]);
              for ($minute=0; $minute < 50; $minute = $minute + 20) {
                $saveMinute = $minute;
                if ($minute < 10) {
                  $saveMinute = '0' . $minute;
                }
                Minute::create([
                  'minuteSelected' => $saveMinute,
                  'hour_id' => $hourCreated->id
                ]);
              }
          }
      }
      if ($week == 4) {//Thurday
          $dayCreated = Day::create([ 'daySelected' => $date ]);
          for ($hour=8; $hour < 18 ; $hour++) {
              $hourCreated = Hour::create([
                'hourSelected' => $hour,
                'day_id' => $dayCreated->id
              ]);
              for ($minute=0; $minute < 50; $minute = $minute +15) {
                $saveMinute = $minute;
                if ($minute < 10) {
                  $saveMinute = '0' . $minute;
                }
                Minute::create([
                  'minuteSelected' => $saveMinute,
                  'hour_id' => $hourCreated->id
                ]);
              }
          }
      }
      if ($week == 5) {//Friday
          $dayCreated = Day::create([ 'daySelected' => $date ]);
          for ($hour=8; $hour < 18 ; $hour++) {
              $hourCreated = Hour::create([
                'hourSelected' => $hour,
                'day_id' => $dayCreated->id
              ]);
              for ($minute=0; $minute < 50; $minute = $minute +15) {
                $saveMinute = $minute;
                if ($minute < 10) {
                  $saveMinute = '0' . $minute;
                }
                Minute::create([
                  'minuteSelected' => $saveMinute,
                  'hour_id' => $hourCreated->id
                ]);
              }
          }
      }
      if ($week == 6) {//Sarturday
          $dayCreated = Day::create([ 'daySelected' => $date ]);
          for ($hour=8; $hour < 13 ; $hour++) {
              $hourCreated = Hour::create([
                'hourSelected' => $hour,
                'day_id' => $dayCreated->id
              ]);
              for ($minute=0; $minute < 50; $minute = $minute +15) {
                $saveMinute = $minute;
                if ($minute < 10) {
                  $saveMinute = '0' . $minute;
                }
                Minute::create([
                  'minuteSelected' => $saveMinute,
                  'hour_id' => $hourCreated->id
                ]);
              }
          }
      }

    }
}
