<?php
  // однострочный комментарий

  /*
  многострочный
  комментарий
  */

  /*
  переменные:
  1. не требуют объявления перед своим использованием и всегда преобразются в тот тип, который требуется для их окружения на момент доступа к ним
  2. именование переменных:
    - чувствительны к регистру
    - могут содержать только a–z, A–Z, 0–9 и _
    - начинаются с $, после $ должны начинаться с буквы или _
    - для разделения слов в идентификаторе использовать _
  3. локальные переменные:
    - созданные внутри функции, являются локальными для нее
    - созданные за пределами любой функции, могут быть доступны только из того кода, который не входит в код ни одной из функций
    - созданные за пределами функции могут быть использованы внутри функции, если их передать в качестве аргумента
  4. глобальная переменная:
    - создается с помощью ключевого слова global
    - чтобы не было путаницы с локальными переменными, желательно именовать в верхнем регистре
  5. статическая переменная:
    - это локальная переменная, значение которой сохраняется до следующего вызова функции
    - создается с помощью ключевого слова ststic
    - может инициализироваться только значением, присвоить результат выражения невозможно
  6. суперглобальные переменные:
    - предоставляются средой окружения PHP
    - содержать информацию о текущей работающей программе и ее окружении
    - в именах (за исключением $GLOBALS) присутствует один знак _ и используются только заглавные буквы
    - в целях безопасности всегда следует подвергать предварительной обработке функцией htmlentities (преобразует всех символы в элементы HTML)
  */
  $user_name = "Aleksandra"; // локальная переменная
  global $GLOBAL_VARIABLE; // глобальная переменная
  static $counter = 0; // статическая переменная
  echo htmlentities($_SERVER['SERVER_ADDR']); // вывод суперглобальной переменной

  /*
  константы:
  1. можно определить только с помощью функции define
  2. перед именем не нужно ставить $
  3. для именования использовать буквы верхнего регистра
  4. волшебные константы начинаются и заканчиваются двумя знаками _
  */
  define("ROOT_LOCATION", "C:\OpenServer\domains\localhost");
  echo ROOT_LOCATION; // => C:\OpenServer\domains\localhost
  echo __DIR__; // вывод волшебной константы

  /*
  вывод на экран:
  1. print — конструкция, похожая на функцию, воспринимающую единственный параметр и имеющую возвращаемое значение (которое всегда равно 1)
  2. echo — в чистом виде конструкция языка PHP, и поскольку она не является функцией, ее, в отличие от print, нельзя использовать
  как часть более сложного выражения
  */
  echo $test ? "TRUE" : "FALSE"; // => FALSE
  $test ? print "TRUE" : print "FALSE"; // => FALSE

  // конструкция heredoc - способ указания строкового литерала, сохраняющего в тексте обрывы строк и другие пустые пространства (включая отступы)
  $out = <<< _OUTPUT
  1. Закрывающий тег должен появляться строго в начале новой строки и быть единственным содержимым этой строки — к ней не разреша-
  ется добавлять даже комментарии (нельзя ставить даже одиночный пробел).
  Как только многострочный блок закрыт, можно снова воспользоваться тем же самым именем тега.
  2. Можно использовать любые виды кавычек без экранирования.
  3. Не работает при отображении в браузере.
  _OUTPUT;
  echo $out;
