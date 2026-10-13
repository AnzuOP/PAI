<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 
    <form action = "./" method="GET">
       <label for="name">Imię: </label>
        <input type ="text" id="name" name="name"><br>

        <label for="age">Wiek: </label>
        <input type ="number" id="age" name="age"><br>

        <label for="ticket">Rodzaj biletu: </label>
        <select name="ticket" id="ticket">
            <option value="normal">Normalny</option>
            <option value="reduced">Ulgowy</option>
        </select>   <br>

        <input type="submit" value="Oblicz cenę">
    </form>
</body>
</html>

<?php
    $ticket = $_GET['ticket'];
    $age = $_GET['age'];
    $ticketPrice = 0;

    if($ticket == "Normal" && $age > 7){
        $ticketPrice = 30;
    } else if($ticket == "Reduced" && $age > 7){
        $ticketPrice = 15;
    } else if($age <= 7){
        $ticketPrice = 0;
    }


    echo 'Cześć, ' . $_GET['name'] . "<br>"; 
    echo 'Twój wiek:' . $_GET['age'] . "<br>"; 
    echo 'Rodzaj biletu:' . $_GET['ticket'] . "<br>"; 
    echo 'Cena biletu:' . $ticketPrice . "<br>"; 
?>