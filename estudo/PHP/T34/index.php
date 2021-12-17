<?php
	class Connection
	{
		public static function getDb()
		{
			$HOST = "mysql:dbname=dbteste;host=localhost";
			$USER = "root";
			$PASS = "";
			$conn = new PDO($HOST,$USER,$PASS);
			return $conn;
		}
		public function insert($query,$bindParams)
		{
			$stmt = Connection::getDb()->prepare($query);
			$this->bindParams($stmt,$bindParams);
			$stmt->execute();

		}
		public function bindparam($stmt,$name,$value)
		{
			return $stmt->bindParam($name,$value);
		}
		public function bindParams($stmt,$bindParams)
		{
			foreach($bindParams as $name => $value)
			{
				$this->bindParam($stmt,$name,$value);
			}	
		}
	}
	$teste = new Connection();
	$bindParam = 
	[
		":ID" => "2",
		":NOME" => "Matheus",
		":IDADE" => 19
	];
	$teste->insert("INSERT INTO tb_teste (id,nome,idade) VALUES (:ID,:NOME,:IDADE)",$bindParam);
	$teste->insert("DELETE FROM tb_teste WHERE id = :ID",array(":ID" => 2));
?>
<!--
esse arquivo foi criado por um robo
-->