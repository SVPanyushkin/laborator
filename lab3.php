<?php
$teststring = "Message-arround";
$lengh = 5;//сторона квадрата
$quantityroll = 2;//количество кругов
$numberofstring = 0; //номер по пордку в массиве тестовой строки
for ($i = 1; $i <= $quantityroll; $i++)
{
    for ($stroka = $i; $stroka <= $lengh-$i+1; $stroka++)//верхняя сторона
    {
        if ($teststring[$numberofstring])
            {$table[$i][$stroka] = $teststring[$numberofstring];
            $numberofstring++;}
        else {$table[$i][$stroka] = "";}
    }
    for ($stolb = $i+1; $stolb <= $lengh-$i+1; $stolb++)//правая сторона
    {	if ($teststring[$numberofstring])
            {$table[$stolb][$lengh-$i+1] = $teststring[$numberofstring];
            $numberofstring++;}
        else {$table[$stolb][$lengh-$i+1] = "";}
    }
    for ($stroka = $lengh-$i; $stroka >= $i; $stroka--)//нижняя сторона
    {
        if ($teststring[$numberofstring])
            {$table[$lengh-$i+1][$stroka] = $teststring[$numberofstring];
            $numberofstring++;}
        else {$table[$lengh-$i+1][$stroka] = "";}
    }
    for ($stolb = $lengh-$i; $stolb >= $i+1; $stolb--)//левая сторона
    {
        if ($teststring[$numberofstring])
            {$table[$stolb][$i] = $teststring[$numberofstring];
            $numberofstring++;}
        else {$table[$stolb][$i] = "";}
    }
}
echo '<table>';//выводим на экран
for ($tr= 1; $tr <= $lengh; $tr++)
{echo '<tr>';
    for ($td = 1; $td <= $lengh; $td++)
    {
        echo '<td>'.$table[$tr][$td].'</td>';
    }
    echo '</tr>';
}
echo '</table>';