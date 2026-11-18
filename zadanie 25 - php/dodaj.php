
<?php
    require_once "db_connect.php";
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dodaj grę</title>
</head>
<body>

    <?php include "nav.php"; ?>

    <form action="<?= basename($_SERVER['PHP_SELF']) ?>" method="POST">

        <div>
            <label>Tytuł:</label>
            <input type="text" name="title" required>
        </div>

        <div>
            <label>Gatunek:</label>
            <input type="text" name="genre" required>
        </div>

        <div>
            <label>Platforma:</label>
            <input type="text" name="platform" required>
        </div>

        <div>
            <label>Rok wydania:</label>
            <input type="number" name="release_year" required>
        </div>

        <div>
            <label>Ocena:</label>
            <input type="number" name="rating" required>
        </div>

        <button type="submit" name="send">Wyślij</button>

    </form>

<?php

if (isset($_POST["send"])) {

    $title = $_POST["title"];
    $genre = $_POST["genre"];
    $platform = $_POST["platform"];
    $release_year = $_POST["release_year"];
    $rating = $_POST["rating"];

    $sql = "INSERT INTO gry
    (tytul, gatunek, platforma, rok_wydania, ocena)
    VALUES ('$title', '$genre', '$platform', '$release_year', '$rating')";

    if ($conn->query($sql)) {
        echo "Dodano grę!";
    } else {
        echo "Błąd dodania: " . $conn->error;
    }

}

?>

</body>
</html>
