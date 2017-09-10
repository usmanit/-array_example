<?php

	$yamaha = array
  (
  array("ninja",22,18),
  array("soul GT",15,13),
  array("XEON RC",5,2),
  array("Mio J",17,15)
  );
	for ($row = 0; $row < 4; $row++) {
	echo "<p><b>Row number $row</b></p>";
	echo "<ul>";
	for ($col = 0; $col < 3; $col++) {
    echo "<li>".$yamaha[$row][$col]."</li>";
  }
  echo "</ul>";
	}
  ?>