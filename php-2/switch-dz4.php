<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Задание с числами (Условные блоки)</title>
</head>
<body>
    
<h3>
       Задание с функциями (три параметра) (Четвертое задание)
</h3>
 
<?php

//switch ($operation) {
//    case "+":
//        
//}
    
require 'return-dz3.php';    
    
$arg1=mt_rand(0,15);
$arg2=mt_rand(0,15);
$operation=mt_rand(0,3); 
    
switch ($operation) {
    case '0':
      $operation = "+";
      break;
    case '1':
      $operation = "-";
      break;
    case '2':
      $operation = "*";
      break;
    case '3':
      $operation = "/";
      break;
  }
    
echo "arg1 = {$arg1} <br> arg2 = {$arg2} <br> operation = {$operation} <br>";
    
      
function mathOperation($arg1, $arg2, $operation) {
     switch ($operation) {
         case '+':
             return sum($arg1, $arg2);
             break;
         case '-':
             return difference($arg1, $arg2);
             break;
         case '*':
             return multi($arg1, $arg2);
             break;
         case '/':
              return division($arg1, $arg2);
             break;     
     }
 }   
    
 echo mathOperation($arg1, $arg2, $operation); 
    
 ?>                  
       
</body>
</html>