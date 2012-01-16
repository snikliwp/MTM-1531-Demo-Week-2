<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Say Hello</title>
</head>

<body>

<!-- 
the isset function checks to see that the defined parameter is being passed 
if it is not there
-->
<?php if (isset($_GET['name'])) : ?>

<h1>Hello, <?php

	echo $_GET["name"];
	echo $_GET["lastname"];

?> </h1>
<?php endif; ?>



</body>
</html>