<?php

use PHPUnit\Framework\TestCase;
use App\Validate;
class ValidateTest extends TestCase{
    // php vendor/phpunit/phpunit/phpunit
    public function test_email(){
        $email = Validate::email('email@email.com');
        $this->assertTrue($email);
    }
}