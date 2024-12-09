<?php

namespace Tests\Unit;

use App\Http\Controllers\Controller;
use PHPUnit\Framework\TestCase;

class DivisibilityTest extends TestCase
{
    public function test_method_can_check_number_is_divisible_by_another(){
        $result = (new Controller)->determineNumberIsDivisibleByAnother(12, 3);
        $this->assertTrue($result);
    }
}
