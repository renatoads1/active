<?php
require_once dirname(__FILE__) . '/../ActiveRecord.php';

ActiveRecord\Config::initialize(function($cfg)
{//direcionar para a pasta dos modelos 
    $cfg->set_model_directory('models/');
    //configuração do banco
    $cfg->set_connections(array('development' => 'mysql://nave:nave@192.168.15.50/testerenato'));
});
//busca nomes da clase modelo da tabela usuários
$user = Usuarios::find(1);
//->fetchAll(\PDO::FETCH_ASSOC)
//altera nome do usuario da tabela do modelo usuarios
$user->update_attributes(array("nome"=>"renato lindo"));
//imprime nome na tela
print_r($user->nome);
//cria novo usuario
$user->create(array('nome' => 'kelle', 'senha' => 'auehua'));
//busca pelo nome
$user = Usuarios::find_by_name('renato');
//update na classe e na tabela do banco
$user->name = 'Heleninha';
$user->save();
//deleta usuario
$user->delete();
?>





