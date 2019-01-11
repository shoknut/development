<?php

// $type peut etre 'm', 'd' ou 'y'
function renderDateSelect($type)
{
	if ($type == 'm') {
		$min = 1;
		$max = 12;
	} elseif ($type == 'd') {
		$min = 1;
		$max = 31;
	} else {
		$min = 2018;
		$max = 2050;
	}

	$htmlStr = "";
	$htmlStr .= "<select name='dateEnd" . $type . "'>";
	for ($i = $min; $i <= $max; $i++) {
		$htmlStr .= "<option value='". $i. "'>" . $i . "</option>";
	}
	$htmlStr .= "</select>";

	return $htmlStr;
}

?>

<html>
	<body>
		<form>
			<?php
				echo renderDateSelect('d');
				echo " / ";
				echo renderDateSelect('m');
				echo " / ";
				echo renderDateSelect('y');
				echo " / ";
			?>
		</form>
	</body>
</html>