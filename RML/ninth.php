<?php
//Calculation of simple interest(SI) and compound interest(CI).
$P=100;
$T=4;
$R=10;
$n=3;
$SI=($P*$R*$T)/100;
$CI=$P*(pow(1+($R/100),$n));
echo "$SI";
echo "<br/>";
echo "$CI";
?>