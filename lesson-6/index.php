<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Сourses</title>
    <link rel="stylesheet" href="public_html/css/main.css">
    <script src="public_html/js/script.js" defer></script>
</head>

<body>

<header>
    <div class="header-wrap">
        <h1><a href="index.php">Сourses Online</a></h1>
        <a href="templates/admin.php">Ввод сведеней о товарах</a>
    </div>
</header>

<section class="container">
    <?php
        include "templates/goods.php";
    ?>
</section>

<section class="review">
    <?php
        include "templates/review.php";
    ?>
</section>

<?php
    include "templates/footer.php";
?>

