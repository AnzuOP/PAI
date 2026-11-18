<?php

require_once "db_connect.php";

if(isset($_POST["send"])) {
    $id = $_POST["id"];

    $sql = "SELECT * FROM gry WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Edytuj</title>
</head>
<body>

<?php include "nav.php"; ?>

<form action="<?= basename($_SERVER['PHP_SELF']) ?>" method="POST">
    ID: <input type="number" name="id" required>
    <button type="submit" name="send">Wczytaj</button>
</form>

<?php
if(isset($row)) {
?>

<form action="<?= basename($_SERVER['PHP_SELF']) ?>" method="POST">

    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

    Tytuł:
    <input type="text" name="tytul" value="<?php echo $row['tytul']; ?>" required>

    <button type="submit" name="update">Zapisz zmiany</button>

</form>

<?php
}

if(isset($_POST["update"])) {
    $id = $_POST["id"];
    $tytul = $_POST["tytul"];

    $sql = "UPDATE gry SET tytul = '$tytul' WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);

    if($result) {
        echo "Zaktualizowano grę!";
    } else {
        echo "Błąd: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>

</body>
</html>
