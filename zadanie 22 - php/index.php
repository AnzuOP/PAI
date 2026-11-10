<?php
    require_once "db_connect.php"; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="POST">
    ID: <input type="number" name="id"><br>
    <button type="submit" name="send">Wyślij</button>
</form>
<?php
     if(isset($_POST["id"])){
        $id = $_POST["id"];

        $sql = "DELETE FROM `PRODUCTS` WHERE `id` = '$id'";
        
        $result = mysqli_query($conn, $sql);

        if($result){
            echo "Usunięto rekord o id: " . $id;
        } else {
            echo "Błąd usunięcia: " . mysqli_error($conn);
        }

        mysqli_close($conn);
    }
?>
</body>
</html>