<?php
  $new_array = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
  );

  // Как проверить массив или не массив?
  echo (is_array($new_array)) ? '$new_array - массив' : '$new_array - не массив'; // => $new_array - массив

  // Как узнать количество элементов на верхнем уровне массива?
  echo count($new_array); // => 3

  // Как узнать количество всех элементов многомерного массива?
  echo count($new_array, 1); // => 12


  // Как отсортировать массив?
  $number_array = array(2, 5, 1, 7, 11, 21, 9, 0, 17);
  sort($number_array, SORT_NUMERIC); // сортирует как числа
  print_r($number_array);
  sort($number_array, SORT_STRING); // сортирует как строки
  print_r($number_array);

  // Как отсортировать массив в обратном порядке?
  $number_array = array(2, 5, 1, 7, 11, 21, 9, 0, 17);
  rsort($number_array, SORT_NUMERIC); // сортирует как числа
  print_r($number_array);
  rsort($number_array, SORT_STRING); // сортирует как строки
  print_r($number_array);

  // Как расположить элементы массива в случайном порядке?
  $number_array = array(2, 5, 1, 7, 11, 21, 9, 0, 17);
  shuffle($number_array);
  print_r($number_array);

  // Как разбить строку на элементы по определенному символу и элементы поместить в массив?
  $temp_array = explode(' ', "это предложение из пяти слов");
  print_r($temp_array);

  // Как превратить пары ключ-значение в переменные со значениями?
  $associative_array = array(
    'login' => "Aleksandra",
    'password' => "12345");
  extract($associative_array); // небезопасный способ, особенно при работе с массивами $_GET и $_POST
  echo "$login $password";
  extract($associative_array, EXTR_PREFIX_ALL, 'frombook'); // имена переменных будут начинаться с заданного префикса с символом _
  echo "$frombook_login $frombook_password";

  // Как создать массив из переменных и их значений?
  $name = "Aleksandra";
  $surname = "Khrapkova";
  $phone = "8(960)006-73-55";
  $contact = compact('name', 'surname', 'phone');
  print_r($contact);