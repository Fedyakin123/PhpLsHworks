<?php
/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 14.07.2017
 * Time: 15:50
 */
//Задание #5
//
//Создайте переменную $day и присвойте ей произвольное числовое значение
//С   помощью   конструкции   switch   выведите   фразу   “Это   рабочий   день”,
//если   значение  переменной $day попадает в диапазон чисел от 1 до 5 (включительно)
//Выведите   фраху   “Это   выходной   день”,   если   значение   переменной   $day   равно  числам 6 или 7
//Выведите   фразу   “Неизвестный   день”,   если   значение   переменной   $day   не   попадает
//в диапазон чисел от 1 до 7(включительно)


$day = mt_rand(0, 8);

switch ($day) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        echo 'Рабочий день';
        break;
    case 6:
    case 7:
        echo 'Выходной день';
        break;
    default:
        echo 'Неизвестный день';
}
