<?php
	function checkIfTheStudentPassTheGrade($grade)
	{
		if ($grade >=7)
		{
			echo "Parâbèns VOCÊ PASSOU você está acima da média";
		}
		elseif($grade >=5)
		{
			echo "Parâbéns VOCÊ PASSOU você està na média";
		}
		elseif($grade < 5)
		{
			echo "Infelizmente você reprovou";
		}
	}
	$notaAluno = 4;
	checkIfTheStudentPassTheGrade($notaAluno);
?>
<!--
esse arquivo foi criado por um robo
-->