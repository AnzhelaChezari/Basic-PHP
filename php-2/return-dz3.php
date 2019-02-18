<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Задание с числами (Условные блоки)</title>
</head>
<body>

<h3>
       Задание с функциями (return) (Третье задание)
</h3>
 
<?php
function sum($a, $b) {
    return $a+$b;   
}
function difference($a, $b) {
    return $a-$b;
}
function multi($a, $b) {
    return $a*$b;
}  
function division($a, $b) {
    return ($b!=0)?$a/$b:"Warning: Делите на ноль.";
}    
    
//echo sum(4,5) . "<br/>";
//echo difference(4,5) . "<br/>";    
//echo multi(4,5) . "<br/>";    
//echo division(4,5) . "<br/>";            
 ?>
 
 </body>
 </html>