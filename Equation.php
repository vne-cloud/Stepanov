<?php namespace Step;

Class Equation{
	public function line($a, $b){
			
			if($a == 0){
                throw new StepException("Ошибка: уравнения не существует.");
			}
            \Step\MyLog::log("Определено, что это линейное уравнение");
			return $this->X=array(-($b/$a));
	}
	
	protected $X;
}

?>