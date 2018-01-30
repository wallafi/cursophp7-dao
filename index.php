<?php

require_once("config.php");

/*$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);*/
///carrega um usuario
///$root = new Usuario();

//$root->loadById(3);
//echo $root;

//carrega uma lista de usuarios

///$lista = Usuario::getList();

///echo $lista;

///carrega uma lista de usuarios buscando pelo login

//$search = Usuario::search("jo");

//echo $search;

//carrega um usuario com login e senha

$usuario = new Usuario();
$usuario->login("joao","nx456");

echo $usuario;


?>