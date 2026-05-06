<?php
$pessoais = ['nome'=> 'Leandro Andrade Pereira'];
$profissionais = ['cargo' => 'Dev'];

$perfilCompleto = array_change($pessoais, $profissionais);
print_r ($perfilCompleto);
