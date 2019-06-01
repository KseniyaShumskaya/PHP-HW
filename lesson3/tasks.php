<?php

//task 1
//Дана строка, содержащая полное имя файла (например, 'C:\OpenServer\testsite\www\someFile.txt').
// Написать функцию, которая сможет выделить из подобной строки имя файла без расширения.
$path_parts = pathinfo('C:\OpenServer\testsite\www\someFile.txt');
echo $path_parts['filename'], "\n";

//task 2
//Написать функцию - конвертер строки. Возможности (в зависимости от второго аргумента - флаг,
// который указывает, какую именно операцию следует выполнить):
// 1) перевод всех символов в верхний регистр,
// 2) перевод всех символов в нижний регистр,
// 3) перевод всех символов в нижний регистр и первых символов слов в верхний регистр.`


//task 3
//Создать функцию по преобразованию нотаций:
// строка вида 'this_is_string' преобразуется в 'thisIsString' (CamelCase-нотация)


//task 4
// Сгенерировать 5 массивов из случайных чисел.
// Вывести массивы и сумму их элементов на экран.
// Найти массив с максимальной суммой элементов.
// Вывести его на экран еще раз.
// Генерация массива и подсчет суммы - разные функции