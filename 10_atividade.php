<?php
$lista = [];
 
array_push($lista, 'Item Meio 1', 'Item Final 2');
 
array_unshift($lista, 'Item Inicial');
 
echo "<pre>";
print_r($lista);
echo "</pre>";
?>