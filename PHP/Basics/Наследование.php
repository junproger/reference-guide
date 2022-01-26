<?php
  $object = new Tiger;
  echo "У тигров есть:\n";
  echo "Mex: $object->fur\n";
  echo "Полоски: $object->stripes\n";
  $object->get_voice();
  $object->get_voice_cat();

  class Cat {
    public $fur; // мех

    function __construct()
    {
      $this->fur = "да";
    }

    function get_voice(){
      echo "Мяу мяу ";
    }

    // родительский класс с ключевым словом final нельзя переопределить в дочернем классе
    final function copyright() {
      echo "Разработчик Александра Храпкова";
    }
  }

  // класс Tiger наследует класс Cat
  class Tiger extends Cat {
    public $stripes; // полосы

    function __construct()
    {
      parent::__construct(); // вызов родительского конструктора
      $this->stripes = "да";
    }

    // переопределение родительского метода с тем же именем
    function get_voice()
    {
      echo "Ррр ";
    }
    function get_voice_cat()
    {
      parent::get_voice();
    }
  }
