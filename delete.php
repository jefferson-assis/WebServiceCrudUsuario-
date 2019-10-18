<?php
	$conecta = mysqli_connect("localhost", "id11034168_root	", "webhost", "id11034168_crudusuario");

	$codigo = $_POST['codigo'];

	$query = "delete from tb_usuario where cd_usuario = $codigo";

	mysqli_query($conecta,$query);

	echo "Registro removido com sucesso";
?>