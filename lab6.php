<?php
$myword = 'oflw';

    $mymassiv = str_split($myword);
    sort($mymassiv, SORT_STRING);
    $sortmyword=implode($mymassiv);
    $file = file('words.txt');

    for ($i=0; $i<count($file); $i++)
    {
        $word = $file[$i];
        $nword=trim($word);
        $massiv = (str_split($nword));
        sort($massiv, SORT_STRING);
        $sortword=implode($massiv);
        if ($sortmyword === $sortword)
        {
            print_r($word);
        }
    }