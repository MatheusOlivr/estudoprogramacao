<?PHP
	$id  = (isset($_GET["id"]))?$_GET["id"]:1;
	if(!is_numeric($id)|| strlen($id) > 5)
	{
		exit("pegamos você");
	}
	$conexao =	new mysqli("localhost","root","","mydatabase");
	$sql = "SELECT * FROM estoque WHERE id = $id";
	$exec = mysqli_query($conexao,$sql);
	while ($resultado = mysqli_fetch_object($exec))
	{
		print_r($resultado);
	}
?>