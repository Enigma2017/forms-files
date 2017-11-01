<?php

function strMat($comments)
{
    $censComm = [];
    $censor = array(
        'бля',
        'ху',
        'еба',
        'сук',
        'пиз',
        'шлю',
        'уеб',
        'хер',
        'чм',
        'деби',
    )
    $replace = '<b>***</b>';
    if (!empty($comments)) {
        foreach ($comments as $com) {
            $censComm[] = str_replace($censor, $replace, $com);
        }
    }
    return $censComm;
}

$comments = loadComments();
$comments = strMat($comments);

?>
