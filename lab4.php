<?php
//Лабораторная работа №4
//$massiv = array(2, 5, 1, 2, 3, 4, 7, 7, 6); //цифры из задания
for ($i = 0; $i < 9; $i++)	{$massiv[] = rand(1, 9);} // если используем случайные цифры
$roof = $massiv;
$voda = 0; //кол-во воды
$quantity = count($massiv);
$first = 0; //первый  элемент крыши
$last = $quantity - 1; // последний элемент крыши
$maxpoint = max($massiv); //находим макс. элемент массива, с которым буем сравнивать границы
    if ($massiv[$first] > $maxpoint) //сравниваем левый эл-т с максимальным
    {
        $leftmax = $maxpoint;
    }
    else {
          $leftmax = $massiv[$first];
    }
    if ($massiv[$last] > $maxpoint) //сравниваем правый эл-т с максимальным
    {
        $rightmax = $maxpoint;
    }
    else {
    $rightmax = $massiv[$last];
    }
    while ($leftmax < $maxpoint) {     //ведем подсчет объема воды
          $first++;
            if ($leftmax < $massiv[$first]) {
                  $leftmax = $massiv[$first];
             }
             else {
                  $voda += $leftmax - $massiv[$first];
                  }
    }
while ($rightmax < $maxpoint) { //ведем подсчет объема воды
       $last--;
        if ($rightmax < $massiv[$last]){
             $rightmax = $massiv[$last];
        }
         else {
        $voda += $rightmax - $massiv[$last];
        }
}
while ($first != $last)
{
    $voda += $leftmax - $massiv[$first];
    $first++;
}
for ($i = 0; $i < $quantity; $i++)
{
    print "$massiv[$i] "; //выводим на экран массив
}
print "<br>Объем воды в крыше = $voda"; //выводим на экран объем воды