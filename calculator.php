<?php
echo("Welke operatie wil je uitvoeren? (+, -)".PHP_EOL);
$opp = readline();
echo("Eerste getal?".PHP_EOL);
$num1 = readline();
echo("Tweede getal?".PHP_EOL);
$num2 = readline();

if($opp == "+"){
    echo("Uw resultaat: ".($num1+$num2));
}else if($opp == "-"){
    echo("Uw resultaat: ".($num1-$num2));
}