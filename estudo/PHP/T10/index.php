<?php
	$cont = 0;
	while($cont <=15)
	{
		$array[] = $cont;
		$cont++;
	}
    //Primeiro método
    foreach($array as $key)
    {
    	echo "O indice do array array é:[$key]</br>";
    }
    echo "</br></br>";
    // segundo mmétodo
    foreach($array as $key =>$value)
    {
		echo "O valor do array array é:[$value]</br>";	
    }
?>