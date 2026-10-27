<?php
    session_start();

    if (!isset($_SESSION['koszyk'])){
        $_SESSION['koszyk'] = [];
    }

    if (isset($_POST['dodaj'])) {
        $nazwa = trim($nazwa);
        $cena = $_POST['cena'];
        $ilosc = $_POST['ilosc'];
    }

    if ($nazwa != "" && $cena > 0 && $ilosc > 0 && filter_var($ilosc, FILTER_VALIDATE_INT) !== false){
        $_SESSION['koszyk'] [] = [
            'nazwa' => $nazwa,
            'cena' => $cena,
            'ilosc' => $ilosc
        ];
    } else {
        echo "PODAJ POPRAWNE DANE!";
    }
    
    if (isset($_POST['usun'])) {
        unset($_SESSION['koszyk'][$_POST['usun']]);
    }

    if (isset($_POST['wyczysc'])){
        $_SESSION['koszyk'] = [];
    }

    $suma = 0
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>DODAJ PRODUKT </h1>

    <form action="./" method="POST">
        <label for="nazwa">Nazwa produktu:</label>
        <input type="text" id="nazwa" name="nazwa"><br>

        <label for="cena">Cena jednego produktu:</label>
        <input type="number" id="cena" name="cena"><br>

        <label for="ilosc">Liczba zakupionych sztuk:</label>
        <input type="number" id="ilosc" name="ilosc"><br>

        <button type="submit">Dodaj</button>
    </form>

    <h2>KOSZYK</h2>

    <table border="1">
    <tr>
        <th>Nazwa</th>
        <th>Cena</th>
        <th>Ilość</th>
        <th>Wartość</th>
        <th>Usuń</th>

</body>
</html>