<!DOCTYPE html>
<html class="no-js">
	<head>
		<meta charset="utf-8">
		<title>Ibasa APP</title>

		<link rel="stylesheet" href="css/template.css"/>
		<link rel="stylesheet" href="css/arquivo-proprietario.css"/>
	</head>
	<body>
		<header id="header"></header>
		
	
		<section id="sessaoBlocos" class="sessao">
			<div class="container clearfix">
				<? include 'includes/sidebar.php'; ?>
				<? include 'includes/header-guia.php'; ?>

				<section class="content clearfix">
					<div class="conteudoGeral">
						<header class="headerConteudo clearfix">
							<span class="paginaTitulo">Arquivo de Proprietários</span>
							<form action="javascript:;" method="post" name="formBuscaNome" id="formBuscaNome" class="form" lang="pt">
								<div class="relative">
									<span class="iconeBusca"></span>
									<label class="label" for="buscaNome">Buscar proprietário por nome</label>
									<input class="input" name="buscaNome" id="buscaNome"/>
								</div>
							</form>
						</header>

						<ul class="listaUl">
							<li class="listaLi listaLiTitulo clearfix">
								<span class="listaDados">Proprietários</span>
								<span>Pacientes</span>
							</li>

							<!-- LETRA A -->
							<li class="listaLi">
								<span class="letra">A</span>
								<a class="listaLink listaLinkDados geralTransition clearfix" href="javascript:;">
									<span class="listaIcone geralTransition"></span>
									<span class="listaDados">Alvelino Timóteo</span>
									<span>Dino, Rex, Pelé</span>
									<span class="listaIcone2 geralTransition"></span>
								</a>
								<a class="listaLink listaLinkDados geralTransition clearfix" href="javascript:;">
									<span class="listaIcone geralTransition"></span>
									<span class="listaDados">Analu Machado</span>
									<span>Totó, Thai, Princesa</span>
									<span class="listaIcone2 geralTransition"></span>
								</a>
								<a class="listaLink listaLinkDados geralTransition clearfix" href="javascript:;">
									<span class="listaIcone geralTransition"></span>
									<span class="listaDados">Anderson Costa</span>
									<span>Matutu</span>
									<span class="listaIcone2 geralTransition"></span>
								</a>
							</li>

							<!-- LETRA B -->
							<li class="listaLi">
								<span class="letra">B</span>
								<a class="listaLink listaLinkDados geralTransition clearfix" href="javascript:;">
									<span class="listaIcone geralTransition"></span>
									<span class="listaDados">Bárbara Costa</span>
									<span>Chiquinha</span>
									<span class="listaIcone2 geralTransition"></span>
								</a>
								<a class="listaLink listaLinkDados geralTransition clearfix" href="javascript:;">
									<span class="listaIcone geralTransition"></span>
									<span class="listaDados">Bárbara Schmitz</span>
									<span>Catita</span>
									<span class="listaIcone2 geralTransition"></span>
								</a>
							</li>

							<!-- LETRA C -->
							<li class="listaLi">
								<span class="letra">C</span>
								<a class="listaLink listaLinkDados geralTransition clearfix" href="javascript:;">
									<span class="listaIcone geralTransition"></span>
									<span class="listaDados">Cristiano de Souza...</span>
									<span>Lele</span>
									<span class="listaIcone2 geralTransition"></span>
								</a>
							</li>
						</ul>
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
 