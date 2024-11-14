<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once("./config.php");

// Carrega um usuario
// $root = new Usuario();
// $root->loadById(2);
// echo $root;

// Carrega uma lista de usuarios
// $lista = Usuario::getList();
// echo json_encode($lista)

// Busca um usuario
// $search = Usuario::search("El");
// echo json_encode($search)

// Carrega um usuario usando o login e a senha
// $usuario = new Usuario();
// $usuario->login("Eliseu", "123456");
// echo $usuario

// Inserir Usuario
// $aluno = new Usuario("aluno", "@lun0");
// $aluno->insert();
// echo $aluno;

// Update
$usuario = new Usuario();

$usuario->loadById(2);

$usuario->update("Vinicius Katsuaki Shiroma", "892738");

echo $usuario;

?>