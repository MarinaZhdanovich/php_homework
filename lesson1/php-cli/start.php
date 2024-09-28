<?php
$a = 5;
$b = '05';
var_dump($a == $b);
//нестрогое сравнение, $b = '05' будет приведена к числу 5.
//строка, начинающаяся с нуля, преобразуется в целое число игнорируя сам 0
//5 == 5 это true
//bool(true)


var_dump((int)'012345');
//явное приведение типов
//строка, начинающаяся с нуля, преобразуется в целое число игнорируя сам 0
//int(12345)

var_dump((float)123.0 === (int)123.0);
//строгое сравнение
//(float)123.0 не меняется, но выводится в консоль как float(123) тип float
//int(123) целое число
//разные по типу поэтому bool(false)


var_dump(0 == 'hello, world');
// нестрогое сравнение
//в PHP 8.2 изменились правила приведения типов
//строки, которые не содержат цифр, теперь не равны 0
//bool(false)

//В контейнере с PHP CLI поменяйте версию PHP с 8.2 на 7.4. Изменится ли вывод?
//bool(true)
//int(12345)
//bool(false)
//bool(true)

//изменился только последний вывод
var_dump(0 == 'hello, world');
// нестрогое сравнение
//если строка не содержит чисел, результатом будет 0.
//0 == 0 будет true
//bool(true)

//Используя только две числовые переменные, поменяйте их значение местами.
//Например, если a = 1, b = 2, надо, чтобы получилось: b = 1, a = 2.
//Дополнительные переменные, функции и конструкции типа list() использовать нельзя.
$a = 1;
$b = 2;

$a = $a + $b; //1 + 2 = 3
$b = $a - $b; //3 - 2 = 1
$a = $a - $b; //3 - 1 = 2

echo "Теперь a = $a, b = $b";

// docker run --rm -v ${pwd}/php-cli/:/cli php:8.2-cli php /cli/start.php