<?php
/*
    1. Создайте массив $bmw​с ячейками:
    a. model
    b. speed
    c. doors
    d. year
    2. Заполните ячейки значениями соответсвенно: “X5”, 120, 5, “2015”
    3. Создайте массивы $toyota и $opel аналогичные массиву $bmw
    (заполните данными)
    4. Объедините три массива в один многомерный массив
*/

$bmw = array(
    "model" => "X5",
    "speed" => "120",
    "doors" => "5",
    "years" => "2015"
);

$toyota = array(
    "model" => "Corola",
    "speed" => "220",
    "doors" => "4",
    "years" => "2011"
);

$opel = array(
    "model" => "Vestra",
    "speed" => "180",
    "doors" => "4",
    "years" => "2004"
);

$cars = array_merge_recursive($bmw, $toyota, $opel);



for ($i = 0; $i< 3; $i++) {
    echo '<div style="border: 1px solid; padding: 20px; margin: 10px; float: left;">';
    echo $cars[model][$i] . '<br>' . $cars[speed][$i] . ' ' . $cars[doors][$i] . ' ' . $cars[years][$i] . '<br>';
    echo '</div>';
}
