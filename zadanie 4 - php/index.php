<?php
/*
 echo "Testujemy czy dziala";
 $zmienna = 5;

 if($zmienna > 4){
    echo "Zmienna większa od 4";
 } else if($zmienna == 5) {
    echo "Zmienna równa 5";
 } else {
    echo "Inny wynik";
 }

    $kolor = "red";
    
    switch($kolor) {
        case "red":
            echo "czerwony";
            break;
        case "blue":
            echo "niebieski";
            break;    
        case "yellow":
            echo "żółty";
            break; 
        default:
        echo "Kolor nierozpoznany";       
    }

    zadanie
    delta > 0 = dwa miejsca
    delta < 0 = brak miejsc
    delta == 0    = jedno miejsce
    $a = 1;
    $b = -5;
    $c = 6;

    $delta = $b * $b - 4 * $a * $c;
    
    echo "Delta = " . $delta;

    if($delta > 0) {
        $x1 = (-$b - sqrt($delta)) / (2 * $a);
        $x2 = (-$b + sqrt($delta)) / (2 * $a);

        echo "x1 = " . $x1 ;
        echo "x2 = " . $x2 ;      
    } else if($delta == 0) {
        $x0 = -b / (2 * $a);
        
        echo "x0 = " . x0 ;
    } else {
        echo "Brak miejsc zerowych";
    }
// ZAD 1
 $zmienna = 4;

 if($zmienna % 2 == 1){
    echo "Liczba jest nieparzysta";
 } else{
    echo "Liczba jest parzysta";
 }

 // ZAD 2

 $a = 4;
 $b = 2;

 if($a % $b == 0){
    echo "Jest podzielna przez siebie";
 } else{
    echo "Nie jest podzielna";
 }
 
 // ZAD 3

 $liczba =  10;

 if($liczba >= 1 && $liczba <= 10 || $liczba >= 17 && $liczba <=21){
    echo "Liczba należy do przedziału";
 } else {
    echo "Nie w przedziale";
 }
*/

 // ZAD 4
$i = 1;

for (; $i <= 100; $i += 2){
    echo $i . "";
}
for (; $i >= 1; $i -= 4){
    echo $i;
}
?>