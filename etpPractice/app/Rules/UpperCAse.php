<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class UpperCAse implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string, ?string=): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        //
        if ($value !== strtoupper($value)) {
            $fail("The :attribute must be in uppercase.");
        }
        if (!preg_match('/^[A-Z ]+$/', $value)) {
            $fail("The :attribute must contain only uppercase letters (A-Z) and spaces.");
        }

    }
}
