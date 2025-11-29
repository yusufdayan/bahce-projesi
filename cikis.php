<?php
session_start();
session_destroy(); // Tüm oturumları siler
header("Location: index.php"); // Anasayfaya atar
?>