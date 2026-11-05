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
    Nazwa: <input type="text" name="name"><br>
    Cena: <input type="number" name="price"><br>
    Ilość: <input type="number" name="amount"><br>
    <button type="submit" name="send">Wyślij</button>
</form>



<?php
     if(isset($_POST["name"]) && isset($_POST["price"]) && isset($_POST["amount"])){
        $name = $_POST["name"];
        $price = $_POST["price"];
        $amount = $_POST["amount"];
        $id = $_POST["id"];

        $sql = "UPDATE `products` SET 
        `name`='$name',
        `amount`='$amount',
        `price`='$price' 
        WHERE 1" ;
        
        $result = mysqli_query($conn, $sql);

        if($result){
            echo "Zaktualizowano rekord o id: " . $id;
        } else {
            echo "Nie: " . mysqli_error($conn);
        }

        mysqli_close($conn);
    }
?>
</body>
</html>