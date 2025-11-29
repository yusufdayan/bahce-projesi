<?php include 'ust_kisim.php'; ?>

<h2>🛒 Alışveriş Sepetim</h2>
<hr>

<?php
// Sepet boş mu kontrol et
if(!isset($_SESSION['sepet']) || count($_SESSION['sepet']) == 0) {
    echo "<p>Sepetinizde henüz ürün yok.</p><a href='index.php'>Alışverişe Başla</a>";
} else {
?>

<table border="1" width="100%" cellpadding="10" style="border-collapse: collapse; text-align:center;">
    <tr style="background:#eee;">
        <th>Ürün Adı</th>
        <th>Adet</th>
        <th>Fiyat</th>
        <th>Toplam</th>
        <th>İşlem</th>
    </tr>

    <?php
    $genel_toplam = 0;

    // Session'daki sepeti döngüye sokuyoruz
    // $id: Ürün ID'si, $adet: Kaç tane olduğu
    foreach($_SESSION['sepet'] as $id => $adet) {
        // Veritabanından bu ürünün bilgilerini çekelim
        $urun_sor = mysqli_query($baglanti, "SELECT * FROM urunler WHERE id='$id'");
        $urun = mysqli_fetch_assoc($urun_sor);

        $ara_toplam = $urun['fiyat'] * $adet;
        $genel_toplam += $ara_toplam;
    ?>
        <tr>
            <td><?php echo $urun['urun_adi']; ?></td>
            <td><?php echo $adet; ?></td>
            <td><?php echo $urun['fiyat']; ?> TL</td>
            <td><?php echo $ara_toplam; ?> TL</td>
            <td>
                <a href="sepet_sil.php?id=<?php echo $id; ?>" style="color:red; font-weight:bold;">[Sil X]</a>
            </td>
        </tr>
    <?php } ?>

    <tr>
        <td colspan="3" style="text-align:right; font-weight:bold;">GENEL TOPLAM:</td>
        <td style="color:green; font-weight:bold; font-size:18px;"><?php echo $genel_toplam; ?> TL</td>
        <td>
            <button style="background:green; color:white; padding:10px; border:none;">SATIN AL</button>
        </td>
    </tr>

</table>

<br>
<a href="sepet_bosalt.php" style="background:red; color:white; padding:10px; text-decoration:none;">Sepeti Komple Boşalt</a>

<?php } ?>

</div>
</body>
</html>