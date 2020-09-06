<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Single Goods</title>
    <link rel="stylesheet" href="../public_html/css/main.css">
</head>

<body>

<header>
    <div class="header-wrap">
        <h1><a href="../index.php">Сourses Online</a></h1>
    </div>
</header>

<section class="container">
    <?php
    include "db-config.php";
    $sql = "select * from `goods` where id =".$_GET['id'];
    $goods = mysqli_query($connect, $sql);

    if (mysqli_num_rows($goods) > 0) {
        while($data = mysqli_fetch_assoc($goods)) {
            $srcImg = str_replace("small/","", $data['path']);
            echo '<div class="wrap-goods-single">';
            echo '<div class="goods-img-single">';
            echo '<h3> '.$data['name'].'</h3> 
                <img id = '.$data['id'].' src="../'.$srcImg.'" alt='.$data['name'].' style="width: 450px;"/>';
            echo '</div>';
            echo '<span class="goods-price-single">Цена: '.$data['price'].' </span>';
            echo '<div class="goods-titel-single"><h4>Полное описание</h4><p class = "text-titel"> '.$data['full-titel'].'</p> </div></div></div>';
        }
    } else {
        echo "Товар не найден в базе данных";
    }
    ?>
</section>

<?php
include "footer.php";
?>
