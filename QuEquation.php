<?php namespace Step;

use core\EquationInterface;

Class QuEquation extends Equation implements EquationInterface{
	
	protected function dis($a, $b, $c){
		return ($b**2)-4*$a*$c;
		}
	
	public function solve($a, $b, $c):array{

		$x = $this->dis($a, $b, $c);

	    if($a == 0){
	       return $this->line($b,$c);
	    }
        MyLog::log("Определено, что это квадратное уравнение");
		if ($x > 0){
		    return $this->X=array(
		        (-$b+sqrt($x))/(2*$a),
                (-$b-sqrt($x))/(2*$a)
		        );
		}
		
		if($x == 0){
			return $this->X=array(-($b/(2*$a)));
		}

		throw new StepException("Ошибка: уравнение не имеет корней.");
		
	}
	
}

?>