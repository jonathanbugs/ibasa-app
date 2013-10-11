<!DOCTYPE html>
<html class="no-js">
	<head>
		<meta charset="utf-8">
		<title>Ibasa APP</title>

		<link rel="stylesheet" href="css/template.css"/>
		<link rel="stylesheet" href="css/inicial.css"/>
	</head>
	<body>
		<header id="header"></header>
		
	
		<section id="sessaoBlocos" class="sessao">
			<div class="container clearfix">
				<? include 'includes/sidebar.php'; ?>
				<? include 'includes/header-guia.php'; ?>

				<section class="content clearfix">

					<!-- ULTIMOS CADASTROS -->
					<div class="blocos blocoCadastros">
						<span class="titulo">
							<span>Últimos proprietários</span>
							<span class="tituloMaior">cadastrados</span>
						</span>

						<ul class="listaUl">
							<li class="listaLi">
								<a class="listaLink geralTransition clearfix" href="javascript:;">
									<span class="iconeSeta geralTransition"></span>
									<img class="listaImg geralTransition" src="img/gerais/foto1.jpg" alt="" />
									<span class="listaInfos">
										<span class="listaNome">Getúlio Flores Heitling</span>
										<span>51 3572 3000</span>
										<span>getulio@gmail.com</span>
									</span>
								</a>
							</li>
							<li class="listaLi">
								<a class="listaLink geralTransition clearfix" href="javascript:;">
									<span class="iconeSeta geralTransition"></span>
									<img class="listaImg geralTransition" src="img/gerais/foto2.jpg" alt="" />
									<span class="listaInfos">
										<span class="listaNome">Amandito Ceroloei</span>
										<span>51 3572 3000</span>
										<span>getulio@gmail.com</span>
									</span>
								</a>
							</li>
							<li class="listaLi">
								<a class="listaLink geralTransition clearfix" href="javascript:;">
									<span class="iconeSeta geralTransition"></span>
									<img class="listaImg geralTransition" src="img/gerais/foto3.jpg" alt="" />
									<span class="listaInfos">
										<span class="listaNome">Adelino Fusty</span>
										<span>51 3572 3000</span>
										<span>getulio@gmail.com</span>
									</span>
								</a>
							</li>
						</ul>

						<a class="btArquivo hoverBts ir" href="javascript:;" target="_blank">
							<span class="frontBt"></span>
							<span class="backBt"></span>
							Ir para arquivo de proprietários
						</a>
					</div>

					<!-- PROXIMAS CONSULTAS -->
					<div class="blocos blocoConsultas">
						<div class="conteudoConsultas">
							<span class="titulo">
								<span>Próximas</span>
								<span class="tituloMaior">Consultas</span>
							</span>

							<ul class="listaUl">
								<li class="listaLi">
									<a class="listaLink geralTransition clearfix" href="javascript:;">
										<span class="iconeSeta geralTransition"></span>
										<span class="dataHora">
											<span class="data">20/10</span>
											<span class="hora">9:30h</span>
										</span>
										<span class="listaInfos">
											<span class="listaNome">Rogério Nunes</span>
											<span>Gato / Persa Teacup</span>
											<span class="listaTipo">Consulta</span>
										</span>
										<span class="iconeSeta2 geralTransition"></span>
									</a>
								</li>
								<li class="listaLi">
									<a class="listaLink geralTransition clearfix" href="javascript:;">
										<span class="iconeSeta geralTransition"></span>
										<span class="dataHora">
											<span class="data">30/10</span>
											<span class="hora">16:00h</span>
										</span>
										<span class="listaInfos">
											<span class="listaNome">Antoniela Baptista</span>
											<span>Gato / Persa Teacup</span>
											<span class="listaTipo">Revisão</span>
										</span>
										<span class="iconeSeta2 geralTransition"></span>
									</a>
								</li>
								<li class="listaLi">
									<a class="listaLink geralTransition clearfix" href="javascript:;">
										<span class="iconeSeta geralTransition"></span>
										<span class="dataHora">
											<span class="data">12/11</span>
											<span class="hora">09:20h</span>
										</span>
										<span class="listaInfos">
											<span class="listaNome">Márcio Alcantara M...</span>
											<span>Gato / Persa Teacup</span>
											<span class="listaTipo">Consulta</span>
										</span>
										<span class="iconeSeta2 geralTransition"></span>
									</a>
								</li>
								<li class="listaLi">
									<a class="listaLink geralTransition clearfix" href="javascript:;">
										<span class="iconeSeta geralTransition"></span>
										<span class="dataHora">
											<span class="data">21/11</span>
											<span class="hora">10:15h</span>
										</span>
										<span class="listaInfos">
											<span class="listaNome">João Paulo de S...</span>
											<span>Gato / Persa Teacup</span>
											<span class="listaTipo">Revisão</span>
										</span>
										<span class="iconeSeta2 geralTransition"></span>
									</a>
								</li>
							</ul>
							<a class="btAgenda hoverBts ir" href="javascript:;" target="_blank">
								<span class="frontBt"></span>
								<span class="backBt"></span>
								Acessar a agenda completa
							</a>
						</div>
					</div>
				</section>
			</div>
		</section>

		<footer></footer>

		<!-- JS -->
		<script src="js/jquery-1.9.1.min.js"></script>
		<script src="js/funcoes.js"></script>
	</body>
</html>
 