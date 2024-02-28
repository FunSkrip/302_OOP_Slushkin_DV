<?php

function RunTest()
{
    // String representation test
    $v1 = new \Slushkin\Task02\Vector(1, 2, 3);
    echo "Символьное представление вектора:\n";
    echo "Ожидается: (1; 2; 3)" . PHP_EOL;
    echo "Получено: " . $v1 . PHP_EOL;

    // Adding test
    $v2 = new \Slushkin\Task02\Vector(1, 4, -2);
    $v3 = $v1->add($v2);
    echo "\nСумма двух векторов:\n";
    echo "Ожидается: (2; 6; 1)" . PHP_EOL;
    echo "Получено: " . $v3 . PHP_EOL;

    $v4 = new \Slushkin\Task02\Vector(1, 4, -6);
    $v5 = $v3->sub($v4);
    echo "\nВычитание векторов:\n";
    echo "Ожидается: (1; 2; 7)" . PHP_EOL;
    echo "Получено: " . $v5 . PHP_EOL;

    $number = 3;
    $v6 = $v5->product($number);
    echo "\nУмножение вектора на число:\n";
    echo "Ожидается: (3; 6; 21)" . PHP_EOL;
    echo "Получено: " . $v6 . PHP_EOL;

    $v7 = new \Slushkin\Task02\Vector(5, 1, -4);
    $Scalar = $v6->scalarProduct($v7);
    echo "\nСкалярное произведение векторов:\n";
    echo "Ожидается: -63" . PHP_EOL;
    echo "Получено: " . $Scalar . PHP_EOL;

    $v8 = new \Slushkin\Task02\Vector(13, -7, -23);
    $v9 = new \Slushkin\Task02\Vector(8, 20, -1);
    $v10 = $v8->vectorProduct($v9);
    echo "\nВекторное произведение векторов:\n";
    echo "Ожидается: (467, -171, 316)" . PHP_EOL;
    echo "Получено: " . $v10 . PHP_EOL;
}
