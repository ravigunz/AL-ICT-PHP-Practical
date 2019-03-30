<!DOCTYPE html>
<html>
<head><title>PHP Test</title></head>
<body>
<h1>PHP Basics</h1>
	<?php
		class Car(){
			function Car() {
				$this->model = "VW";
			}
		}
		$herbie = new Car();

		echo $herbie->model;
	?>
</body>
</html>