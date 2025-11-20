<?php
use PHPUnit\Framework\TestCase;

class LoginTest extends TestCase
{
    public function test_login_file_exists()
    {
        $this->assertFileExists('login.php');
    }

    public function test_login_page_loads()
    {
        $content = file_get_contents('login.php');
        $this->assertIsString($content);
    }
}
