<?php
$klucze = array('jeden','dwa','trzy','cztery','pięć','sześć','siedem','osiem','dziewięć','dziesięć');
// od tego miejsca rozwiązanie zdającego

    for ($i=0; $i<10; $i++){
        $asocjacyjna = array(
            $klucze[$i] => $zadania[$i]
        );
    var_dump($asocjacyjna);
    }
?>