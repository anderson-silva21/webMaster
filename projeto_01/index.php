<?php include('config.php'); ?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="apple-touch-icon" sizes="57x57" href="icon/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="icon/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="icon/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="icon/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="icon/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="icon/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="icon/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="icon/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="icon/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="icon/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="icon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="icon/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="icon/favicon-16x16.png">
		<link rel="manifest" href="icon/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">
		<title>Projeto 01</title> 
		<link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet"> 
		<link href="https://fonts.googleapis.com/css2?family=Sedgwick+Ave+Display&display=swap" rel="stylesheet">     
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<meta name="keywords" content="palavras-chave do meu website">
		<meta name="description" content="Descrição do meu website">
		<meta charset="utf-8"/>
	</head>
	<body>
		<base base="<?php echo INCLUDE_PATH ?>" /><!--Especifique um URL padrão e um destino padrão para todos os links em uma página:-->
		<?php
			$url = isset($_GET['url']) ? $_GET['url'] : 'home';
			switch ($url) {
				case 'sobre':
					echo '<target target="sobre" />';
					break;

				case 'servicos':
					echo '<target target="servicos" />';
					break;
			}
		?>
		<header>
			<div class="center">
				<div class="logo left"><img class="logotipo2" src="<?php echo INCLUDE_PATH; ?>images/logotipo2.png" width="32%" ></div><!--logo-->
				<nav class="desktop right">
					<ul>
						<li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
						<li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
						<li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
						<li><a realtime="contato" href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>  
					</ul>
				</nav><!--menu desktop-->
				<nav class="mobile right">
					<div class="botao-menu-mobile">
						<i class="fa fa-bars"></i>
					</div>
					<ul>
						<li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
						<li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
						<li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
						<li><a realtime="contato" href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>  
					</ul>
				</nav><!--menu mobile-->
				<div class="clear"></div><!--clear-->
			</div><!--center-->
		</header><!--header-->
		<div class="container-principal">
		<?php
			if(file_exists('pages/'.$url.'.php')){
				include('pages/'.$url.'.php');
			}else{
				if ($url != 'sobre' && $url != 'servicos') {
		
				$pagina404 = true;		
				include('pages/404.php');
				}else{
					include('pages/home.php');
				}
			}
		?><!--Verificação url-->
	</div><!--Container-principal-->
		<footer <?php if((isset($pagina404) && $pagina404 == true)) echo 'class= "fixed"'; ?>>
			<div class="center">
				<p>Todos os direitos reservados</p>
			</div><!--center-->
		</footer><!--footer-->
		<script src="https://maps.googleapis.com/maps/api/js?key=????"></script>
		<script src="<?php echo INCLUDE_PATH; ?>js/jquery.js"></script>
		<script src="<?php echo INCLUDE_PATH; ?>js/constants.js"> </script>
		<script src="<?php echo INCLUDE_PATH; ?>js/scripts.js"> </script>
	</body><!--body-->
</html>
