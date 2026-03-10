<?php
$najmniejsza = 999;
foreach($zadania as $liczba){
    if($liczba<$najmniejsza){
        $najmniejsza = $liczba;
    }
}    
echo $najmniejsza;
?>
