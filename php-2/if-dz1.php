<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Задание с числами (Условные блоки)</title>
</head>
<body>
<div class="Условный блок с if">
    <h3>
       Условный блок с if (Первое задание)
    </h3>
<?php
    $a=mt_rand(0,15);
    $b=mt_rand(0,15);
 function compares($a,$b) {
    if ($a>=0 && $b>=0) {
    return ($a-$b);}
     if ($a<0 && $b<0){
    return ($a*$b);}
     if ($a>0 && $b<0) {
    return ($a+$b);}
     else if ($a<0 && $b>0){
    return ($a/$b);}     
 }; 
echo compares($a,$b);       
?>        
</div> 
                       
</body>
</html>