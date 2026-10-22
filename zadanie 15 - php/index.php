<?php
    $name = "username";
    $value = "Bartek";

    //setcookie(name, value, expire, path, domain, secure, httponly);
    //wymagane: name
    //reszta opcjonalna
    setcookie($name, $value, time() + (86400*30), "/");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    if(isset($_COOKIE[$name])){
        echo "Ciacho: ". $name." jest ustawione.";
        echo "Wartość: ". $_COOKIE[$name];
    } else {
        echo "Ciacho ". $name . " nie jest ustawione!";
    }
    //MODYFIKACJA
    setcookie($name, "Słupina", time() + (86400*30), "/");
    //USUWANIE
    setcookie("username", "", time()-3600);
    //CZY COOKIES SĄ WŁĄCZONE?
    if(count($_COOKIE) > 0){
        echo " Ciacha włączone";
    } else {
        echo " Ciacha wyłączone";
    }
?>
</body>
</html>

