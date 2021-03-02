<?php
use  Step\Equation;
use PHPUnit\Framework\TestCase;
require __DIR__ . './../vendor/autoload.php';
class EquationTest extends TestCase
{
    /**
     * @test
     * @dataProvider providerLine
     */
    public function lineTest ($a,$b,$result){
        $test= new Equation();
        $this->assertEquals($result,$test->line($a,$b) );

    }
    public function providerLine (){
        return array(
            array(1,1,[-1]),
            array(16,2,[-0.125]),


        );


    }
    /**
     * @test
     * @dataProvider providerLineException
     */
    public function lineTestException ($a,$b,$result){
        $this->expectException(\Step\StepException::class);
        $test= new Equation();
        $this->assertEquals($result,$test->line($a,$b) );

    }
    public function providerLineException (){
        return array(
            array(0,2,[-0.125]),
            array(0,0,[-0.125]),

        );


    }
}