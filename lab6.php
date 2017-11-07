<?php
/*Панюшкин Сергей.
Лабораторная работа №6
Аннаграммами будем считать слова у которых кол-во и состав букв в слове одинкаовые,
т.е. если отсортировать буквы слова по алфавиту, то у анаграмм эти строки будут совпадать
fowl -- flow
wolf -- flow
*/

$myword = 'oflw';  //то что будем искать

    $mymassiv = str_split($myword);  //преобразуем в массив, чтобыпотом отсортировать
    sort($mymassiv, SORT_STRING);
    $sortmyword=implode($mymassiv);  //обратно в строку
    $file = file('words.txt'); //открываем файл. содержмое в массив

    for ($i=0; $i<count($file); $i++)  //циклом проходимся по по каждому слову, сортируя буквы слова по алфавиту
    {
        $word = $file[$i];
        $nword=trim($word);
        $massiv = (str_split($nword));
        sort($massiv, SORT_STRING);
        $sortword=implode($massiv);
        if ($sortmyword === $sortword)  // сравниваем с исходным словом $myword
        {
            print_r($word); //выводим найденные анаграммы
        }
    }