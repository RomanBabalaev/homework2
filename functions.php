<?php

function task1($arrayString, $flag = false) 
{
   foreach ($arrayString as $value)
   {
   echo "<p>".$value."</p>";
   }
   if($flag == true)
   {
      return  implode($arrayString);
      
   }
}

function task2($str,$calc) 
{
   foreach ($str as $value)
	   $result = 0;
   {
   if ($value > 0){
      switch ($calc){
         case '+': $result += $value;   
	break;
	case '-': $result -= $value;      
         break;
         case '*': $result *= $value;       
	  break;
         case '/': $result /= $value;      
      break;
		  default: return  "Неверный оператор";
      }
      echo $result;
      }
   }
}

function task3($str);
{
	if (is_string($str))
	{
		if(in_array($str, array('-','+','/','*'))){
		$arr = func_get_args();
			$a = $arr[0];
			//по логике можно воспользоваться task2
			
		}	 
	}
}

function task4() {
    // TODO:
}

function task5() {
    // TODO:
}

function task6() {
    // TODO:
}

function task7() {
    // TODO:
}

function task8() {
    // TODO:
}

function task9() {
    // TODO:
}
