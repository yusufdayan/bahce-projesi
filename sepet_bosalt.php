<?php
session_start();
unset($_SESSION['sepet']); // Sepeti tamamen yok et
header("Location: sepet.php");
?>