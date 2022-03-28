<?php
//require "./Models/Counter.php";
use App\counter;
class functionTest extends PHPUnit\Framework\TestCase
{
    public static $userobj;
    public static function  setUpBeforeClass():void
    {
        self::$userobj=new counter();

    }
    public function testTrue_return_user_name(){

        return $this->assertTrue(self::$userobj->counts()==true);
    }

}