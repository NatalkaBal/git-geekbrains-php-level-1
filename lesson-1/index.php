<h1 class="titel">Урок 1. Введение в PHP</h1>
<h2>Задание 1</h2>
<p>Установить программное обеспечение: веб-сервер, базу данных, интерпретатор, текстовый редактор и проверить, что всё работает правильно.</p>
<h2>Решение 1</h2>
<p>Веб-сервер: Apache; базу данных: MySQL; Bracket; PhpStorm. Все работает замечательно!</p>
<hr>

<h2>Задание 3</h2>
<p><?='$a = 5;'?></p>
<p><?="\$b = '05';"?></p>
<p>
    <?php    
        $a = 5;
        $b = '05';
        echo 'var_dump($a == $b): '.var_dump($a == $b).' Почему true? т.к == не сравнивает типы данных, а сравнивает их значения;';
    ?>
</p>
<p><?="var_dump((int)'012345'): ".var_dump((int)'012345').' Почему 12345? т.к int преобразует строку в число;'?></p>
<p><?='var_dump((float)123.0 === (int)123.0): '.var_dump((float)123.0 === (int)123.0).' Почему false? т.к === строгое сравнение, в нашем случае тип данных не совпадает int - целое число, а float - число с плавающей запятой;'?> </p>
<p><?="var_dump((int)0 === (int)'hello, world'): ".var_dump((int)0 === (int)'hello, world').' Почему true? т.к int пребразует строку в число 0 и следовательно строгое равенство по типу и по значению.'?> </p>
<hr>

<h2>Задание 4</h2>
<p>Используя имеющийся HTML-шаблон, сделать так, чтобы главная страница генерировалась через PHP. Создать блок переменных в начале страницы. Сделать так, чтобы h1, title и текущий год генерировались в блоке контента из созданных переменных.</p>
<h2>Решение 4</h2>
<p>Объявление переменных:</p>
<div class="code-wrap">
    <code class="php">&lt;?php</code>
    <code>$h1 = 'header-1';</code>
    <code>$title = 'minimalistica';</code>
    <code>$currentYear = date('Y').' год';</code>
    <code class="php">?&gt;</code>
</div>
<p>Вставляем в разметку:</p>
<div class="code-wrap">
    <code>&lt;title&gt;&lt;?= $title ?&gt;&lt;/title&gt;</code>
    <code>&lt;h1&gt;&lt;?= $h1 ?&gt;&lt;/h1&gt;</code>
    <code>&lt;?= $currentYear ?&gt;</code>
    <code>&lt;em&gt;&lt;?=$title?&gt;&lt;/em&gt;</code>
</div>

<?php 
    $h1 = 'header-1';
    $title = 'minimalistica';
    $currentYear = date('Y').' год';
?>

<hr>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="author" content="Luka Cvrk (www.solucija.com)" />
    <link rel="stylesheet" href="css/main.css" type="text/css" />
    <title><?= $title ?></title>
</head>

