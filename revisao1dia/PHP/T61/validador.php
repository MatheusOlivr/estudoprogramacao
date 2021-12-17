<?php 
	if($_SERVER["REQUEST_METHOD"] === "POST")
	{
		$api= "https://www.google.com/recaptcha/api/siteverify";
		$ch = curl_init($api);
		curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array(
	    "secret"=>"6Lex8igdAAAAAKx7TOXSaZoinbywf7vTChNq8QLk",
	    "response"=>$_POST["g-recaptcha-response"],
	    "remoteip"=>$_SERVER["REMOTE_ADDR"]
	)));
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
		$recaptcha = json_decode(curl_exec($ch),true);
		curl_close($ch); 
		if ($recaptcha["success"])
		{
			echo "SEU CADASTRO FOI FEITO COM SUCESSO";
		}
		else
		{
			echo "NÃO FOI POSSIVÉL VALIDAR O RECAPTCHA";
		}
	}
?>