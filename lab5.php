<?php

$x = 1234567800;
$y=1000;
$i=0;
$z=$x%$y; //800
    if ($z==0)
    {
        strval($z);
        $z=$i.$i.$i;
    }
    if (0<$z && $z<10)
    {
        strval($z);
        $z=$i.$i.$z;
    }
    if (10<$z && $z<100)
    {
        strval($z);
        $z=$i.$z;
    }
    $q=($x/$y)-($x%$y/$y); //1234567

        $w = $q % $y; //567
        if ($w == 0) {
            strval($w);
            $w = $i . $i . $i;
        }
        if (0 < $w && $w < 10) {
            strval($w);
            $w = $i . $i . $w;
        }
        if (10 < $w && $w < 100)
        {
            strval($w);
            $w = $i . $w;
        }


    $e = ($q / $y) - ($q % $y / $y); //1234
    $r = $e % $y; //234
    if ($r == 0) {
        strval($r);
        $r = $i . $i . $i;
    }
    if (0 < $r && $r < 10) {
        strval($r);
        $r = $i . $i . $r;
    }
    if (10 < $r && $r < 100) {
        strval($r);
        $r = $i . $r;
    }

$t = ($e / $y) - ($e % $y / $y); //1


    $Result=$t.",".$r.",".$w.",".$z;

$p=strlen($x);
switch ($p)
{
    case $p > 0 && $p < 4: $Result = substr($Result, -$p);  break;
    case $p > 3 && $p < 7: $NResult = substr($Result, -$p - 1); break;
    case $p > 6 && $p < 10:  $Result = substr($Result, -$p - 2);  break;

}
    print_r($Result);
