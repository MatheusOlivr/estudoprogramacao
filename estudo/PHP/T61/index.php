<script src="https://www.google.com/recaptcha/api.js"></script>
<script>
   function onSubmit(token) {
     document.getElementById("demo-form").submit();
   }
</script>
<form method = "POST" action = "cadastro.php">
	<label for = "inputEmail">Digite seu e-mail para receber nossa newsletter</label>
	<br>
	<input type = "email" name = "inputEmail" id = "inputEmail">
	<br>
	<div class="g-recaptcha" data-sitekey="6LdaiSYdAAAAAHS7A164uiXYWI-Dy702KZKKCm4m"></div>
	<button>ME INSCREVER</button>
</form>
<!--
esse arquivo foi criado por um robo
-->