<?php   
session_start();
unset($_SESSION['unm']);
session_destroy();  
header("Location: index.html");

?>