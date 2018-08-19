<?php
/*
    1. Создайте переменную $day и присвойте ей произвольное числовое значение
    2. С помощью конструкции switch выведите фразу “Это рабочий день”,
    если значение переменной $day попадает в диапазон чисел от 1 до 5
    (включительно)
    3. Выведите фразу “Это выходной день”, если значение переменной
    $day равно числам 6 или 7
    4. Выведите фразу “Неизвестный день”, если значение переменной $day
    не попадает в диапазон чисел от 1 до 7 (включительно)
 */

$day = 5;

switch ($day) {
    case $day >= 1 and $day <= 5:
        echo 'Это рабочий день';
        break;
    case $day == 6 || $day == 7:
        echo 'Это выходной день';
        break;
    case $day < 1 || $day > 7:
        echo 'Неизвестный день';
        break;
}
