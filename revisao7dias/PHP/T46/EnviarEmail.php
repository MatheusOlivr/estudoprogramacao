<?php
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	require 'vendor/autoload.php';
	class EnviarEmail
	{
		protected $nomeRemetente;
		protected $emailRemetente;
		protected $senhaRemetente;
		protected $nomeDestinatario;
		protected $emailDestinatario; 
		protected $phpMailer;
		public function __construct()
		{
			$this->phpMailer = new PHPMailer;
			$this->phpMailer->isSMTP();
			$this->phpMailer->SMTPDebug = 0;
			$this->phpMailer->Host = 'smtp.gmail.com';
			$this->phpMailer->Port = 465;
			$this->phpMailer->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
			$this->phpMailer->SMTPAuth = true;
			$this->nomeRemetente = "Gerador Curriculum Vitae";
			$this->emailRemetente = "contato.geradorcurriculumvitae@gmail.com";
			$this->senhaRemetente = "CurriculoV1tae1324@#0"; 
			$this->phpMailer->Username = $this->emailRemetente;
			$this->phpMailer->Password = $this->senhaRemetente;
		}
		public function configurarDestinatario($emailDestinatario,$nomeDestinatario)
		{
			$this->nomeDestinatario = $nomeDestinatario;
			$this->emailDestinatario = $emailDestinatario;
		}
		public function configurarMensagem($descricao,$mensagemHtml,$mensagemTexto = null,$imagem = null)
		{
			$this->phpMailer->setFrom($this->emailDestinatario,$this->nomeDestinatario);
			$this->phpMailer->addReplyTo('replyto@example.com', 'First Last');
			$this->phpMailer->addAddress($this->emailRemetente,$this->nomeRemetente);
			$this->phpMailer->Subject = $descricao;
			$this->phpMailer->msgHTML(file_get_contents($mensagemHtml), __DIR__);
			$this->phpMailer->AltBody = $mensagemTexto;
			$this->phpMailer->addAttachment($imagem);
		}
		public function EnviarMensagem()
		{
			if($this->phpMailer->send())
			{
				echo "Ocorreu um erro e foi mandado um e-mail para o desenvolvedor do app para que ele corrija o erro o mais rapído possivél";
			}

		}
	}
?>