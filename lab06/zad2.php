<?php
$lista1 = array(1,2,3,4,5,6,7,8,9,10);
$lista2 = array(2,3,4,5,6,7,8,9,10,11);
for ($i=0; $i <10; $i++) {
    echo nl2br($lista1[$i]."     ".$lista2[$i]."     ".pow($lista1[$i],$lista2[$i])."\n");
}