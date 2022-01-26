<?php
  // определени класса
  class User {
    // свойства
    public $login = "guest";
    public $password = "0000";
    // константа
    const SECRET_WORD = "omg";
    // статическое свойство
    static $count_users = 0;


    // конструктор
    function __construct()
    {
      // ключевое слово self позволяет получить непосредственный доступ к статическому свойству или константе внутри класса
      self::$count_users++; // увеличивается на 1 при создании нового объекта класса
    }

    // деструктор
    function __destruct()
    {
    }

    // метод
    function get_password() {
      return $this->password; // переменная $this используется для доступа к текущему объекту
    }

    // статический метод, вызывается классом а не объектом и не имеет доступа к свойствас объекта
    static function print_secret_word() {
      echo self::SECRET_WORD; // :: - оператор разрешения области видимости
    }
  }

  // содание объекта
  $object1 = new User;
  $object1->login = "axi";
  $object1->password = "7777";
  echo $object1->get_password();
  print_r($object1);

  // клонирование обьекта
  $object2 = new User;
  $object2 = clone $object1;
  $object2->login = "clone";
  print_r($object2);

  // объект со свойствами, заданными по-умолчанию
  $object3 = new User;
  print_r($object3);

  // вызов статического метода класса
  User::print_secret_word();

  // вывод статического свойства класса
  echo User::$count_users;