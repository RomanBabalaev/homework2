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


function task5($polin){
$polin = str_replace(' ','', $polin);//
$polin = mb_strtolower($polin);// перевод в нижний регистр

		
$proV = preg_split('//u' ,$polin, -1, PREG_SPLIT_NO_EMPTY);// проверка строки
$proV2 = array_reverse($proV);
return $proV == $proV2;
}

function task5_1($polin){
	if (task5($polin))
	{
		echo  "Это полиндром";
		return;
	}
	else 
	{
		echo "Это не полинбром";
		return;
	}

}
	
	
function task6() 
{
	echo date("d.m.Y".' '."H:i").'<br>';
	$tt = time()+ (7 * 24 * 60 * 60);
	echo 'Сейчас: '. date('Y-m-d') ;
}

$str ='Карл у Клары украл Кораллы'; 
setlocale(LC_ALL, 'ru_RU.UTF-8');
$str = str_replace('К', ' ', $str);
echo $str;
}

function task8() {
    // TODO:
}

function task9() {
    // TODO:
}
