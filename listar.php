<?php
	$conexao = mysqli_connect("localhost", "id11034168_root	", "webhost", "id11034168_crudusuario");
								//local 	usuario bd 			senha 		banco

	$query = "SELECT * FROM tb_usuario ORDER by nm_usuario";

	$result = mysqli_query($conecta,$query);

	$registros = array(
		'pessoas'=>array()
	);

	$i = 0;

	while ($linha = mysqli_fetch($result)) {
		$registros['pessoas'][$i] = array(
			'codigo'=>$linha['cd_usuario'],
			'nome'=>$linha['nm_usuario'],
			'email'=>$linha['ds_email'],
			'senha'=>$linha['ds_senha']
		);
		$i++;
	}

	echo json_encode($registros);
	
?>