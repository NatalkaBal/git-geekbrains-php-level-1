<?php
include "functions.php";
include "db-config.php";

$formSubmit = (!empty($_POST['review'])) ? strip_tags($_POST['review']) : "";
if ($formSubmit) {
    $userName = (!empty($_POST['name-user'])) ? strip_tags($_POST['name-user']) : "";
    $review  = (!empty($_POST['review-text'])) ? strip_tags($_POST['review-text']) : "";
    $date = date("m.d.y");

    $sql = "INSERT INTO reviews (name, review, data) VALUES ('$userName', '$review', '$date')";
    print_r($sql);
    if(mysqli_query($connect,$sql)){
        echo " Данные успешно сохранены!";
        header("Location:../index.php");
    }
    else{
        echo "Ошибка сохранения данных!";
    }
}
else {
    $goodsName = (!empty($_POST['name-goods'])) ? strip_tags($_POST['name-goods']) : "";
    $goodsTitel = (!empty($_POST['titel'])) ? strip_tags($_POST['titel']) : "";
    $goodsFullTitel = (!empty($_POST['full-titel'])) ? strip_tags($_POST['full-titel']) : "";
    $goodsPrice = (!empty($_POST['price'])) ? strip_tags($_POST['price']) : "";

    $path = $_SERVER['DOCUMENT_ROOT'];
    $uploadDir = $path . '/geekbrains-php-level-1/lesson-6/public_html/img/' . $_FILES['photo']['name'];
    $uploadDirSmall = $path . '/geekbrains-php-level-1/lesson-6/public_html/img/small/' . $_FILES['photo']['name'];
    $goodsPath = 'public_html/img/small/' . $_FILES['photo']['name'];

    if (move_uploaded_file($_FILES['photo']['tmp_name'], $uploadDir)) {
        //копируем загруженный файл
        copy($uploadDir, $uploadDirSmall);
        // Вызываем функцию уменьшить изображение до ширины в 250 пикселей, а высоту уменьшив пропорционально, чтобы не искажать изображение
        resize($uploadDirSmall, 250);
    } else {
        echo "Ошибка при загрузке файла";
    }

    $sql = "INSERT INTO goods (name, titel, `full-titel`, price, path) VALUES ('$goodsName', '$goodsTitel', '$goodsFullTitel', '$goodsPrice', '$goodsPath')";
    if(mysqli_query($connect,$sql)){
        echo " Данные успешно сохранены!";
        header("Location:admin.php");
    }
    else{
        echo "Ошибка сохранения данных!";
    }
}
