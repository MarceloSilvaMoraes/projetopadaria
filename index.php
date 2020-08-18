<?php require "conexao.php"; ?>
<?php require "usuarios.logado.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Padaria</title>
	<link rel="icon" href="assets/imagens/p1.png" type="image/x-icon" />
	<meta name="viewport" content="width=device-width,intial-scale=1, shrink-to-fit=on">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" >
	<script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>

</head>
<body>
	<div class="wrapper">
		<header id="home">
			<nav>
				<div class="menu-icon">
					<i class="fa fa-bars fa-2x"></i>
				</div>

				<div class="logo" >
					LOGO
				</div>

				<div class="menu">
					<ul>
						<li><a href="#home">Home</a></li>
						<li><a href="#sobre">Sobre</a></li>
						<li><a href="#produtos">Produtos</a></li>
						<li><a href="#footer">Contato</a></li>
							<?php if(isset($_SESSION['cLogin']) && !empty($_SESSION['cLogin'])): ?>
					<li><a href="sair.php" class="nav-item nav-link">Sair</a></li>
					<?php else: ?>
						<li><a href="login.php" class="nav-item nav-link">Login</a></li>
					<?php endif; ?>
			
			<?php if(isset($_SESSION['cLogin']) && !empty($_SESSION['cLogin'])): ?>
			<a href="#" class="nav-item nav-link">
				<? 
				$sql = "SELECT * FROM qt_acessos WHERE hora > :hora GROUP BY ip";
				$sql= $pdo->prepare($sql);
				$sql->bindValue(":hora", date('H:i:s', strtotime("-60 minutes")));
				$sql->execute();
				$contagemHora = $sql->rowCount();

				echo "Online em 1h=".$contagemHora." -";

				$sql = "SELECT * FROM qt_acessos WHERE id_data > :id_data GROUP BY ip";
				$sql= $pdo->prepare($sql);
				$sql->bindValue(":id_data", date('d/m/y', strtotime("-1 days")));
				$sql->execute();
				$contagemDia = $sql->rowCount();

				echo "Online no dia=".$contagemDia;
				
				?>

			</a>
			<?php else: ?>

			<?php endif; ?>
						
					</ul>
				</div>
			</nav>
			<div class="padaria">
				<img src="assets/imagens/pada.png">
			</div>
		</header>
		<div id="slideshowExemplo" class="slide carousel" data-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active" >
					<div class="carousel-caption d-none d-md-block"></div>
					<img src="assets/imagens/q1.jpg" class="w-100">
				</div>
				<div class="carousel-item">
					<div class="carousel-caption d-none d-md-block"></div>
					<img src="assets/imagens/q2.jpg" class="w-100">
				</div>
				<div class="carousel-item">
					<div class="carousel-caption d-none d-md-block">
					</div>
					<img src="assets/imagens/w.jpg" class="w-100">
				</div>
			</div>

			<!--<p class="carousel-control-prev" href="#slideshowExemplo" data-slide="prev">
				<span class="carousel-control-prev-icon"></span>
			</p>
			<p class="carousel-control-next" href="#slideshowExemplo" data-slide="next">
				<span class="carousel-control-next-icon"></span>
			</p>-->
		</div>
		
		<div class="produtos"><h3 id="produtos">Nossos Produtos</h3></div>
		<div class="produtos-especificos" id="pe"><h4>PÃES</h4></div>
		
		<div class="content">	
			<div class="content-int">	
				<div class="pao">
					<img src="assets/imagens/1.jpg" width="300" height="200">
					<p>
						-1-Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and 
					</p>

				</div>		
				<div class="pao">
					<img src="assets/imagens/2.jpg" width="300" height="200">
					<p>
						-2-Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
					</p>
				</div>
				<div class="pao">
					<img src="assets/imagens/3.jpg" width="300" height="200">
					<p>
						-3-Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
					</p>
				</div>
			</div>
		</div>
		<div class="todos-produtos1">
			<div class="produtos-especificos"><h4>PÃES</h4> </div>
		</div>
		<div class="content">	
			<div class="content-int">	
				<div class="pao">
					<img src="assets/imagens/4.jpg" width="300" height="200">
					<p>
						-1-Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and 
					</p>

				</div>		
				<div class="pao">
					<img src="assets/imagens/5.jpg" width="300" height="200">
					<p>
						-1-Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
					</p>
				</div>
				<div class="pao">
					<img src="assets/imagens/6.jpg" width="300" height="200">
					<p>
						-1-Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
					</p>
				</div>
			</div>
		</div>
		<div class="todos-produtos">
			<div class="produtos-especificos" id="pa"><h4>PÃES</h4> </div>
		</div>
		<div class="content">	
			<div class="content-int">	
				<div class="pao">
					<img src="assets/imagens/1.jpg" width="300" height="200">
					<p>
						-1-Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and 
					</p>

				</div>		
				<div class="pao">
					<img src="assets/imagens/2.jpg" width="300" height="200">
					<p>
						-1-Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
					</p>
				</div>
				<div class="pao">
					<img src="assets/imagens/3.jpg" width="300" height="200">
					<p>
						-1-Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
					</p>
				</div>
			</div>
		</div>
		<div class="produtos"><h3>Localização</h3></div>
		<aside>
			<div class="localização">
				<div class="end">
					<table class="table table-hover table-sm ">
						<thead>
							<tr>ENDEREÇO</tr>
						</thead>
						<tbody>
							<th>Rua Magalhães Barata<br>
								Bairro: Santa Cruz<br> 
								Numero: 000<br> 
							</th>
						</tbody>
					</table>
				</div>
				<div class="mapa">
					<p>
						MAPA DE LOCALIZAÇÃO

					</p>
				</div>
			</div>
		</aside>
		<div class="produtos"><h3 id="sobre">Sobre a Empresa</h3></div>
		<aside>
			<div class="sobre">
				<p>
					-1-Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and 
					-1-Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and 
					-1-Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and 
					-1-Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and 
				</p>
			</div>
		</aside>
		<footer id="footer">
			<div class="rodape">
				<div class="contato">
					<strong>
						<img src="assets/imagens/tel.png">Contato:
					</strong>
					<p>
						(91)99145-4870
					</p>
					<p>
						(91)99145-4870
					</p>
				</div>
				<div class="email">
					<strong>
						<img src="assets/imagens/mail.png"> Email:
					</strong>
					<p>
						marcelo.lp.ops@gmail.com
					</p>
					<p>
						marcelo.lp.ops@gmail.com
					</p>
				</div>
				<div class="social">
					<strong>
						Social:
					</strong>
					<p>
						<img src="assets/imagens/f1.png">Facebook
					</p>
					<p>
						<img src="assets/imagens/whatsapp.png">Whatsapp
					</p>
					<p>
						<img src="assets/imagens/i2.png">Instagran
					</p>
				</div>
			</div>
		</footer>
	</div>
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <script type="text/javascript" src="assets/js/script.js"></script>
  <script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="assets/css/css/fontawesome-all.min.css">
</body>
</html>