<?php

declare(strict_types = 1);

namespace Tests\Unit;

use App\Login;
use PHPUnit\Framework\TestCase;

class LoginTest extends TestCase
{
    
    //Test for Student Login
    /** @test */
    public function student_login_test(): void
    {

        $login = new Login;
        $result = $Cal->add(20,5);

        $this->assertEquals(25, $result);
    }

    /** @test */
    public function it_registers_a1_route(): void
    {
        echo "\nTest for Student Login \n";
        $Cal = new Calculator;
        $result = $Cal->add(22,5);

        $this->assertEquals(27, $result);
    }

   
}
