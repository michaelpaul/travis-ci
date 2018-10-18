<?php

use PHPUnit\Framework\TestCase;

class GreetingTest extends TestCase {
    public function testCreate(): void {
        $this->assertInstanceOf(Greeting::class, new Greeting);
    }
    public function testHello(): void {
        $greet = new Greeting();
        $this->assertEquals("Hello Michael!", $greet->hello("Michael"));
    }
}