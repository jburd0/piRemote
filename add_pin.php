<?php
if (isset($_POST['name']) && isset($_POST['pin'])) {
	$name = $_POST['name'];
	$pin = $_POST['pin'];
	echo "name: $name, pin: $pin";
	file_put_contents("./pin/$pin", "$name");
} else {
	echo "Not all information was filled out.";
}
?>
