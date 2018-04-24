<!DOCTYPE html>

<html>

<body>

<p>This is a normal paragraph.</p>

<?php

	function myMath($x, $y = 2.0){
		return $x * $y;
	}

	$foo = "PHP";
	$bar = "XXXXXTREME";
	echo "<p>This is a paragraph ON " . $foo . "!!!! " . $bar . "</p>";
	echo "<p>Also the answer to your math is " . myMath(3) . "</p>";
	

?>

<p>This is a second normal paragraph.</p>

</body>
</html>