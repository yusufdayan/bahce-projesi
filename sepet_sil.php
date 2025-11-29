<?php
session_start();
$id = $_GET['id'];
unset($_SESSION['sepet'][$id]); // O id'yi sepetten uçur
header("Location: sepet.php");
?>