<!--
1. Используя цикл for, выведите таблицу умножения размером 10x10. Таблица
должна быть выведена с помощью HTML тега <table>
2. Если значение индекса строки и столбца чётный, то результат вывести в
круглых скобках.
3. Если значение индекса строки и столбца Нечётный, то результат вывести в
квадратных скобках.
4. Во всех остальных случаях результат выводить просто числом.

-->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Таблица умножения</title>
    <style>
        td {
            border: 1px solid gray;
            padding: 20px;
            text-align: center;
        }

        table {
            border: 0px;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <td></td>
            <?php
            for ($i = 1; $i <= 9; $i++) { //создаем цикл для верхнего ряда, до 9ти
                    echo '<td>' . $i . '</td>';
            }
            ?>
        </tr>

            <?php
            for ($s = 1; $s <=9; $s++) { //создаем цикл для бокового ряда, до 9ти
                echo '<tr>' . '<td>' . $s . '</td>';
                for ($l = 1; $l <=9; $l++) { //создаем горизонтальный цикл для  умножения с боковым рядом
                    if (($s % 2 == 0) && ($l % 2 == 0)) { //делаем первое условие, оба должны быть четные
                        echo '<td> (' . $s * $l . ') </td>';
                    } elseif (($s % 2 != 0) && ($l % 2 != 0)) { //делаем второе условие, оба должны быть нечетные
                        echo '<td> [' . $s * $l . '] </td>';

                    } else { //выводим все, что не попало в первые два условия
                        echo '<td>' . $s * $l . '</td>';
                    }
                }
                echo '</tr>';
            }
            ?>
        </tr>
    </table>

</body>
</html>