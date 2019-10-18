<?php
	$conecta = mysqli_connect("localhost");

	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$codigo = $_POST['codigo'];

	$query = "update tb_usuario set nm_usuario = '$nome', ds_email = '$email', ds_senha = '$senha' where cd_usuario = $codigo";

	mysqli_query($conecta,$query);

	echo "Cadastro alterado com sucesso";
?>