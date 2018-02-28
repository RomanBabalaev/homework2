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
      swith ($value){
         case 1: echo $str.'+';   
	   break;
         case 2: echo $str.'-';      
      break;
         case 3: echo $str.'*';       
	   break;
         case 4: echo $str.'/';      
      break;
      }
      else 
      {
      echo return "Неверный оператор"; 
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
