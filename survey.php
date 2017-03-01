<html>
<head>
<link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/pure.css">
	</head>
	<body>
		<form>
			<table>
				<th><td>Choice 1</td><td>Choice 2</td></th>
<?php

$features = array("Feature 1" => array("A", "B", "C"),
"Feature 2" => array("C", "D", "E", "F"));

foreach ($features as $name => $values) {
	print "<tr>";
	$keys = array_rand($values, 2);
	print "<td>" . $name . "</td>";
    foreach ($keys as $key) {
        print "<td>" . $values[$key] . "</td>";
    }
    print "</tr>";
}

?>
			</table>
			<p>Question 1?</p>
			<p><input type="radio" name="radio" value="choice1">Choice 1</p>
			<p><input type="radio" name="radio" value="choice2">Choice 2</p>
			<p>Question 2?</p>
			<p><input type="range" name="slider"></p>
			<p><input type="submit"></p>
		</form>
	</body>
</html>
