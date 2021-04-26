<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Models\Day;
use Carbon\Carbon;

class ValidateDate implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
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
        $date = Carbon::createFromFormat('l - F j, Y', $value)->format('Y-m-d');
        $getFirstRecord = Day::where('daySelected', '=', $date)->first();
        if ($getFirstRecord === null) {
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
        return $value . 'is not available. Select another date.';
    }
}
