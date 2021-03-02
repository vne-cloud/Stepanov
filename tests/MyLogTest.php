<?php
use Step\MyLog;
use PHPUnit\Framework\TestCase;
require __DIR__ . './../vendor/autoload.php';
class MyLogTest extends TestCase
{
    /**
     * @test
     * @dataProvider providerLog
     */
    public function logTest ($result,$str){
        $this->assertEquals($result,MyLog::log($str) );

    }
    public function providerLog (){
        return array(
            array("","faf"),
            array("","rthr"),


        );
    }
    /**
     * @test
     */
    public function writeTest (){

        $this->assertEquals("",MyLog::write());
    }

}