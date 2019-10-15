<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>User View</title>
</head>
<body>
	<?php
	foreach ($result as $object) {
		echo $object->user;
	}
	?>
</body>
</html>