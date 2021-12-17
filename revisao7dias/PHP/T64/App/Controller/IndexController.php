<?php
	class IndexController
	{
		private $texto;
		private $chave1DaCriptografia;
		private $chave2DaCriptografia;
		public function __construct()
		{
			if($_SERVER["REQUEST_METHOD"] === "POST")
			{
				$this->texto = $_POST["inputTexto"]; 
				$chave1 = $_POST["inputChave1"];
				$chave2 = $_POST['inputChave2'];
				$escolha = $_POST["selectEscolha"];
				$this->converterChaveEm16Caracteres($chave1,$chave2);
				$this->escolha($escolha);
			}
		}
		protected function escolha($escolha)
		{
			switch($escolha)
			{
				case "criptografar":
					echo $this->criptografar();
				break;
				case "descriptografar":
					echo $this->descriptografar();
				break;
				default:
				break;
			}
		}
		protected function criptografar()
		{
			$result = openssl_encrypt($this->texto,"AES-128-CBC",$this->chave1DaCriptografia,0,$this->chave2DaCriptografia);
			return $result;
		}
		protected function converterChaveEm16Caracteres($chave1,$chave2)
		{
			$this->chave1DaCriptografia = pack("a16",$chave1);
			$this->chave2DaCriptografia = pack("a16",$chave2);
		}
		protected function descriptografar()
		{
			$result = openssl_decrypt($this->texto,"AES-128-CBC",$this->chave1DaCriptografia,0,$this->chave2DaCriptografia);
			return $result;
		}
	}
?>