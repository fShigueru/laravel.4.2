<?php
//busca todas as configurações
$config = Configuration::all();

$configuracoes = array();
foreach($config->toArray() as $key => $value) {
	$configuracoes[$value['configuracao']] = $value['valor'];
}

return $configuracoes;