<?php
include "../templates/functions.php";
$path = $_SERVER['DOCUMENT_ROOT'];
$uploadDir = $path.'/geekbrains-php-level-1/lesson-4/public_html/img/'.$_FILES['photo']['name'];
$uploadDirSmall = $path.'/geekbrains-php-level-1/lesson-4/public_html/img/small/'.$_FILES['photo']['name'];

if(move_uploaded_file($_FILES['photo']['tmp_name'],$uploadDir)){
    echo "Файл успешно загружен!";
    //копируем загруженный файл
    copy($uploadDir, $uploadDirSmall);
    // Вызываем функцию уменьшить изображение до ширины в 200 пикселей, а высоту уменьшив пропорционально, чтобы не искажать изображение
    resize($uploadDirSmall, 200);
}
else{
    echo "Ошибка при загрузке файла";
}