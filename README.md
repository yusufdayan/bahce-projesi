# 🌿 Bahçe Dünyası - PHP E-Ticaret Projesi

Bu proje, üniversite "Sistem Analizi / Web Programlama" dersi kapsamında geliştirilmiş, bahçe ve bahçe ürünlerinin sergilendiği ve sepete eklenebildiği dinamik bir web sitesidir.

## 🚀 Proje Hakkında
Proje **Procedural (Yordamsal) PHP** mimarisi kullanılarak, herhangi bir hazır framework kullanılmadan **saf kod (Native PHP)** ile yazılmıştır. Veritabanı yönetimi için **MySQL** kullanılmıştır.

## 🛠 Kullanılan Teknolojiler
* **Back-End:** PHP (Procedural Yapı)
* **Veritabanı:** MySQL (PhpMyAdmin)
* **Front-End:** HTML5, CSS3
* **Sunucu:** Apache (XAMPP/WAMP)

## ✨ Özellikler

### 👤 Kullanıcı Tarafı
* **Dinamik Kategori Sistemi:** Mobilya, Aydınlatma, Alet Edevat vb. kategorilere göre filtreleme.
* **Ürün İnceleme:** Ürünlerin resimli detay sayfaları.
* **Sepet Sistemi:** `Session` (Oturum) kullanılarak veritabanına yük bindirmeden çalışan sepet mantığı.
* **Üyelik Sistemi:** Kullanıcı kayıt olma ve güvenli giriş yapma.

### 🔑 Admin Paneli
* **Ürün Yönetimi:** Veritabanına ürün adı, fiyatı, açıklaması ekleme.
* **Resim Yükleme:** Admin panelinden ürünlere fotoğraf yükleme özelliği.
* **Güvenlik:** Yetkisiz erişime karşı session kontrolü.

---

## ⚙️ Kurulum (Projeyi Çalıştırma)

Bu projeyi kendi bilgisayarınızda çalıştırmak için aşağıdaki adımları izleyin:

1.  **Veritabanı Kurulumu:**
    * `bahce_db.sql` dosyasını PhpMyAdmin üzerinden içe aktarın (Import edin).
    * Veritabanı adının `bahce_db` olduğundan emin olun.

2.  **Dosya Konumu:**
    * Proje dosyalarını `C:/xampp/htdocs/` veya `C:/wamp64/www/` klasörünün içine atın.

3.  **Bağlantı Ayarları:**
    * `baglan.php` dosyasını açarak kendi veritabanı kullanıcı adı ve şifrenizi girin (Genelde root ve boş şifredir).

---

## 🔐 Giriş Bilgileri (Test İçin)

Hızlı test etmek için aşağıdaki admin hesabını kullanabilirsiniz:

| Yetki | E-Posta | Şifre |
| :--- | :--- | :--- |
| **Admin (Yönetici)** | admin@admin.com | 1234 |
| **Normal Üye** | (Kayıt Ol sayfasından yeni üye oluşturabilirsiniz) | - |

---

### 👨‍💻 Geliştirici
Yusuf Dayan
