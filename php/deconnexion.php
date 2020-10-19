<?php
SESSION_start();
$SESSION = array();
SESSION_destroy();
header("Location: ../index.php");

?>