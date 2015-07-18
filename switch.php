<?php
$pin = $_GET['pin'];
$current = file_get_contents("/sys/class/gpio/gpio$pin/value");
if ($current == 1) {
	file_put_contents("/sys/class/gpio/gpio$pin/value", 0);
} else {
	file_put_contents("/sys/class/gpio/gpio$pin/value", 1);
}
?>
