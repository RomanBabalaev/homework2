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
   {
   if ($value > 0){
      swith ($calc){
         case '+': echo $str.'+';   
	   break;
         case '-': echo $str.'-';      
      break;
         case '*': echo $str.'*';       
	   break;
         case '/': echo $str.'/';      
      break;
	      default return "Неверный оператор";
      }
      
      }
   }
}

function task3() {
    // TODO:
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
