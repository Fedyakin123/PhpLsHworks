<?php
/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 14.07.2017
 * Time: 15:57
 */
//Задание #6
//
//Создайте массив $bmw с ячейками:
//model
//speed
//doors
//year
// Заполните ячейки значениями соответсвенно: “X5”, 120, 5, “2015”
//Создайте   массивы   $toyota   и   $opel   аналогичные   массиву   $bmw   (заполните  данными)
//Объедините три массива в один многомерный массив
//Выведите значения всех трех массивов в виде:
//CAR name
//name ­ model ­speed ­ doors ­ year
//Например:
//CAR bmw
//X5 ­120 ­ 5 ­ 2015

$bmw = ['model' => 'x5', 'speed' => 120, 'doors' => 5, 'year' => 2015];
$toyota = ['model' => 'camry', 'speed' => 125, 'doors' => 5, 'year' => 2013];
$opel = ['model' => 'corsa', 'speed' => 115, 'doors' => 5, 'year' => 2016];

$cars = ['bmw' => $bmw,'toyota' => $toyota, 'opel' => $opel];

echo '<table border="1">';

foreach ($cars as $name => $value) {
    echo "<tr><td> Car $name <br />";
    foreach ($value as $prop) {
        echo $prop . ' ';
    }
    echo '<br /> </tr></td>';
}

echo '</table>';
