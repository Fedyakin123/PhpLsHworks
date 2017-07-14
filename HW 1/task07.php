<?php
/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 14.07.2017
 * Time: 16:18
 */


//Задание #7
//
//Используя цикл for, выведите таблицу умножения размером 10x10.
//Таблица должна быть выведена с помощью HTML тега <table>
//Если значение индекса строки и столбца чётный, то результат вывести в круглых скобках.
//Если значение индекса строки и столбца Нечётный, то результат вывести в квадратных скобках.
//Во всех остальных случаях результат выводить просто числом.

echo '<table border="1" cellpadding="5">';

for ($i = 1; $i <= 10; $i++) {
    echo '<tr>';
    for ($j = 1; $j <= 10; $j++) {
        $left = '';
        $right = '';
        if (($i % 2) && ($j % 2)) { //true если оба нечетные
            $left = '[';
            $right = ']';
        } elseif (!($i % 2) && !($j % 2)) { //true если оба четные
            $left = '(';
            $right = ')';
        }
        echo '<td>' . $left . ($i * $j) . $right .  '</td>';
    }
    echo '</tr>';
}

echo '</table>';
