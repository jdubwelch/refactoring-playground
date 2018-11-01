<?php

namespace App\RefactorBigMethod;

use PHPUnit_Framework_TestCase;

class BetterDesignTest extends PHPUnit_Framework_TestCase
{
    /** @test */
    public function it_does_something_new_with_param1_and_param2()
    {
        $betterDesign = new BetterDesign($accountID = 123);
        $response = $betterDesign->someReallyLongMethod('param1', 'param2');
        $this->assertEquals('do it param2 way with BetterDesign for Account 123 with param1 and param2', $response);
    }

    /** @test */
    public function better_design_method_returns_the_same_regardless_of_param3()
    {
        $betterDesign = new BetterDesign($accountID = 123);
        $response = $betterDesign->someReallyLongMethod('param1', 'param2', true);
        $this->assertEquals('do it param2 way with BetterDesign for Account 123 with param1 and param2', $response);
    }
}
