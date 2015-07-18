<?php
require'./header.php';
$value = file_get_contents("/sys/class/gpio/gpio25/value");
?>
<div class="main">
	<h1>GPIO Pins</h1>	
	<?php
	$dir = scandir("./pin");
	foreach ($dir as $pin) {
		if ($pin != "." && $pin != "..") {
			$name = file_get_contents("./pin/$pin");
			$state = file_get_contents("/sys/class/gpio/gpio$pin/value");
			if ($state == 0) {
				$checked = "checked";
			} else {
				$checked = "";
			}
			echo "<div class='pin'>
				<h3>$name</h3>
				<label><input rowid='$pin' type='checkbox' class='ios-switch bigswitch' $checked/><div><div></div></div></label>
			</div>";
		}
	}
	?>
</div>
<script src="./jquery/jquery-2.1.4.js"></script>
<script src="./jquery/switch.js"></script>
