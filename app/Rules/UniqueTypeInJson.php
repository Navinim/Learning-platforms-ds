<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class UniqueTypeInJson implements Rule
{
    public function passes($attribute, $value)
    {
        $types = collect(json_decode($value, true))->pluck('type')->filter();
        return count($types) === count($types->unique());
    }
    public function message()
    {
        return 'The :attribute must have unique "type" values in the JSON array.';
    }
}