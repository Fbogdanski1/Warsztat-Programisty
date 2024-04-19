<?php
$spol = array("b", "c", "ć", "d", "f", "g", "h", "j", "k", "l", "ł", "m", "n", "ń", "p", "r", "s", "ś", "t", "w", "z", "ź", "ż");
$count =0;
$word = readline("word: ");
$wordSplit = str_split($word);
foreach ($wordSplit as $char) {
    if(in_array($char, $spol)) {
        $count++;
    }
}