<?php
require_once __DIR__."/vendor/autoload.php";

class CB
{
    public $name = null;
    public $surname = null;
    public $ammount = null;

    public function createAccount($n, $s, $a){
        $this->name = $n;
        $this->surname = $s;
        $this->ammount = $a;
    }
    public function credit($a){
        if (!is_int($a) ||$a < 0){
            return false;
        }
        $this->ammount += $a;
        return true;
    }
    public function debit($a){
        if (!is_int($a) ||$a < 0 || $a > $this->ammount){
            return false;
        }
        $this->ammount -= $a;
        return true;

    }
}
