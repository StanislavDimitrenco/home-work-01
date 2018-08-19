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

$bmw = [
    "model" => "X5",
    "speed" => "120",
    "doors" => "5",
    "years" => "2015"
];

$toyota = [
    "model" => "Prado",
    "speed" => "220",
    "doors" => "4",
    "years" => "2011"
];

$opel = [
    "model" => "Astra",
    "speed" => "180",
    "doors" => "4",
    "years" => "2004"
];

$cars = [
    "BMW" => $bmw,
    "TOYOTA" => $toyota,
    "OPEL" => $opel
];



foreach ($cars as $key => $value) {
    echo '<div style="border: 1px solid; padding: 20px; margin: 10px; float: left;">';
    echo $key . '<br>';
    foreach ($value as $insetValue) {
        echo $insetValue  . ' ';
    }
    echo '</div>';
}
