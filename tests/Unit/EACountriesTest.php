<?php

use App\Http\Controllers\Controller;

use function PHPUnit\Framework\assertEquals;

test("Specified country is in EA", function(){
    $result = (new Controller)->checkIsEACountry('Kenya');
    assertEquals(true, $result);
});