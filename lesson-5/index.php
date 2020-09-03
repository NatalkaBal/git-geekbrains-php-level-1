<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Gallery</title>
    <link rel="stylesheet" href="public_html/css/main.css">
    <link rel="stylesheet" href="public_html/css/lightbox.css">
    <link rel="stylesheet" href="public_html/css/magnific-popup.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="public_html/js/script.js" defer></script>
    <script src="public_html/js/jquery.magnific-popup.min.js" defer></script>
</head>

<body>

<header>
    <div class="header-wrap">
        <h1><a href="index.php">Gallery</a></h1>
        <section>
            <form action="templates/download-img.php" method="post" enctype="multipart/form-data">
                <input type="file" name="photo">
                <input type="submit" value="Загрузить">
            </form>
        </section>
    </div>
</header>

<section class="container">
    <?php
        include "templates/gallery.php";
    ?>
</section>

<?php
    include "templates/footer.php";
?>

