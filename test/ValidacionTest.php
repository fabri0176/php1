<?php

use PHPUnit\Framework\TestCase;
use App\Validate;
class ValidateTest extends TestCase{
    // php vendor/phpunit/phpunit/phpunit
    
    public function testEmail(){
        $email = Validate::email('email@email.com');
        $this->assertTrue($email);

        $email = Validate::email('email@..@email.com');
        $this->assertFalse($email);
    }

    public function testUrl(){
        $url = Validate::url("https://pagina.com");
        $this->assertTrue($url);

        $url = Validate::url("5534545");
        $this->assertFalse($url);
    }

    public function testPassword(){
        $password = Validate::password("334432424ffdsfds");
        $this->assertTrue($password);

        $password = Validate::password("2");
        $this->assertFalse($password);

        $password = Validate::password("niño");
        $this->assertFalse($password);
    }
}