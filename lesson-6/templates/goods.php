<?php
//получим массив товаров из базы данных
include "templates/db-config.php";
$sql = "SELECT * FROM `goods`";
$goods = mysqli_query($connect,$sql);

if (mysqli_num_rows($goods) > 0) {
    while($data = mysqli_fetch_assoc($goods)) {
        echo '<div class="wrap-goods">';
        echo '<div class="goods-img">';
        echo '<h3> '.$data['name'].'</h3> 
            <a href="templates/single-goods.php?id='.$data['id'].'">
                <img id = '.$data['id'].' src='.$data['path'].' alt='.$data['name'].' style="width: 250px;"/>
            </a>';
        echo '</div>';
        echo '<span class="goods-price">Цена: '.$data['price'].' </span>';
        echo '<div class="goods-titel"><p class = "text-titel"> '.$data['titel'].'</p> </div></div></div>';
    }
} else {
    echo "Товары не найдены";
}


