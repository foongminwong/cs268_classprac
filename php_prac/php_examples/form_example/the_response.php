<!DOCTYPE html>

<html>
<body>

<?php

if ($_POST["name"] !== $_POST["name2"]) {
	echo "ur dumb";
} elseif (!strpos($_POST["email"],"@") || !strpos($_POST["email"],".")) {
	echo "ur dubble dumb";
} else {
	echo "WELCOME TO THE RESPONSE PAGE, " . $_POST["name"] . "!";
}

?>

</body>
</html>
