<?php
//ZAD 15
    $start = 1;
    $end = 1000;

echo "Liczby podzielne przez 3 i 7 w przedziale od $start do $end:<br>";

for ($i = $start; $i <= $end; $i++) {
    if ($i % 3 == 0 && $i % 7 == 0) {
        echo $i . " ";
    }
}
//ZAD 16
    echo "<br>";
    echo "<br> Przedział od 1 do 100 z pominięciem liczb podzielnych przez 3 <br>";

    for ($i = 0; $i <= 100; $i++) {
        if ($i % 3 != 0) {
            echo $i . " ";
        }
    }
//ZAD 17
    echo "<br>";
    echo "<br> 20 różnych liczb podzielnych przez 3 liczby wprowadzonej <br>";

    $n = 70;
    $licznik = 0;

    while ($licznik < 20){
        if ($n % 3 == 0) {
            echo $n . " ";
            $licznik++;
        }
        $n++;
    }
//ZAD 19
    echo "<br>";
    echo "<br> Maks tablicy bez gotowej funkcji <br>";

    $array = [1, 4, 3, 6, 8, 9, 2];
    $max = $array[0];

    for($i = 0; $i < count($array); $i++){
        if($array[$i] > $max){
            $max = $array[$i];
        }
    }
    echo $max;
//ZAD 20
    echo "<br>";
    echo "<br> Szachownica <br>";

    for ($i = 0; $i < 8; $i++) {        
        for ($j = 0; $j < 8; $j++) {
            if (($i + $j) % 2 == 0) {
                echo "X";
            } else {
                echo "O";
            }
        }
    echo "<br>";
    }
//ZAD 21  
//NAPRAWIĆ!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
    echo "<br>";
    echo "<br> Tabliczka mnożenia <br>"; 
    
    for ($i = 1; $i <= 10; $i++) {
        echo $i;
        echo "<br>";
    }        
    for ($j = 1; $j <= 10; $j++) {
        echo $j;
    }    
?>
