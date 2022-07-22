<?php

$keyword = $_GET["keyword"];

if($keyword == "irza") {
	$keyword = "BOOM!!!";
	echo "<style>
		* {
			display: none;
		}

		body {
			background-color: black;
		}
	</style>";
} else {
	$keyword = "Aman...";
}

?>

<td colspan="5">
	<h1><?= $keyword; ?></h1>
</td>