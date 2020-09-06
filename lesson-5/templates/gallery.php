<?php
//получим массив изображений из базы данных
include "templates/db-config.php";
$sql = "SELECT * FROM `gallery` ORDER BY `gallery`.`col` DESC";
$images = mysqli_query($connect,$sql);
?>

<table>
<?php
$k = 0; // Вспомогательный счётчик для перехода на новые строки
while($data = mysqli_fetch_assoc($images)){
    $i = 1;
    //если вдруг не картинка
    if(stristr($data['name'], '.png') || stristr($data['name'], '.jpg')) {
        if ($k % 4 == 0)
            echo "<tr>";
        echo "<td>";
        echo
            '<a href="templates/single-gallery.php?id='.$data['id'].'">
                <img id = '.$data['id'].' src='.$data['path'].' alt='.$data['name'].' style="width: 250px;"/>
            </a>';
        echo "</td>";
        if ((($k + 1) % 4 == 0) || (($i + 1) == count($data)))
            echo "</tr>";
        $k++;
    }
}
?>
</table>

