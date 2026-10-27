<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "./" method="GET">
        <label for="name">Imie: </label>
        <input type ="text" id="name" name="name"><br>
        <button type="submit" onclick="name()">Przycisk</button>

    </form>
    <br>

    <form action = "./" method="POST">
        <label for="age">Wiek: </label>
        <input type ="number" id="age" name="age"><br>
        <button type="submit" onclick="age()">Przycisk</button>

    </form>
    <br>

    <form action="./" method="POST">
        <label for="title">Nazwa produktu:</label>
        <input type="text" id="title" name="title" required><br>

        <label for="price">Cena jednego produktu:</label>
        <input type="number" id="price" name="price" min="0" step="0.01" required><br>

        <label for="amount">Liczba zakupionych sztuk:</label>
        <input type="number" id="amount" name="amount" min="1" required><br>

        <button type="submit">Oblicz</button>
    </form>
</body>
</html>

<?php
//ZAD 1
    $name = $_GET['name'];

    if (isset($_GET['name'])){
        echo $name;
        echo "<br>";
    } else {
        echo "BŁĄD!";
        echo "<br>";
}

//ZAD 2
    $age = $_POST['age'];

    if (isset($_POST['age'])){
        echo $age;
        echo "<br>";
    } else {
        echo "BŁĄD!";
        echo "<br>";
}

//ZAD 3 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (
        isset($_POST['title'], $_POST['price'], $_POST['amount']) &&
        $_POST['title'] !== "" &&
        $_POST['price'] !== "" &&
        $_POST['amount'] !== ""
    ) {
        $title = $_POST['title'];
        $price =  $_POST['price'];
        $amount =  $_POST['amount'];

        $sum = $price * $amount;

        echo "<br>Nazwa produktu: " . $title;
        echo "<br>Cena: " . $price . " zł";
        echo "<br>Liczba sztuk: " . $amount;
        echo "<br>Łączny koszt: " . $sum . " zł";
    } else {
        echo "PODAJ POPRAWNE DANE!";
    }
}
?>