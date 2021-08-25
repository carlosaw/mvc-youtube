<html>
<head>
	<title>Youtube</title>
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/template.css" />
</head>
<body>
	<div class="topo">
	Youtube
	- <a href="<?php echo BASE_URL; ?>">Home</a>
	- <a href="<?php echo BASE_URL; ?>sobre">Sobre</a>
	- <a href="<?php echo BASE_URL; ?>contato">Contato</a>
	</div>

	<?php $this->loadViewInTemplate($viewName, $viewData); ?>
</body>
</html>