<?php
$comments = loadComments();
    $comments[] = $comment;
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
    $replace = '<b>***</br>';
    $comments[] = str_replace($censor, $replace, $comments[]);
    function strMat($comments[])
    {
        print_r($comments[]). '<br>';
    }
    strMat($comments[]);
    ?>