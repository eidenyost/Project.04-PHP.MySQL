<?php
include 'koneksi.php';

$sql = "SELECT * FROM artikel ORDER BY tanggal DESC LIMIT 3";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eidenyost</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>
<body>
    <nav>
        <div class="nav_content">
            <div class="logo"><a href="#">eidenyost (:</a></div>
            <div class="menu-toggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <ul>
                <li><a href="#About">About</a></li>
                <li><a href="#gallery">Gallery</a></li>
                <li><a href="artikel.php">Blog</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </nav>
    <main>
        <section id="About" class="animate full-section">
            <div class="About_container">
                <div class="content">
                    <p class="subtitle">Selamat Datang Sodara</p>
                    <h1 class="title">Perkenalkan saya <span>Eidenyost Dunatows Momuat Wahani</span></h1>
                    <p class="deskripsi">
                        Saya seorang Mahasiswa dari UNIVERSITAS SAM RATULANGI MANADO. 
                        Tepatnya saya berkuliah di Fakultas TEKNIK dan mengambil
                        Program Studi S1 Teknik Informatika. Saya cukup menyukai program studi ini 
                        dan saya berharap saya bisa mendapat pengetahuan dan 
                        pengalaman yang luas untuk bisa mencapai kesuksesan
                    </p>
                </div>
                <div class="gambar">
                    <img src="asset/img/Profil.jpeg" alt="Profil">
                </div>
            </div>
        </section>
    </main>
    <section id="gallery" class="animate full-section">
        <div class="gallery_container">
            <h2>Gallery</h2>
            <div class="gambar">
                <img src="asset/img/Gambar 1.JPG" alt="Gambar 1">
                <img src="asset/img/Gambar 2.JPG" alt="Gambar 2">
                <img src="asset/img/Gambar 3.JPG" alt="Gambar 3">
                <img src="asset/img/Gambar 4.JPG" alt="Gambar 4">
                <img src="asset/img/Gambar 5.JPG" alt="Gambar 5">
            </div>
        </div>
        <div class="gallery-container"></div>
    </section>
    <section id="blog">
    <h1>Blog</h1>
    <?php if ($result->num_rows > 0): ?>
        <?php while ($row = $result->fetch_assoc()): ?>
        <?php endwhile; ?>
        <div class="blog-content">
            <article><h2>Logitech G Pro X Superlight Wireless Gaming Mouse</h2>
            <img src="asset/img/1.png" alt="1" width="250"></article>
            <article><h2>Keyboard Ajazz AK820 Pro</h2>
            <img src="asset/img/2.png" alt="2" width="250"></article>
            <article><h2>Prosesor Intel® Core™ i9</h2>
            <img src="asset/img/3.png" alt="3" width="250"></article>
        </div>
    <?php else: ?>
        <p></p>
    <?php endif; ?>
    <a href="artikel.php">See All Articles</a>
</section>
<div class="blog-pagination"></div>
    </section>
    <section id="contact">
        <h2>CONTACT</h2>
        <div>
            <img src="asset/img/ig.jpeg" width="20" alt="Instagram">
            <img src="asset/img/email.jpeg" width="20" alt="Email">
            <p>Instagram : @eidenyost</p>
            <p>Email : eidenyostwahani@gmail.com</p>
        </div>
    </section>
    <div class="lightbox">
        <span class="lightbox-close">&times;</span>
        <img src="" alt="" class="lightbox-image">
    </div>
</body>
</html>