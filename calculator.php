<?php
echo "Welke operatie wil je uitvoeren? (+, -)";
echo "\n";
$operator = readline();
echo "Eerste getal";
echo "\n";
$num1 = readline();
echo "Tweede getal";
echo "\n";
$num2 = readline();
// if($operator == '+'){
// $result = $num1 + $num2;
// }else if($operator =='-'){
//     $result = $num1 - $num2;
//     }
switch ($operator) {
    case '+':
        $result = $num1 + $num2;
       break;
    case '-':
        $result = $num1 - $num2;
       break;
    default:
        exit('Ongeldige keuze');
        break;
}
echo "Uw resultaat is:" .  $result;
?>
