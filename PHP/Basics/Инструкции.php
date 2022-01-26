<?php
  $number = 2;

  // if..elseif..else
  if ($number == 1) {
    echo "один";
  } elseif ($number == 2) {
    echo "два";
  } else {
    echo "три";
  }

  // switch
  switch ($number) {
    case 1:
      echo "один";
      break;
    case 2:
      echo "два";
      break;
    case 3:
      echo "три";
      break;
    default:
      echo "непонятное число";
      break;
  }

  // альтернативный синтаксис switch
  switch ($number):
    case 1:
      echo "один";
      break;
    case 2:
      echo "два";
      break;
    case 3:
      echo "три";
      break;
    default:
      echo "непонятное число";
      break;
  endswitch;

  // тренарный оператор
  echo ($number == 2) ? "два" : "непонятное число";

  // while
  $number = 0;
  while ($number++ < 5) {
    echo $number . " ";
  }

  // do..while
  $number = 1;
  do {
    echo $number . " ";
  } while ($number++ < 5);

  // for
  for($number = 1; $number <= 5; $number++) {
    echo $number . " ";
  }