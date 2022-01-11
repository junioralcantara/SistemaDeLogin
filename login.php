<?php
	//inicia a sessão
	session_start();

	//verifica se foi passado algum parâmetro pelo formulário, se não envia para index novamente
	if(empty($_POST) or (empty($_POST["usuario"]) or (empty($_POST["senha"])))){
		print "<script>location.href='index.php';</script>";
	}

	//conexão com o banco de dados
	include('config.php');

	//pegar os dados e jogar em variáveis
	$usuario = $_POST["usuario"];
	$senha = md5($_POST["senha"]);

	//query de consulta no banco
	$sql = "SELECT * FROM usuarios
			WHERE usuario = '{$usuario}'
			AND senha = '{$senha}'";

	$res = $conn->query($sql) or die($conn->error);

	$row = $res->fetch_object();

	//pega os dados e redireciona para a dashboard, se não, envia de volta para index
	if($res->num_rows > 0){
		$_SESSION["usuario"] = $usuario;
		$_SESSION["nome"] = $row->nome;
		$_SESSION["tipo"] = $row->tipo;
		print "<script>location.href='dashboard.php';</script>";
	}else{
		print "<script>alert('Usuário e/ou Senha incorreto(s)');</script>";
		print "<script>location.href='index.php';</script>";
		//header('Location: index.php');
	}