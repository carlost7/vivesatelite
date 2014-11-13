<?php
session_start();

// remove all session variables
session_unset();

// destroy the session
session_destroy();

session_start();
$_SESSION['mensaje']="vuelve pronto";
header('Location: ../index.php');
?>