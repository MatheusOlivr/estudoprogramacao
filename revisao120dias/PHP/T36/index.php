<?php
	class Connection
	{
		public $conn;
        public function __construct($dbname,$dbuser,$dbpass)
        {
        	$host = "mysql:host=localhost;dbname=".$dbname;
            $this->conn = new PDO($host,$dbuser,$dbpass);
        }	
		public function insert($query,$values = array())
		{
			$stmt = $this->conn->prepare($query);
			$this->bindParams($stmt,$values);
			$stmt->execute();
		}
		protected function bindParam($stmt,$name,$value)
		{
			return $stmt->bindParam($name,$value);
		}
		protected function bindParams($stmt,$values)
		{
			foreach($values as $name => $value)
			{
				$this->bindParam($stmt,$name,$value);
			}
		}

	}
	$teste = new Connection("db_curso_web","root","");

?>
<!--
esse arquivo foi criado por um robo
-->