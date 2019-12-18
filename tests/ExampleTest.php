<?php

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    public function test()
    {
        $a = $this->prophesize(A::class);
        $a->otherMethod()->shouldNotBeCalled();

        $regession = new Regression();
        self::assertFalse($regession->test($a->reveal()));
    }
}
