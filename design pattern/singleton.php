<?php 

class Singleton {
    public $instance = '1111';
    private static $result;
    private function __construct(){}
    public static function getInstance(){
        if(!self::$result){
            !self::$result = new Singleton();
        }
        return self::$result;
    }

}

$singleton = Singleton::getInstance();
$singleton->instance = 'dasasasa';
unset($singleton);
$singleton2 = Singleton::getInstance();
echo $singleton2->instance;
