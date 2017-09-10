<?php
	$buku = array (
	array("IPA",33 ,12 ),
	array("IPS",23 ,21 ), 
	array("MATEMATIKA",24 ,43 ),
	array("BAHASA INDONESIA",42 ,32 )
	);
	
	for ($row = 0; $row < 4; $row++) { 
	echo "<p><b>Row number $row</b></p>" ;  
	echo "<ul>"; 
	for ($col = 0; $col < 3; $col++) {    
	echo "<li>".$buku[$row][$col]."</li>"; 
	} 
	echo "</ul>";
	} 
	
	
?>