<?php
   $currentPage = basename($_SERVER['PHP_SELF']); 
?>

<nav>

    <link rel="stylesheet" href="style.css">

    <a href ="index.php" class="<?= $currentPage == 'index.php' ? 'active' : '' ?>"> Strona startowa </a>

    <a href ="dodaj.php" class="<?= $currentPage == 'dodaj.php' ? 'active' : '' ?>"> Dodaj grę </a>

    <a href ="lista.php" class="<?= $currentPage == 'lista.php' ? 'active' : '' ?>"> Pokaż gry/grę </a> 

    <a href ="usun.php" class="<?= $currentPage == 'usun.php' ? 'active' : '' ?>"> Usuń grę </a>

    <a href ="edytuj.php" class="<?= $currentPage == 'edytuj.php' ? 'active' : '' ?>"> Zaktualizuj grę </a>

    <a href ="footer.php" class="<?= $currentPage == 'footer.php' ? 'active' : '' ?>"> Podsumowanie </a>
</nav>