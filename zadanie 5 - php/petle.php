<?php
//for
for ($i = 0; $i < 10; $i++){
    echo $i;
}

//while
$j = 0;
while ($j < 5){
    echo $j;
    $j++;
}

//do while
$k = 1;
do {
    echo $k;
    $k++;
} while ($k <= 5);

//foreach
$tablica = [1,2,3,4,5];
foreach($tablica as $wartosc){
    echo $wartosc;
}

//tablica asocjacyjna
$owoce = [
    "a" => "jabłko",
    "b" => "banan",
    "c" => "gruszka"
];

//przypisanie 
foreach($tablica as $klucz => $wartosc){
    echo "Klucz: ".$klucz. "Wartość: ".$wartosc;
}

//
$array = [1,2,3];
$assoc_table = ['imie'=>"Ania", "wiek"=>30];
$empty_array = [];

//
$arrayOfNumbers = [1,2,3];
for ($i = 0; $i < count($arrayOfNumbers); $i++){
    echo $arrayOfNumbers[$i];
}

//wstawianie elementów
$number = 10;
$insertArray = [1,2,3];
$insertArray[1] = $number;

//wstawianie elementów do całej tablicy
$number = 10;
$insertArray = [1,2,3];
for ($i = 0; $i < count($insertArray); $i++){
    echo $insertArray[$i] = $number;
} 
echo var_dump($insertArray);

//wstawianie elementu pod wybrany index
$number = 10;
$index = 0;
$insertArray = [1,2,3];
$insertArray[$index] = $number;
//
?>