<?php
// создание файла
$file = fopen("test.txt", 'w') or die("Создать файл не удалось"); // открытие или создание и открытие файла на запись
$text = <<<_TEXT
  строка 1
  строка 2
  строка 3
  _TEXT;
fwrite($file, $text) or die("Сбой записи файла"); // запись в файл
fclose($file); // закрытие файла
echo "Файл test.txt успешно создан" . "<br>";

// чтение файла целиком
echo "<pre>Содержимное файла test.txt:<br>";
echo file_get_contents("test.txt");
echo "</pre>";

// проверка существования файла
if (file_exists("test.txt")) echo "Файл test.txt существует" . "<br>";

// копирование файла
copy("test.txt", "test2.txt") or die("Копирование невозможно");
echo "Файл успешно скопирован в test2.txt" . "<br>";

// переименование/перемещение файла
if (!rename("test2.txt", "test3.txt")) echo "Переименование невозможно";
else echo "Файл test2.txt успешно переименован в файл test3.txt" . "<br>";

// удаление файла
if (!unlink("test3.txt")) echo "Удаление невозможно";
else echo "Файл test3.txt успешно удален" . "<br>";

// обновление файла
$file = fopen("test.txt", 'r+') or die("Сбой открытия файла");
$text = fgets($file); // получение первой строки из файла
if(flock($file, LOCK_EX)) { // установка блокировки на файл
  fseek($file, 0, SEEK_END); // перемещения указателя в файле в конец
  fwrite($file, $text) or die("Сбой записи в файл");
  flock($file, LOCK_UN); // снятие блокировки файла
}
fclose($file);
echo "Файл test.txt успешно обновлен" . "<br>";