<?php 

require_once("config.php");

/*$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_usuarios");
echo json_encode($usuarios);*/

// Carrega um usuario
//$root = new Usuario();
//$root->loadById(4);
//echo $root;

//Carrega uma lista de usuario
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuario procurando com login
//echo json_encode($search);

//Carrega usuario usando o login e a senha
//$usuario = new Usuario();
//$usuario->login("user","!@#$");
//echo $usuario;

//Inserir aluno novo
$aluno = new Usuario("Felix", "Raba");

$aluno->insert();

echo $aluno;

 ?>