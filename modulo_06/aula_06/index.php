<?php
	$nome = 'Alane Ribeiro dos Santos Andrade';

	//separar string em array
	$nomes = explode(' ',$nome);
	print_r($nomes);
	echo '<hr>';

	$nome2 = implode(' ', $nomes);
	print_r($nome2); 

	echo htmlentities('<?php echo olá texto entre tags php ?>');


?>