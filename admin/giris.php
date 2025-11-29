<?php
session_start();
include '../baglan.php';

$mesaj = ""; // Ekrana basılacak mesaj değişkeni

if(isset($_POST['giris_yap'])) {
    $email = $_POST['email'];
    $sifre = $_POST['sifre'];

    $sor = mysqli_query($baglanti, "SELECT * FROM uyeler WHERE email='$email' AND sifre='$sifre' AND yetki=1");

    if(mysqli_num_rows($sor) > 0) {
        $kullanici = mysqli_fetch_assoc($sor);
        $_SESSION['admin_id'] = $kullanici['id'];
        header("Location: index.php"); // JS yok, PHP ile yönlendirme
        exit;
    } else {
        // Alert yok, değişkene yazı atıyoruz
        $mesaj = "<div style='color:red; background:#ffcccc; padding:10px;'>Hatalı bilgi veya yetkiniz yok!</div>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Giriş</title>
    <style>
        body{ text-align:center; margin-top:100px; font-family:sans-serif; background:#333; color:white; }
        input{ display:block; margin:10px auto; padding:10px; width:200px; }
        button{ padding:10px 20px; cursor:pointer; background: orange; border:none; }
    </style>
</head>
<body>
    <h2>YÖNETİCİ GİRİŞİ</h2>
    
    <?php echo $mesaj; ?>

    <form method="post">
        <input type="email" name="email" placeholder="E-Posta" required>
        <input type="password" name="sifre" placeholder="Şifre" required>
        <button type="submit" name="giris_yap">Giriş Yap</button>
    </form>
</body>
</html>

