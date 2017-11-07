<?php
/*Панюшкин Сергей*/
//Лаборатторная работа №2

$virazhenie = '5 8 3  + *';  // наше выражение
echo calculation($virazhenie);
function calculation ($result)  //функция  вычисления обратной польской нотации
{
    $massiv = array(); // объявим массив
    $part_str = strtok($result, ' ');   //разбиваем на элементы. Разделитель -пробел

    while ($part_str !== false)
    {
        if (in_array($part_str, array('*', '/', '+', '-', '^')))  //если встречаем операторы
        {                                                       //то извлекаем послндние 2 числа из стека
            $numeric2 = array_pop($massiv);
            $numeric1 = array_pop($massiv);
            switch ($part_str)
            {
                case '*': $result = $numeric1*$numeric2; break; //производим дейсвия в зависимости от оператора
                case '/': $result = $numeric1/$numeric2; break;
                case '+': $result = $numeric1+$numeric2; break;
                case '-': $result = $numeric1-$numeric2; break;
                case '^': $result = pow($numeric1,$numeric2); break;
            }
            array_push($massiv, $result); // результат помещаем в конец массива
        }
        elseif (is_numeric($part_str))  //если встречаем операнд, то помещаем в конец массива
        {
            array_push($massiv, $part_str);
        }

        $part_str = strtok(' ');  //рассматриваем следующий элемент
    }
    return array_pop($massiv);
}
?>