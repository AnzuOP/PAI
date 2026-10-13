<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 
    <form action = "./" method="POST">
        <label for="login">Login: </label>
        <input type ="text" id="login" name="login"><br>

        <label for="email">E-mail: </label>
        <input type ="email" id="email" name="email"><br>

        <label for="password">Hasło: </label>
        <input type ="password" id="password" name="password"><br>

        <label for="age">Wiek: </label>
        <input type ="number" id="age" name="age"><br>

        <label for="statute">Akceptacja regulaminu: </label> <br>
        <input type ="checkbox" name="statute" value="yes"> TAK <br>

        <input type = "submit" value="Zarejestruj się">
    </form>
</body>
</html>

<?php
    $login = $_POST['login'];
    $email = $_POST['email'];
    $haslo = $_POST['password']; 
    $wiek = $_POST['age'];

    //WALIDACJA LOGINU
    if(strlen($login) > 3){
        echo "Login jest prawidłowy";
        echo "<br>";
    } else {
        echo "Login musi mieć min. 3 znaki";
        echo "<br>";
    }

    //WALIDACJA WIEKU
    if($wiek >= 18 && $wiek <= 100){
        echo "Spełniono wymogi wiekowe";
        echo "<br>";
    } else {
        echo "Wprowadź prawidłowy wiek";
        echo "<br>";
    }

    //WALIDACJA REGULAMINU
    if (isset($_POST['statute'])){
    echo "Zaakceptowano regulamin";
    echo "<br>";
    } else {
    echo "Musisz zaakceptować regulamin";
    echo "<br>";
}

?>