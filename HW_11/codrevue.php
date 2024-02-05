<?php

//Приклад  номер 1: Назви методів і змінних не відповідають стандартам
class HelloClass {
    public $VariableName;

    public function HelloMethod() {

    }
}

// виправленно:
class HelloClass
{
    public $variableName;

    public function helloMethod()
    {

    }
}


//Приклад 2: моя улюбленна біда використання апострофів для рядкових літералів
$message = 'This is a message';

// Виправленно :
$message = "This is a message";



//Приклад 3:моя улюбленна біда номер 2 неправильне використання табуляції
class HelloClass {
    public function helloMethod() {

    }
}

//Виправлено:

class HelloClass
{
    public function helloMethod()
    {

    }
}


//Приклад 4: Неправильне відступлення
class HelloClass {public function helloMethod() {

}
}

//Виправлено:

class HelloClass
{
    public function helloMethod()
    {

    }
}