
<?php
	$buku = array (
	array("IPA",33 ,12 ),
	array("IPS",23 ,21 ), 
	array("MATEMATIKA",24 ,43 ),
	array("BAHASA INDONESIA",42 ,32 )
	);
	
	echo $buku[0][0].": In stock: ".$buku[0][1].", sold: ".$buku[0][2].".<br>";
	echo $buku[1][0].": In stock: ".$buku[1][1].", sold: ".$buku[1][2].".<br>";
	echo $buku[2][0].": In stock: ".$buku[2][1].", sold: ".$buku[2][2].".<br>";
	echo $buku[3][0].": In stock: ".$buku[3][1].", sold: ".$buku[3][2].".<br>";
	 
	for ($row = 0; $row < 4; $row++) { 
	echo "<p><b>Row number $row</b></p>" ;  
	echo "<ul>"; 
	for ($col = 0; $col < 3; $col++) {    
	echo "<li>".$buku[$row][$col]."</li>"; 
	} 
	echo "</ul>";
	} 
	
	
?>

