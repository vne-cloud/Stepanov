<?php
use Step\QuEquation;
use PHPUnit\Framework\TestCase;

require __DIR__ . './../vendor/autoload.php';

class QuadraticTest extends TestCase {

/**
* @dataProvider providerSolve
*/
    public function testSolve($a, $b, $c, $result) {
        $fTest = new QuEquation ();
        $this->assertEquals($result, $fTest->solve($a, $b, $c));
    }
    public function providerSolve ()
    {
        return array (
            array (15, 9, 0,[0,-0.6]),
            array (1, 6, -20,[ 2.3851648071345037, -8.385164807134505]),
            array (0, 1, 1,[-1]),
            array (0, 1, 2, [-2.0]),

        );
    }
/**
* @dataProvider providerSolveStepEX
*/
    public function testSolveStepEX($a, $b, $c, $res) {
        $this->expectException(\Step\StepException::class);
        $fTest = new QuEquation();
        $this->assertEquals($res, $fTest->solve($a, $b, $c));
    }
    public function providerSolveStepEX (): array
    {
        return array (
            array (0, 0, 0, 0),
            array (4, 2, 1, 0),
        );
    }
}