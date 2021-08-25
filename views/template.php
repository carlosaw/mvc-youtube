<html>
<head>
	<title>Youtube</title>
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/template.css" />
	<link rel="favicon icon" href="#" />
	<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery-1.7.1.min.js"></script>
	<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script.js"></script>
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