<body>
    <div id="content">
        <h1><?= $h1 ?></h1>

        <ul id="menu">
            <li><a href="#">home</a></li>
            <li><a href="#">archive</a></li>
            <li><a href="#">contact</a></li>
        </ul>

        <div class="post">
            <div class="details">
                <h2><a href="#">Nunc commodo euismod massa quis vestibulum</a></h2>
                <p class="info">posted 3 hours ago in <a href="#">general</a></p>

            </div>
            <div class="body">
                <p>Nunc eget nunc libero. Nunc commodo euismod massa quis vestibulum. Proin mi nibh, dignissim a pellentesque at, ultricies sit amet sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vel lorem eu libero laoreet facilisis. Aenean placerat, ligula quis placerat iaculis, mi magna luctus nibh, adipiscing pretium erat neque vitae augue. Quisque consectetur odio ut sem semper commodo. Maecenas iaculis leo a ligula euismod condimentum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut enim risus, rhoncus sit amet ultricies vel, aliquet ut dolor. Duis iaculis urna vel massa ultricies suscipit. Phasellus diam sapien, fermentum a eleifend non, luctus non augue. Quisque scelerisque purus quis eros sollicitudin gravida. Aliquam erat volutpat. Donec a sem consequat tortor posuere dignissim sit amet at ipsum.</p>
            </div>
            <div class="x"></div>
        </div>

        <div class="col">
            <h3><a href="#">Ut enim risus rhoncus</a></h3>
            <p>Quisque consectetur odio ut sem semper commodo. Maecenas iaculis leo a ligula euismod condimentum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut enim risus, rhoncus sit amet ultricies vel, aliquet ut dolor. Duis iaculis urna vel massa ultricies suscipit. Phasellus diam sapien, fermentum a eleifend non, luctus non augue. Quisque scelerisque purus quis eros sollicitudin gravida. Aliquam erat volutpat. Donec a sem consequat tortor posuere dignissim sit amet at.</p>
            <p>&not; <a href="#">read more</a></p>
        </div>
        <div class="col">
            <h3><a href="#">Maecenas iaculis leo</a></h3>
            <p>Quisque consectetur odio ut sem semper commodo. Maecenas iaculis leo a ligula euismod condimentum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut enim risus, rhoncus sit amet ultricies vel, aliquet ut dolor. Duis iaculis urna vel massa ultricies suscipit. Phasellus diam sapien, fermentum a eleifend non, luctus non augue. Quisque scelerisque purus quis eros sollicitudin gravida. Aliquam erat volutpat. Donec a sem consequat tortor posuere dignissim sit amet at.</p>
            <p>&not; <a href="#">read more</a></p>
        </div>
        <div class="col last">
            <h3><a href="#">Quisque consectetur odio</a></h3>
            <p>Quisque consectetur odio ut sem semper commodo. Maecenas iaculis leo a ligula euismod condimentum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut enim risus, rhoncus sit amet ultricies vel, aliquet ut dolor. Duis iaculis urna vel massa ultricies suscipit. Phasellus diam sapien, fermentum a eleifend non, luctus non augue. Quisque scelerisque purus quis eros sollicitudin gravida. Aliquam erat volutpat. Donec a sem consequat tortor posuere dignissim sit amet at.</p>
            <p>&not; <a href="#">read more</a></p>
        </div>

        <div id="footer">
            <?= $currentYear ?>
            <p>Copyright &copy; <em><?=$title?></em> &middot; Design: Luka Cvrk, <a href="http://www.solucija.com/" title="Free CSS Templates">Solucija</a></p>
        </div>
    </div>
</body>

</html>
<hr>

<h2>Задание 5</h2>
<p>*Используя только две переменные, поменяйте их значение местами. Например, если a = 1, b = 2, надо, чтобы получилось: b = 1, a = 2. Дополнительные переменные использовать нельзя.</p>
<h2>Решение 5</h2>
<div class="code-wrap">
    <code class="php">&lt;?php</code>
    <code>$a = 1;</code>
    <code>$b = 2;</code>
    <code>$a = $b + $a; //$a = 3</code>
    <code>$b = $a - $b; //$b = 1</code>
    <code>$a = $a - $b; //$a = 2</code>
    <code>echo 'a = '.$a.'; ';</code>
    <code>echo 'b = '.$b; </code>
    <code class="php">?&gt;</code>
</div>

<?php
  $a = 1;
  $b = 2; 
  $a = $b + $a; //$a = 3
  $b = $a - $b; //$b = 1
  $a = $a - $b;  //$a = 2  
  echo 'a = '.$a.'; ';
  echo 'b = '.$b; 
?>
<hr>

<style type="text/css">
    * {
        width: 1024px;
        margin: 0 auto;
        background-color: #e6e7f6;
    }
    
    .titel{
        margin: 35px;
        text-align: center;
    }

    hr {
        margin: 25px 0;
    }

    p {
        margin: 10px 5px;
        text-align: justify-all;
    }

    code {
        margin: 0 25px;
    }

    .php {
        margin: 0;
    }

    .code-wrap {
        display: flex;
        flex-direction: column;
        margin: 5px 0;
    }

</style>
