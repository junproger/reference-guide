<?php
  // обычный массив
  $regular_array = array("Aleksandra", "axi83@mail.ru", "12345");
  // перебор обычного массива
  foreach($regular_array as $item) {
    echo $item . " ";
  }

  // ассоциативный массив
  $associative_array = array(
    'name' => "Aleksandra",
    'email' => "axi83@mail.ru",
    'password' => "12345");
  // перебор ассоциативного массива
  foreach($associative_array as $key => $value) {
    echo "$key: $value\n";
  }
  // перебор ассоциативного массива с помощью функций list и each
  while (list($key, $value) = each($associative_array)) {
    echo "$key: $value\n";
  }

  // одномерный массив
  $names = array('Владик', 'Виталик', 'Саша');
  echo $names[0]; // => Владик
  echo $names; // => Array
  print_r($names);
  /* =>
  Array
  (
      [0] => Владик
      [1] => Виталик
      [2] => Саша
  )*/

  // многомерный массив
  $matrix = array(array(1, 2, 3),
                  array(4, 5, 6),
                  array(7, 8, 9));
  echo $matrix[2][0]; // => 7