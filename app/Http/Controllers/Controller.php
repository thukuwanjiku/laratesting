<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function determineNumberIsDivisibleByAnother(int $number, int $divisbleBy){
        return $number % $divisbleBy == 0;
    }

    public function checkIsEACountry($country){
        return !empty($country) && in_array($country, [
            "Kenya", "KE", "Uganda", "UG", "Tanzania", "TZ"
        ]);
    }
}
