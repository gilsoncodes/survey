<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Models\Day;
use App\Models\Hour;
use Carbon\Carbon;

class ValidateTime implements Rule
{
    protected $dateSelected;
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($humanDate)
    {
        $this->dateSelected = $humanDate;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
      $date = Carbon::createFromFormat('l - F j, Y', $this->dateSelected)->format('Y-m-d');
      $getDayRecord = Day::where('daySelected', $date)->first();
      $getTimeRecord = Hour::where('id', $value)->where('day_id', $getDayRecord->id)->first();
      if ($getTimeRecord === null) {
        return false;
      }else {
        return true;
      }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return $value . 'is not available. Select another one.';
    }
}
