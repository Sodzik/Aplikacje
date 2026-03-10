<?php
$zadania = array();
for ($i=0; $i<10; $i++){
    $zadania[$i] = rand(100,999);
}
foreach ($zadania as $cyfry){
    
echo "<table><tr><td>$cyfry</td></tr></table>";
}
?>