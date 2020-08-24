<h1 class="titel">Урок 2. Условные блоки, ветвление функции.</h1>
<section>
    <h2>Задание 1</h2>
    <p>Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения. Затем написать скрипт, который работает по следующему принципу:</p>
    <p>если $a и $b положительные, вывести их разность;</p>
    <p>если $а и $b отрицательные, вывести их произведение;</p>
    <p>если $а и $b разных знаков, вывести их сумму;</p>
    <p>ноль можно считать положительным числом.</p>
    <h2>Решение</h2>
    <div class="code-wrap">
        <code class="php">&lt;?php</code>
            <code>$a = rand(-10, 10);</code>
            <code>$b = rand(-10, 10);</code>
            <code>$res = &quot;&quot;;</code>
            <code>if($a &gt;= 0 &amp;&amp; $b &gt;= 0){</code>
            <code>$res = $a-$b;</code>
            <code>echo &quot;a = $a и b = $b положительные, выводим их разность: $res&quot;;</code>
            <code>}</code>
            <code>elseif ($a &lt; 0 &amp;&amp; $b &lt; 0){</code>
            <code>$res = $a*$b;</code>
            <code>echo &quot;a = $a и b = $b отрицательные, выводим их произведение: $res&quot;;</code>
            <code>}</code>
            <code>elseif (($a &lt; 0 &amp;&amp; $b &gt;= 0) || ($a &gt;= 0 &amp;&amp; $b &lt; 0)){</code>
            <code>$res = $a+$b;</code>
            <code>echo &quot;a = $a и b = $b разных знаков, выводим их сумму: $res&quot;;</code>
            <code>}</code>
            <code class="php">?&gt;</code>
    </div>
    <?php
        $a = rand(-10, 10);
        $b = rand(-10, 10);
        $res = "";
        if($a >= 0 && $b >= 0){
            $res = $a-$b;
            echo "a = $a и b = $b положительные, выводим их разность: $res";
        }
        elseif ($a < 0 && $b < 0){
            $res = $a*$b;
            echo "a = $a и b = $b отрицательные, выводим их произведение: $res";
        }
        elseif (($a < 0 && $b >= 0) || ($a >= 0 && $b < 0)){
            $res = $a+$b;
            echo "a = $a и b = $b разных знаков, выводим их сумму: $res";
        }
    ?>
</section><hr>

<section>
    <h2>Задание 2</h2>
    <p>Присвоить переменной $а значение в промежутке [0..15]. С помощью оператора switch организовать вывод чисел от $a до 15.</p>
    <h2>Решение</h2>
    <div class="code-wrap">
        <code class="php">&lt;?php</code>
        <code>$a = rand(0, 15);</code>
        <code>echo &quot;а = $a отсчет: &quot;;</code>
        <code>switch($a){</code>
        <div class="code-case-wrap">
            <code>case 0:echo &quot;0 &quot;;</code>
            <code>case 1:echo &quot;1 &quot;;</code>
            <code>case 2:echo &quot;2 &quot;;</code>
            <code>case 3:echo &quot;3 &quot;;</code>
            <code>case 4:echo &quot;4 &quot;;</code>
            <code>case 5:echo &quot;5 &quot;;</code>
            <code>case 6:echo &quot;6 &quot;;</code>
            <code>case 7:echo &quot;7 &quot;;</code>
            <code>case 8:echo &quot;8 &quot;;</code>
            <code>case 9:echo &quot;9 &quot;;</code>
            <code>case 10:echo &quot;10 &quot;;</code>
            <code>case 11:echo &quot;11 &quot;;</code>
            <code>case 12:echo &quot;12 &quot;;</code>
            <code>case 13:echo &quot;13 &quot;;</code>
            <code>case 14:echo &quot;14 &quot;;</code>
            <code>case 15:echo &quot;15 &quot;;</code>
            <code>break;</code>
            <code>default:echo 'Неизвестное значение';</code>
        </div>
        <code>}</code>
        <code class="php">?&gt;</code>
    </div>
    <?php
    $a = rand(0, 15);
    echo "а = $a отсчет: ";
    switch($a){
        case 0:
            echo "0 ";
        case 1:
            echo "1 ";
        case 2:
            echo "2 ";
        case 3:
            echo "3 ";
        case 4:
            echo "4 ";
        case 5:
            echo "5 ";
        case 6:
            echo "6 ";
        case 7:
            echo "7 ";
        case 8:
            echo "8 ";
        case 9:
            echo "9 ";
        case 10:
            echo "10 ";
        case 11:
            echo "11 ";
        case 12:
            echo "12 ";
        case 13:
            echo "13 ";
        case 14:
            echo "14 ";
        case 15:
            echo "15 ";
            break;
        default:
            echo 'Неизвестное значение';
    }
    ?>
