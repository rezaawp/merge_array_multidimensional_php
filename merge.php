<?php

function mergeArrayMultidimensional($array)
{
    $result = [];
    foreach($array as $in)
    {
        $jumlah_inputan = count($in);
        for($x = 0; $x < $jumlah_inputan; $x++)
        {
            array_push($result, $in[$x]);
        }
    }

    return $result;
}

$array = [[1,2,3], [4,5,6]]; // before
$result = mergeArrayMultidimensional($array);
echo implode(', ', $result);
//result : [1,2,3,4,5,6]