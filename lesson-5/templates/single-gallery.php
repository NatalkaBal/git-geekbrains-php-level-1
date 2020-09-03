<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Single Gallery</title>
    <link rel="stylesheet" href="../public_html/css/main.css">
</head>

<body>

<header>
    <div class="header-wrap">
        <h1><a href="../index.php">Gallery</a></h1>
    </div>
</header>

<section class="container">
    <?php
        //получим фото по id
        include "db-config.php";
        $sql = "select * from gallery where id =".$_GET['id'];
        $images = mysqli_query($connect, $sql);
        $photo = mysqli_fetch_assoc($images)['name'];
        //обнавим счетчик просмотра
        $col   = mysqli_fetch_assoc($images)['col'] + 1;
        $sql2 = "UPDATE gallery SET col=$col WHERE id =".$_GET['id'];
        mysqli_query($connect,$sql2);
        echo '<img src="../public_html/img/'.$photo.'" />';
    ?>
</section>

<?php
    include "footer.php";
?>