</section><hr>

<section>
    <h2>Задание 3-4</h2>
    <p>Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. Обязательно использовать оператор return.</p>
    <p>Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. В зависимости от переданного значения операции выполнить одну из арифметических операций (использовать функции из пункта 3) и вернуть полученное значение (использовать switch).</p>
    <h2>Решение</h2>
    <?php
    $cases = rand(1, 4);
    //задаем случайные числа от -50 до 50
    $a = rand(-50, 50);
    $b = rand(-50, 50);
    mathOperation($cases, $a, $b);
    function mathOperation($cases, $a, $b){
        $result = "";
        switch ($cases) {
            case 1:
                $result = subtraction($a, $b);
                break;
            case 2:
                $result = addition($a, $b);
                break;
            case 3:
                $result = division($a, $b);
                break;
            case 4:
                $result = multiplication($a, $b);
                break;
            default:
                echo 'Неизвестный оператор';
        }
        echo "a = $a b = $b результат вычисления: $cases - ". $result;
    }

    function addition($a, $b) {
        $res = $a+$b;
        return "Сумма чисел = ".$res;
    }

    function subtraction($a, $b) {
        $res = $a-$b;
        return "Разность чисел = ".$res;
    }

    function division($a, $b) {
        if ($b != 0) {
            return "Деление чисел = ".round($a/$b,2);
        } else {
            return "На ноль нельзя делить!";
        }
    }

    function multiplication($a, $b) {
        return "Умножение чисел = ".$a*$b;
    }
    ?>
</section><hr>

<section>
    <h2>Задание 6</h2>
    <p>*С помощью рекурсии организовать функцию возведения числа в степень. Формат: function power($val, $pow), где $val – заданное число, $pow – степень.</p>
    <h2>Решение</h2>
    <?php
    $val = rand(1, 10);
    $pow = rand(1, 5);
    echo "Число $val в степени $pow равно ".task_2_6($val, $pow);
    function task_2_6($val, $pow) {
        $res = "";
        if ($pow==1){
            return $val;
        }else if ($pow==0){
            return 0;
        }else {
            $res = $val * $val;
            if ($pow > 2) {
                $res = $val * task_2_6($val, $pow - 1); //вычитаем с степени 1, т.к одно значение в формуле уже есть, т.е одну степень мы уже подсчитали
            }
        }
        return  $res;
    }
    ?>
</section><hr>

<section>
    <h2>Задание 7</h2>
    <p>*Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями, например:</p>
    <h2>Решение</h2>
    <?php
    $arrHour   = ['час', 'часа', 'часов'];
    $arrMinute = ['минута', 'минуты', 'минут'];
    function getTime($val, $array){
        $num = $val % 100;
        if ($num > 19) {
            $num = $num % 10;
        }
        switch ($num) {
            case 1:
                $result = "$val $array[0]";
                break;
            case 2:
            case 3:
            case 4:
                $result = "$val $array[1]";
                break;
            default:
                $result = "$val $array[2]";
                break;
        }
        return $result;
    }
    echo "Время ".getTime(date("H"), $arrHour).getTime(date("i"), $arrMinute);
    ?>
</section><hr>

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

    .code-case-wrap{
        display: flex;
        flex-direction: column;
        margin: 0;
    }

    .code-case-wrap code{
        margin: 0 0 0 50px;
    }



</style>