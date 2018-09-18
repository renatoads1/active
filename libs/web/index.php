<?php
require_once dirname(__FILE__) . '/../ActiveRecord.php';

ActiveRecord\Config::initialize(function($cfg)
{//direcionar para a pasta dos modelos 
    $cfg->set_model_directory('models');
    //configuração do banco
    $cfg->set_connections(array('development' => 'mysql://root:@127.0.0.1/contacasal'));
});

if(isset($_GET["user"]) && isset($_GET["senha"])){
    $user = $_GET["user"];
    $pass = $_GET["senha"];
    $resp = Esposas::find("count",array("conditions"=>array("nomeEsposa =? and senhaEsposa=?",$user,$pass)));
    if($resp==null){
    $user = $_GET["user"];
    $pass = $_GET["senha"];
    $resp = Maridos::find("count",array("conditions"=>array("nomeMarido =? and senhaMarido=?",$user,$pass)));
    
    if($resp==NULL){
        echo("erro ao efetuar login");
    }else{
        echo("ok");
        }
    
    }else{
       echo("ok"); 
    }
    
   
    
}else{
    echo("sem parametro");
}



//htmlspecialchars()
//echo(utf8_encode($despesa->nome));
//$pais = Pais::find(1);
//print_r($pais->nome);
////busca nomes da clase modelo da tabela usuários
//$user = Usuarios::find(1);
////->fetchAll(\PDO::FETCH_ASSOC)
////altera nome do usuario da tabela do modelo usuarios
//$user->update_attributes(array("nome"=>"renato lindo"));
////imprime nome na tela
//print_r($user->nome);
////cria novo usuario
//$user->create(array('nome' => 'kelle', 'senha' => 'auehua'));
////busca pelo nome
//$user = Usuarios::find_by_name('renato');
////update na classe e na tabela do banco
//$user->name = 'Heleninha';
//$user->save();
////deleta usuario
//$user->delete();
?>





