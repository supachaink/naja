<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$a=array("toyota","honda","banz");

echo ('<br>');
print_r($a);

echo ('<br>');
echo ('<hr>');

$count_a = count($a);
echo $a[1];
echo $a[0];
echo $a[2];


for ($x=0;$x<$count_a;$x++){
    echo $a[$x].'<br>';           
}


?>
