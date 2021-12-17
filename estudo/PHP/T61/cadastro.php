<?php 
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array(
	    "secret"=>"6LdaiSYdAAAAAOsvFuAFJnLVQMuDSMRaat7VVTrR",
	    "response"=>$_POST["g-recaptcha-response"],
	    "remoteip"=>$_SERVER["REMOTE_ADDR"]
	)));

	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$recaptcha = json_decode(curl_exec($ch), true);
	curl_close($ch);
	print_r($recaptcha);
		if ($recaptcha["success"] === true)
	{
		$email = $_POST["inputEmail"];
		echo "deu certo";
	}
?>