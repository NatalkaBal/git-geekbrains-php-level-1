<h2>Отзывы наших клиентов</h2>
<?php
    include "templates/db-config.php";
    $sql = "SELECT * FROM `reviews`";
    $reviews = mysqli_query($connect,$sql);

    if (mysqli_num_rows($reviews) > 0) {
        while($data = mysqli_fetch_assoc($reviews)) {
            echo '<div class="wrap-reviews">';
            echo '<h4> '.$data['name'].'</h4> 
                  <p class = "review-titel"> '.$data['review'].'</p> 
                  <time>'.$data['data'].'</time>
                  </div>';
        }
    } else {
        echo "Отзывы не обнаружены";
    }
?>

<form action="templates/db-addItem.php" method="post" enctype="multipart/form-data">

    <h2>Оставьте свой отзыв</h2>
    <div class="item-form-review">
        <p>Ваше имя</p>
        <input type="text" name="name-user" style="width:100%;">
    </div>

    <div class="item-form-review">
        <p>Отзыв</p>
        <textarea name="review-text" rows="5""></textarea>
    </div>

    <div class="item-form">
        <input type="submit" name="review" value="Отправить">
    </div>

</form>

