<input type="checkbox" id="toggleMenu">
<label for="toggleMenu" class="menu-icon">&#9776;</label>

<header>
<div id="brand"><a href="index.php">TriaFCT</a></div>
</header>
<nav class="menu">

<?php
if(isset($_SESSION['privilegio'])){
$a = $_SESSION['privilegio'];
}
else{
$a = 1;
}

include "menu$a.php";
?> 
</nav>
