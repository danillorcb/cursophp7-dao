<?php

require_once 'config.php';

// Carrega um usuário
// $root = new Usuario();
// $root->loadById();
// echo $root;

// Carrega uma lista de usuários
// $lista = Usuario::getList();
// echo json_encode($lista);

// Carrega uma lista de usuários buscando pelo login
// $search = Usuario::search('e');
// echo json_encode($search);

// Carrega um usuário usando o login e senha
// $usuario = new Usuario();
// $usuario->login("root", "!@#$%");
// echo $usuario;

// Criando um novo usuário
// $aluno = new Usuario("teste","senha");
// $aluno->insert();
// echo $aluno;

// Atualizando um usuário
// $usuario = new Usuario();
// $usuario->loadById(8);
// $usuario->update("professor", "girafales");
// echo $usuario;

// Excluindo um usuário
$usuario = new Usuario();
$usuario->loadById(8);
$usuario->delete();
echo $usuario;
