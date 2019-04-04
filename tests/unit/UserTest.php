<?php
use PHPUnit\Framework\TestCase;
use UserModel\User;

require_once('app/User.php');

class UserTest extends TestCase{
	public function testGetLogin(){
		$this->assertContains('miner', User::getLogin());
		//$this->assertStringContainsString('miner', User::getLogin());
	}
}