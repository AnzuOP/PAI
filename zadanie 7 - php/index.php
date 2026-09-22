<?php
    $array = [1,2,3,4,5];
    $array2 = [6,7,8,9,10];
    $klucze = [
    "a" => "min",
    "b" => "max",
    "c" => "srednia",
    "d" => "suma"
];


    printArray($array);
    printArray($array2);
    echo sumNumbers(6);
    echo "<br>";
    echo multiplyNumbers(9,10);
    echo "<br>";
    echo multiplyNumbers(9);
    echo "<br>";
    echo zamienNaWielkie("tomasz");
    echo "<br>";
    echo czyPierwsza(7);
    echo "<br>";
    echo czyPierwsza(10);
    echo "<br>";
    echo wypiszLiczbyPierwszeZZakresu(10,20);
    echo "<br>";
    echo obliczStatystyki(4);

//WYŚWIETLANIE ZA POMOCĄ FUNKCJI
    function printArray($array){
        for($i = 0; $i < count($array); $i++){
            echo $array[$i];
        }
        echo "<br>";
    }

//ZMIENNA LICZBA ARGUMENTÓW
    function sumNumbers(...$array){
        $sum = 0;
        for($i = 0; $i < count($array); $i++){
            $sum = $sum + $array[$i];
        }
        return $sum;
    }

//WARTOŚĆ DOMYŚLNA
//INT W PARAMETRACH - JAKIEGO TYPU SĄ PARAMETRY
//INT PO DWUKROPKU(NA SAMYM KOŃCU SYGNATURY) - TYP ZWRACANY PRZEZ FUNKCJE
    function multiplyNumbers(int $a, int $b = 9): int{
        return $a * $b;
    }

//ZADANIE 1
//STRTOUPPER - ZAMIENIANIE NA WIELKIE LITERY
    function zamienNaWielkie(string $tekst): string{
         $tekst = strtoupper($tekst);
         return $tekst;
    }

//ZADANIE 2
//SPRAWDZANIE CZY LICZBA JEST PIERWSZA
//WAŻNE!!!!!!!!!
    function czyPierwsza(int $n): bool{
          if ($n < 2) {
        return false;
    }
    
    for ($i = 2; $i <= sqrt($n); $i++) {
        //echo $i;
        if (($n % $i) == 0) {
            echo $n . "X" . $i;
            echo "<br>";
            return false; 
        }
    }
    return true; 
}

    function wypiszLiczbyPierwszeZZakresu($poczatek, $koniec){
        for ($i = $poczatek; $i >= $koniec; $i++){
            if(czyPierwsza($i)){
                echo $i;
            }
        }
    }

//ZADANIE 3 
        function obliczMin(){
        return min($liczby);
        }
        function obliczMax(){
        return max($liczby);
        }  
        function obliczSrednia(){
        retu
        }
        function obliczSuma(){

        }
    }                
?>