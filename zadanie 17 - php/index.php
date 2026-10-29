
<?php
session_start();

if (!isset($_SESSION['koszyk'])) {
    $_SESSION['koszyk'] = [];
}

if (isset($_POST['dodaj'])) {
    $nazwa = trim($_POST['nazwa']);
    $cena = $_POST['cena'];
    $ilosc = $_POST['ilosc'];

    if ($nazwa != "" && is_numeric($cena) && $cena > 0 &&
        filter_var($ilosc, FILTER_VALIDATE_INT) !== false && $ilosc > 0) {

        $_SESSION['koszyk'][] = [
            'nazwa' => $nazwa,
            'cena' => $cena,
            'ilosc' => $ilosc
        ];

        echo "Dodano produkt!<br>";
    } else {
        echo "Podaj poprawne dane!<br>";
    }
}

if (isset($_POST['usun'])) {
    unset($_SESSION['koszyk'][$_POST['usun']]);
}

if (isset($_POST['wyczysc'])) {
    $_SESSION['koszyk'] = [];
}

$suma = 0;
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Koszyk</title>
</head>
<body>

<h1>Dodaj produkt</h1>

<form method="POST">
    Nazwa: <input type="text" name="nazwa"><br>
    Cena: <input type="number" name="cena" step="0.01"><br>
    Ilość: <input type="number" name="ilosc"><br>
    <button type="submit" name="dodaj">Dodaj</button>
</form>

<h2>Koszyk</h2>

<table border="1">
<tr>
    <th>Nazwa</th>
    <th>Cena</th>
    <th>Ilość</th>
    <th>Wartość</th>
    <th>Usuń</th>
</tr>

<?php
foreach ($_SESSION['koszyk'] as $i => $produkt) {
    $wartosc = $produkt['cena'] * $produkt['ilosc'];
    $suma += $wartosc;
?>

<tr>
    <td><?= htmlspecialchars($produkt['nazwa']) ?></td>
    <td><?= $produkt['cena'] ?> zł</td>
    <td><?= $produkt['ilosc'] ?></td>
    <td><?= $wartosc ?> zł</td>
    <td>
        <form method="POST">
            <button type="submit" name="usun" value="<?= $i ?>">Usuń</button>
        </form>
    </td>
</tr>

<?php
}
?>
</table>

<?php
$rabat = 0;

if ($suma > 500) {
    $rabat = $suma * 0.1;
}

echo "<p>Wartość zamówienia: $suma zł</p>";
echo "<p>Rabat: $rabat zł</p>";
echo "<p>Do zapłaty: " . ($suma - $rabat) . " zł</p>";
?>

<form method="POST">
    <button type="submit" name="wyczysc">Wyczyść koszyk</button>
</form>

</body>
</html>
