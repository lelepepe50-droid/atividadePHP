<?php
$fila = ["Leandro", "joão", "Carlos", "Ana"];
echo "Fila Inicial: " . implode(", ", $fila) . "\n";

array_push($fila, "Daniel");
echo "Após chegar Daniel: " . implode(", ", $fila) . "\n";

$atendido = array_shift($fila);
echo "Pessoa atendida: " . $atendido . "\n";

echo "Fila após atendimento: " . implode(", ", $fila) . "\n";
?>
