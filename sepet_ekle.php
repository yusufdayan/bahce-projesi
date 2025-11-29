<?php
session_start();
ob_start(); // Yönlendirme hatası olmaması için

$id = $_GET['id'];

if(isset($id)) {
    if(!isset($_SESSION['sepet'])) {
        $_SESSION['sepet'] = array();
    }

    if(isset($_SESSION['sepet'][$id])) {
        $_SESSION['sepet'][$id]++;
    } else {
        $_SESSION['sepet'][$id] = 1;
    }
}

// Javascript alert yerine direkt sepete atıyoruz
header("Location: sepet.php");
exit;
?>