<?php
require 'header.php';
?>
<div class="main">
	<div class="form">
		<h2>Add new pin</h2>
		<form action="./add_pin.php" method="POST">
			GPIO Pin Number
			<select name="pin">
			<?php
			$pins = array('4', '17', '27', '22', '18', '23', '24', '25');
			$in_use = scandir("./pin");
			foreach ($pins as $pin) {
				if (!in_array($pin, $in_use)) {
					echo "<option value='$pin'>$pin</option>";
				}
			}
			?>
			</select>
			<input type="text" name="name" placeholder="Pin Name"/>
			<input type="submit" value="Add Pin"/>
		</form>
	</div>
</div>
