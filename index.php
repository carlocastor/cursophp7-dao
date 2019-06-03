<?php
	require_once("config.php");
/*
	$sql = new Sql();
	$usuarios = $sql->select("SELECT * FROM tb_usuarios");
	echo json_encode($usuarios);

// CARREGA APENAS UM USUÁRIO	
	$root = new Usuario();
	$root->loadById(2);
	echo $root;


//	CARREGA UMA LISTA DE USUÁRIOS
	$lista = Usuario::getList();
	echo json_encode($lista);


//	CARREGA UMA LISTA DE USUÁRIOS BUSCANDO PELO LOGIN
	$search = Usuario::search("car");
	echo json_encode($search);
*/
//	CARREGA UM USUÀRIO USANDO O LOGIN E SENHA
	$usuario = new Usuario();
	$usuario->login("root", "12223");
	echo $usuario;

?>