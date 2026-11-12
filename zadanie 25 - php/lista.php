<?php
    require_once "db_connect.php";
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista gier</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 15px;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>

<?php include 'nav.php'; ?>

    <h1>Lista wszystkich gier</h1>

    <?php
    $sql = "SELECT `id`, `tytul`, `gatunek`, `platforma`, `rok_wydania`, `ocena` FROM `gry`";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        $liczba_gier = mysqli_num_rows($result);
        echo "<p>Łączna liczba gier w bazie: <strong>" . $liczba_gier . "</strong></p>";

        if ($liczba_gier > 0) {
            echo "<table>";
            echo "<thead>
                    <tr>
                        <th>ID</th>
                        <th>Tytuł</th>
                        <th>Gatunek</th>
                        <th>Platforma</th>
                        <th>Rok wydania</th>
                        <th>Ocena</th>
                    </tr>
                  </thead>";
            echo "<tbody>";

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($row['id']) . "</td>";
                echo "<td>" . htmlspecialchars($row['tytul']) . "</td>";
                echo "<td>" . htmlspecialchars($row['gatunek']) . "</td>";
                echo "<td>" . htmlspecialchars($row['platforma']) . "</td>";
                echo "<td>" . htmlspecialchars($row['rok_wydania']) . "</td>";
                echo "<td>" . htmlspecialchars($row['ocena']) . "</td>";
                echo "</tr>";
            }

            echo "</tbody>";
            echo "</table>";
        } else {
            echo "<p>Brak gier w bazie danych.</p>";
        }

        mysqli_free_result($result);
    } else {
        echo "<p>Błąd zapytania: " . mysqli_error($conn) . "</p>";
    }

    mysqli_close($conn);
    ?>

</body>
</html>
