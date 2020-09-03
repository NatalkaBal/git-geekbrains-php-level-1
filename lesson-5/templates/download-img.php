<?php
include "../templates/db-config.php";
include "../templates/functions.php";

$path = $_SERVER['DOCUMENT_ROOT'];
$uploadDir = $path.'/geekbrains-php-level-1/lesson-5/public_html/img/'.$_FILES['photo']['name'];
$uploadDirSmall = $path.'/geekbrains-php-level-1/lesson-5/public_html/img/small/'.$_FILES['photo']['name'];
$sizeImg = $_FILES['photo']['size'];
$nameImg = $_FILES['photo']['name'];
$dbPath = 'public_html/img/small/'.$_FILES['photo']['name'];

if(move_uploaded_file($_FILES['photo']['tmp_name'],$uploadDir)){
    echo "Файл успешно загружен!";
    //копируем загруженный файл
    copy($uploadDir, $uploadDirSmall);
    // Вызываем функцию уменьшить изображение до ширины в 200 пикселей, а высоту уменьшив пропорционально, чтобы не искажать изображение
    resize($uploadDirSmall, 250);
    //добавим в базу данных
    $sql = "INSERT INTO gallery (path, size, name, col) VALUES ('$dbPath', '$sizeImg', '$nameImg', '0')";
    if(mysqli_query($connect,$sql)){
        echo " Данные сохранены!";
    }
    else{
        echo "Ошибка сохранения данных!";
    }
}
else{
    echo "Ошибка при загрузке файла";
}