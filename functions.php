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

function task2($arrayNumber, $operator)
{   $result = 0;
   	var_dump($arrayNumber);
 	foreach ($arrayNumber as $value)
   {
	   if ($value > 0){
      switch ($operator){
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
      }
   }
 echo $result;
}

function task3($str)
{
		if(in_array($str, array('-','+','/','*')))
		{
		$arr = func_get_args();
			$a = $arr[0];
			task2($str, $arr)
			
		}	 

}

function task4($rows, $cols) {
	
	if(($rows)<1 or ($cols)<1 )
	{
		echo 'Ошибка, только целые числа';
		return;		
	}
		
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
		task4($rows-1, $cols-1);	
		
	  	
}


function task5($arr) {
    if(gettype ($arr) == "string"){
	   preg_match_all ('|',$arr, $pol);
		$str = implode(array_reverse($pol[0]));
   }
}
function task5_1($arr)
{
if(task5 == $str and $str == $arr ){
	return  true;
	}
	else{
	return false;
		echo "Просто строка";
	}
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
