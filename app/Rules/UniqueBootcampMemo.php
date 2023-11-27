<?php
namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Models\BootcampMemo;

class UniqueBootcampMemo implements Rule
{
    public function passes($attribute, $value)
    {
        // Check if the 'type' value is unique among existing records
        return !BootcampMemo::where('data->type', $value)->exists();
    }

    public function message()
    {
        return 'The :attribute must be unique among existing records.';
    }
}