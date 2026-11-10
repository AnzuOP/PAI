<?php
   $currentPage = basename($_SERVER['PHP_SELF']); 
?>

<nav>
    <a href ="index.php" class="<?= $currentPage == 'index.php' ? 'active' : '' ?>"> Start </a> 
    <a href ="contact.php" class="<?= $currentPage == 'contact.php' ? 'active' : '' ?>"> Kontakt </a> 
    <a href ="about.php" class="<?= $currentPage == 'about.php' ? 'active' : '' ?>"> O nas </a> 
</nav>