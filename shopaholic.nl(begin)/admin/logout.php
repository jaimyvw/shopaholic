//logout.php destroy session

<?php
session_start();
session_destroy();
header ('location: login.php');
?>