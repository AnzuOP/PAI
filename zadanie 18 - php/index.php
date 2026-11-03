<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "warehouse"; //NAZWA TWOJEJ BAZY DANYCH

    //TWORZENIE POŁĄCZENIA
    $conn = new mysqli($host, $username, $password, $database);

    if($conn->connect_error){
        die("Połączenie nie powiodło się: " . $conn->connect_error); //SPRAWDZENIE CZY POŁĄCZENIE DZIAŁA
    }
    echo "Połączenie się powiodło";

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
    Nazwa: <input type="text" name="name"><br>
    Cena: <input type="number" name="price" step="0.01"><br>
    Ilość: <input type="number" name="amount"><br>
    <button type="submit" name="send">Wyślij</button>
</form>
    
<?php
    $conn; //ustanowienie połączenia, DO UZUPEŁNIENIA

    if(isset($_POST["name"]) && isset($_POST["price"]) && isset($_POST["amount"])){
        echo "Nazwa: ". $_POST["name"] . "<br>";
        echo "Cena: ". $_POST["price"] . "<br>";
        echo "Ilość: ". $_POST["amount"] . "<br>";

        $name = $_POST["name"];
        $price = $_POST["price"];
        $amount = $_POST["amount"];
        //TABELA Products
        //POLA: ID, NAME, PRICE, AMOUNT
        $sql = "INSERT INTO Products (name,price,amount) VALUES (?, ?, ?)";
        $stmt = $conn -> prepare($sql);  //PRZYGOTOWUJE NA POŁĄCZENIU ZAPYTANIE SQL 
    }
?>

</body>
</html>