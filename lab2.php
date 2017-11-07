<?php

$virazhenie = '5 8 3  + *';
echo calculation($virazhenie);
function calculation ($str)
{
    $massiv = array();
    $part_str = strtok($str, ' ');

    while ($part_str !== false)
    {
        if (in_array($part_str, array('*', '/', '+', '-', '^')))
        {
            $numeric2 = array_pop($massiv);
            $numeric1 = array_pop($massiv);
            switch ($part_str)
            {
                case '*': $result = $numeric1*$numeric2; break;
                case '/': $result = $numeric1/$numeric2; break;
                case '+': $result = $numeric1+$numeric2; break;
                case '-': $result = $numeric1-$numeric2; break;
                case '^': $result = pow($numeric1,$numeric2); break;
            }
            array_push($massiv, $result);
        }
        elseif (is_numeric($part_str))
        {
            array_push($massiv, $part_str);
        }

        $part_str = strtok(' ');
    }
    return array_pop($massiv);
}
?>