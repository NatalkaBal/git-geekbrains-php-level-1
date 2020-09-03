<?php
//определим абсолютный путь к корню сайта
$path = $_SERVER['DOCUMENT_ROOT'];
$dir = 'public_html/img/';
$images = scandir($dir);
?>

<table>
<?php
$k = 0; // Вспомогательный счётчик для перехода на новые строки
for ($i=2; $i<count($images); $i++){
    //если вдруг не картинка
    if(stristr($images[$i], '.png') || stristr($images[$i], '.jpg')) {
        if ($k % 4 == 0)
            echo "<tr>";
        echo "<td>";
        echo
            '<a class="image-popup-vertical-fit" href="'.$dir.$images[$i].'" ">
            <img src='.$dir.$images[$i].' alt='.$images[$i].' style="width: 250px;"/>
        </a>';
        echo "</td>";
        if ((($k + 1) % 4 == 0) || (($i + 1) == count($images)))
            echo "</tr>";
        $k++;
    }
}
?>
</table>

