
<?php
require_once "db_connect.php";

if (isset($_POST['usun'])) {

    $id = $_POST['id'];

    $sql = "DELETE FROM gry WHERE id = '$id'";

    if ($conn->query($sql)) {
        if ($conn->affected_rows > 0) {
            echo "Gra została usunięta.";
        } else {
            echo "Nie znaleziono gry o podanym ID.";
        }
    } else {
        echo "Błąd usuwania gry.";
    }
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuń grę</title>
</head>
<body>

<?php include 'nav.php'; ?>

<h1>Usuń grę</h1>

<form method="POST">
    <label>Podaj ID gry:</label>
    <input type="number" name="id" required>

    <button type="submit" name="usun">Usuń</button>
</form>

</body>
</html>

<?php
$conn->close();
?>
