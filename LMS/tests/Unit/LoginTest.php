<?php

declare(strict_types = 1);

namespace Tests\Unit;

use App\Calculator;
use PHPUnit\Framework\TestCase;

class LoginTest extends TestCase
{
    
    //Test for Student Login
    /** @test */
    public function it_registers_a_route(): void
    {

        $Cal = new Calculator;
        $result = $Cal->add(20,5);

        $this->assertEquals(25, $result);
    }

    /** @test */
    public function it_registers_a1_route(): void
    {
        echo "\nTest for User Login \n";
        $Cal = new Calculator;
        $result = $Cal->add(22,5);

        $this->assertEquals(27, $result);
    }

    /** @test */
    public function it_registers_a2_route(): void
    {
        $Cal = new Calculator;
        $result = $Cal->add(22,5);

        $this->assertEquals(27, $result);
    }

    /** @test */
    public function it_registers_a3_route(): void
    {
        $Cal = new Calculator;
        $result = $Cal->add(22,5);

        $this->assertEquals(27, $result);
    }
    /** @test */
    public function it_registers_a4_route(): void
    {
        $Cal = new Calculator;
        $result = $Cal->add(22,5);

        $this->assertEquals(27, $result);
    }
    /** @test */
    public function it_registers_a5_route(): void
    {
        $Cal = new Calculator;
        $result = $Cal->add(22,5);

        $this->assertEquals(27, $result);
    }

   
}
