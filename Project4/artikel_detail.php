<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM artikel WHERE tanggal = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "Artikel tidak ditemukan.";
        exit;
    }
} else {
    echo "ID artikel tidak ditemukan.";
    exit;
}
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
                <li><a href="#blog">Blog</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </nav>
    <main>
        <section id="blog">
            <h1>Blog</h1>
            <?php if ($result->num_rows > 0): ?>
                <article>
                    <h2><?php echo $row['judul']; ?></h2>
                    <p><?php echo $row['konten']; ?></p>
                </article>
            <?php else: ?>
                <p>Artikel tidak ditemukan.</p>
            <?php endif; ?>
        </section>
    </main>
    <div class="lightbox">
        <span class="lightbox-close">&times;</span>
        <img src="" alt="" class="lightbox-image">
    </div>
</body>
</html>