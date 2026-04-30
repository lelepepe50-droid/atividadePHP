<?php
$produtos1 = ['Teclado', 'Mouse','Monitor'];
$produtos2 = ['Mouse', 'Celular','Pc'];

$carrinho_total = array_merge($produtos1,$produtos2);

echo"<pre>";
print_r($carrinho_total);
?>