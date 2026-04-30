<?php
$infoEmpresa =[
    'nome' => 'Fretes',
    'funcionario' => 'Leandro Andrade',
    'ano atual' => '2026',
];

echo "Quantidade: " . count($infoEmpresa);
echo "<br>";
 
$chaves = array_keys($infoEmpresa);
 
echo "Chaves: ";
print_r($chaves);


?>
