<?php

namespace KataTest;

use Kata\Potato;
use PHPUnit\Framework\TestCase;

class PotatoTest extends TestCase
{
    /**
     * @test
     */
    public function when_hi_called_then_greeting_should_be_returned()
    {
        $potato = new Potato();

        $actual = $potato->hi();

        $this->assertEquals('Hi! I\'m a potato!', $actual);
    }
}
