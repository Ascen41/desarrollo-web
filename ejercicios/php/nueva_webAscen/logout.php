<?php
session_start();
session_unset();
session_destroy();

header("location:ejercicio10_login.php");

?>