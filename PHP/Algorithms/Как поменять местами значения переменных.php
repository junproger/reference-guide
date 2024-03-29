<?php
// cуществует красивое и элегантное решение в одну строку
list($a, $b) = [$b, $a];

// а для PHP версий 5.3 и старше можно воспользоваться сокращённым вариантом
[$a, $b] = [$b, $a];

// что более читаемо и проще, чем классическое
$tmp = $a;
$a = $b;
$b = $tmp;

// кроме того, таким образом можно поменять местами значения более чем двух переменных за раз
[$a, $b, $c] = [$c, $b, $a];

// существует ещё несколько классических решений, которые работают только с целочисленными переменными, например, с помощью XOR
$a = $a ^ $b;
$b = $b ^ $a;
$a = $a ^ $b;

// либо вариант со сложением и вычитанием
$a = $a + $b;
$b = $a - $b;
$a = $a - $b;

// в случае со сложением можно выйти за диапазон допустимых значений если значения переменных будут достаточно большими
// XOR решает эту проблему, но необходимо понимать что это работает с int, а для string или каких-то других типов придётся использовать другой подход