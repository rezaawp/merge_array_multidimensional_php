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
