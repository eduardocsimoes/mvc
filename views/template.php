<html>
	<head>
		<title>Meu site</title>
	</head>
	<body>
		<a href="<?php echo BASE_URL; ?>">Home</a>
		<a href="<?php echo BASE_URL; ?>galeria">Galeria</a>
		<h1>Este é o topo</h1>
		<hr>
		<?php $this->loadViewInTemplate($viewName, $viewData); ?>
	</body>
</html>