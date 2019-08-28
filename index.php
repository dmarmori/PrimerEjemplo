<?php

/* Mostrar todos los numeros primos del 1 al 1000 */
	$numero;

	for($numero=1;$numero<1001;$numero++)
	{
		$BanderaNoEsPrimo=0;

		for($anterior=2;$anterior<$numero;$anterior++)
		{
			//echo "$anterior;";
			if ($numero%$anterior==0)
			{
				$BanderaNoEsPrimo=1;
			}
		} 
		if($BanderaNoEsPrimo==0)
		{
			echo $numero;
			echo "<br>";
		}
		
	}

	

?>