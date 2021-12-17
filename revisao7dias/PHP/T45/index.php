<?php 
	function validarSenha($password)
	{
		if (strlen($password) < 8)
		{
			throw new Exception("A senha contém menos que 8 caracteres",100);
		}
		else
		{
			echo "Senha salva com sucesso";
		}
	}
	$password = "1234568";
	try
	{
		validarSenha($password);
	}
	catch(exception $e)
	{
		$error = 
		[
			"message" => $e->getMessage(),
			"code" => $e->getCode(),
			"line" => $e->getLine(),
			"file" => $e->getFile(),
		];
		echo "OCORREU O SEGUINTE ERRO:</br>";
		foreach($error as $key => $value)
		{
			echo "$key: $value</br>";
		}
	}
?>