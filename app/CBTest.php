<?php
require_once __DIR__."/vendor/autoload.php";
require_once __DIR__."/CB.php";

use PHPUnit\Framework\TestCase;
class BDTest extends TestCase
{
    public function setUp(){
        $this->cb = new CB();
        $this->cb->createAccount("charles", "nerot", 100);
    }
    public function testCreateAccountName(){
        $this->assertEquals($this->cb->name, "charles");

    }
    public function testCreateAccountSurname(){
        $this->assertEquals($this->cb->surname, "nerot");
    }
    public function testCreateAccountAmmount(){
        $this->assertEquals($this->cb->ammount, 100);
    }
    public function testCredit(){
        $this->assertTrue($this->cb->credit(10));
    }
    public function testDebit(){
        $this->assertTrue($this->cb->debit(10));
    }
    public function testCreditAmmountTrue(){
        $this->cb->credit(10);
        $this->assertEquals($this->cb->ammount, 110);
    }
    public function testCreditAmmountFalse(){
        $this->cb->credit(10);
        $this->assertNotEquals($this->cb->ammount, 100);
    }
    public function testDebitAmmountTrue(){
        $this->cb->debit(10);

        $this->assertEquals($this->cb->ammount, 90);
    }
    public function testDebitAmmountFalse(){
        $this->cb->debit(10);
        $this->assertNotEquals($this->cb->ammount, 100);
    }


}