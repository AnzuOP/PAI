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
    <?php include 'nav.php'; ?>

    <form action="<?= basename($_SERVER['PHP_SELF']) ?>" method="POST">
        <div>
            <label for="game_id">ID:</label>
            <input type="number" id="game_id" name="id" min="1">
        </div>

        <div>
            <label for="title">Tytuł:</label>
            <input type="text" id="title" name="title" required>
        </div>

        <div>
            <label for="genre">Gatunek:</label>
            <input type="text" id="genre" name="genre" required>
        </div>

        <div>
            <label for="platform">Platforma:</label>
            <input type="text" id="platform" name="platform" required>
        </div>

        <div>
            <label for="release_year">Rok wydania:</label>
            <input type="number" id="release_year" name="release_year" min="1950" max="2030" required>
        </div>

        <div>
            <label for="rating">Ocena (1–10):</label>
            <input type="number" id="rating" name="rating" min="1" max="10" step="0.1" required>
        </div>

        <button type="submit" name="send">Wyślij</button>
    </form>
    
<?php
if (isset($_POST["id"], $_POST["title"], $_POST["genre"], $_POST["platform"], $_POST["release_year"], $_POST["rating"])) {

    $id = $_POST["id"];
    $title = $_POST["title"];
    $genre = $_POST["genre"];
    $platform = $_POST["platform"];
    $release_year = $_POST["release_year"];
    $rating = $_POST["rating"];

    $sql = "INSERT INTO `gry` (`id`, `tytul`, `gatunek`, `platforma`, `rok_wydania`, `ocena`) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt) {
        
        mysqli_stmt_bind_param($stmt, "isssid", $id, $title, $genre, $platform, $release_year, $rating);

        if (mysqli_stmt_execute($stmt)) {
            echo "<p>Dodano grę!</p>";
        } else {
            echo "<p>Błąd dodania: " . mysqli_stmt_error($stmt) . "</p>";
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "<p>Błąd przygotowania zapytania: " . mysqli_error($conn) . "</p>";
    }

    mysqli_close($conn);
}
?>

</body>
</html>
