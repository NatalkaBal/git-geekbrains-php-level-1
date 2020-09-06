<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Админка</title>
    <link rel="stylesheet" href="../public_html/css/main.css">
</head>

<body>

<header>
    <div class="header-wrap">
        <h1><a href="../index.php">Сourses Online</a></h1>
    </div>
</header>

<section class="form">
    <form action="db-addItem.php" method="post" enctype="multipart/form-data">

       <div class="item-form">
           <p>Название товара</p>
           <input type="text" name="name-goods" style="width:100%";>
       </div>

        <div class="item-form">
            <p>Краткое описание товара</p>
            <textarea name="titel" rows="5"></textarea>
        </div>

        <div class="item-form">
            <p>Полное описание товара</p>
            <textarea name="full-titel" rows="10"></textarea>
        </div>

        <div class="item-form">
            <p>Картинка товара</p>
            <input type="file" name="photo">
        </div>

        <div class="item-form">
            <p>Цена товара</p>
            <input type="number" name="price">
        </div>

        <div class="item-form">
            <input type="submit" value="Отправить">
        </div>

    </form>
</section>

<?php
    include "footer.php";
?>
