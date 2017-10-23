<?php
require_once __DIR__."/vendor/autoload.php";

class Base
{
    public static function add($a,$b){
        return $a + $b;
    }
    public static function sub($a,$b){
        return $a - $b;
    }
    public static function mul($a,$b){
        return $a * $b;
    }
    public static function div($a,$b){
        return $a / $b;

    }
    public static function avg($a = array()){
        $cpt = 0;
        $total = 0;
        foreach ($a as $v){
            $total += $v;
            $cpt++;
        }
        return $total / $cpt;
    }
}
