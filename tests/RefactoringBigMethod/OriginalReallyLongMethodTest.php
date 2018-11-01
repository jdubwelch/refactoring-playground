<?php

namespace App\RefactorBigMethod;

use defaults;
use PHPUnit_Framework_TestCase;

class OriginalReallyLongMethodTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        defaults::$clientInfo = [
            'id' => 2,
            'name' => 'Barry',
        ];
    }

    /** @test */
    public function it_does_something_for_param_one()
    {
        $originalReallyLongMethod = new OriginalReallyLongMethod();
        $response = $originalReallyLongMethod->someReallyLongMethod('one', 'bar', false);
        $this->assertEquals('do it param1==one way for account 2', $response);
    }

    /** @test */
    public function it_handles_param2()
    {
        $originalReallyLongMethod = new OriginalReallyLongMethod();
        $response = $originalReallyLongMethod->someReallyLongMethod('foo', 'bar', false);
        $this->assertEquals('do it param2 way with name Barry', $response);
    }

    /** @test */
    public function it_handles_it_another_way()
    {
        $originalReallyLongMethod = new OriginalReallyLongMethod();
        $response = $originalReallyLongMethod->someReallyLongMethod('foo', 'bar');
        $this->assertEquals('do it this way with 2 added more stuff to return because of param3', $response);
    }
}
