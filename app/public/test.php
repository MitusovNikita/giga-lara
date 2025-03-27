<?php

// класс
// метод
// свойство
// константа
// константа внутри метода
// стат метод
// вызов объекта
// try...
// аттр в свойствах
// аттр в метод
// for


class MyClass
{
    const MYCONST = 3.14;

    public int $var = 1;
    public string $string = "привет";

    public function myFunction(bool $isOk) : void
    {
        define("MYSECONDCONST", 1);
    }

    public static function myStaticFunction()
    {


        try {
            if ($a / $b) {
                throw new Exception("Деление на ноль");
            }
        } catch(Exeption $e) {
            echo "Ошибка". $e->getMessage();
        } finally {
            echo "END";
        }

        echo 'hello';
    }
}

$obj = new MyClass;
$obj->myFunction();
MyClass::myStaticFunction();


for ($i = 0; $i++; $i < 10) {
    echo $i;
}


