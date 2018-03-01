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

function task4($rows, $cols) {
    {
	if(gettype ($rows) == "integer" and gettype ($cols) == "integer" )
	{
		$tab = " ";
		echo $tab .= '<table border="1">';
		for ($tr=1; $tr < $cols+1 ; $tr++){
			$tab .= '<tr>';
		
		for ($td=1; $td < $rows+1; $td++)
			{
		$tab .= '<td>';	
		$tab .= $tr*$td;
		$tab .='</td>';
		}
		
		$tab .='</tr>';
			}
		$tab .= '</table>';
		echo $tab;
	}

	else
	{
	echo 'Ошибка, только целые числа';
		return;
	}
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
