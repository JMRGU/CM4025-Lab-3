<html>
	<head>
	this is the head
	</head>
	<body>
		<?php
			$output = shell_exec('python r.py');
			echo "<p> The python script said: </p>";
			echo "<pre>$output</pre>";
		?>
	</body>
</html>