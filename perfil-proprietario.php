<!DOCTYPE html>
<html class="no-js">
	<head>
		<meta charset="utf-8">
		<title>Ibasa APP</title>

		<link rel="stylesheet" href="css/template.css"/>
		<link rel="stylesheet" href="css/perfil-proprietario.css"/>
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
							<span class="paginaTitulo">Perfil de Proprietários</span>
						</header>

						<div class="conteudoListas clearfix">
							<aside class="sidebarPerfil">
								<span class="sidebarTitulo">Proprietário</span>
								<img class="sidebarImg" src="img/gerais/proprietario.jpg" alt="" />
								<ul class="sidebarInfosUl">
									<li class="sidebarInfosLi sidebarInfosLiNome">Getúlio Flores Heitling</li>
									<li class="sidebarInfosLi">CPF:  888.456.445-99</li>
									<li class="sidebarInfosLi">getulio@gmail.com</li>
									<li class="sidebarInfosLi">Celular:  (51) 3561.5626</li>
									<li class="sidebarInfosLi">Rua Arnaldo Torres, 321</li>
									<li class="sidebarInfosLi">CEP: 93231-120</li>
									<li class="sidebarInfosLi">São Leopoldo / RS</li>
								</ul>
							</aside>
							<div class="conteudoListaDados">
								<span class="tituloLista">Pacientes</span>
								<form action="javascript:;" method="post" name="formBuscaNome" id="formBuscaNome" class="form" lang="pt">
									<div class="relative">
										<span class="iconeBusca"></span>
										<label class="label" for="buscaNome">Buscar proprietário por nome</label>
										<input class="input" name="buscaNome" id="buscaNome"/>
									</div>
								</form>
								<ul class="listaDadosUl">
									<li class="listaDadosLi listaDadosLiTitulo clearfix">
										<span class="listaDados1"><span class="listaDadosNomeTitulo">Nome</span></span>
										<span class="listaDados2">Espécie/Raça</span>
										<span class="listaDados3">Última Consulta</span>
									</li>

									<!-- LETRA A -->
									<li class="listaDadosLi">
										<span class="ListaLetra">A</span>
										<a class="listaDadosLink geralTransition clearfix" href="javascript:;">
											<span class="listaDadosIcone geralTransition"></span>

											<span class="listaDados1">
												<img class="listaDadosImg" src="img/gerais/bixo1.jpg" alt="">
												<span>Alberto</span>
											</span>

											<span class="listaDados2">Canino  /  Golden Retriever</span>
											<span class="listaDados3">12/10/12</span>
											<span class="listaDadosIcone2 geralTransition"></span>
										</a>
										<a class="listaDadosLink geralTransition clearfix" href="javascript:;">
											<span class="listaDadosIcone geralTransition"></span>

											<span class="listaDados1">
												<img class="listaDadosImg" src="img/gerais/bixo2.jpg" alt="">
												<span>Ananias</span>
											</span>

											<span class="listaDados2">Felino</span>
											<span class="listaDados3">28/11/12</span>
											<span class="listaDadosIcone2 geralTransition"></span>
										</a>
									</li>

									<!-- LETRA B -->
									<li class="listaDadosLi">
										<span class="ListaLetra">B</span>
										<a class="listaDadosLink geralTransition clearfix" href="javascript:;">
											<span class="listaDadosIcone geralTransition"></span>

											<span class="listaDados1">
												<img class="listaDadosImg" src="img/gerais/bixo3.jpg" alt="">
												<span>Bruno</span>
											</span>

											<span class="listaDados2">Canino  /  Golden Retriever</span>
											<span class="listaDados3">23/11/12</span>
											<span class="listaDadosIcone2 geralTransition"></span>
										</a>
									</li>
								</ul>
							</div>
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
 