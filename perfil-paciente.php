<!DOCTYPE html>
<html class="no-js">
	<head>
		<meta charset="utf-8">
		<title>Ibasa APP</title>

		<link rel="stylesheet" href="css/template.css"/>
		<link rel="stylesheet" href="css/perfil-paciente.css"/>
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
							<span class="paginaTitulo">Ficha do Paciente</span>
						</header>

						<div class="conteudoListas clearfix">
							<aside class="sidebarPerfil">
								<span class="sidebarTitulo">Paciente</span>
								<img class="sidebarImg" src="img/gerais/paciente.jpg" alt="" />
								<ul class="sidebarInfosUl">
									<li class="sidebarInfosLi sidebarInfosLiNome">Katyta</li>
									<li class="sidebarInfosLi">Fêmea</li>
									<li class="sidebarInfosLi">Canino / Yorkshire</li>
									<li class="sidebarInfosLi">Idade: 1 ano</li>
								</ul>

								<ul class="sidebarInfosUl proprietarioUl">
									<li class="sidebarInfosLi sidebarInfosLiTitulo">Proprietário</li>
									<li class="sidebarInfosLi sidebarInfosLiNome">Giuliano Varriale</li>
									<li class="sidebarInfosLi">giuliano@sprdigital.com.br</li>
									<li>
										<a class="btPerfil geralTransition" href="javascript:;">Perfil do Proprietário</a>
									</li>
								</ul>
							</aside>
							<div class="conteudoListaDados">
								<span class="tituloLista">Últimas Consultas</span>
								<ul class="listaDadosUl">
									<li class="listaDadosLi listaDadosLiTitulo clearfix">
										<span class="listaDados1"><span class="listaDadosNomeTitulo">Data</span></span>
										<span class="listaDados2">Diagnóstico</span>
										<span class="listaDados3">Revisões</span>
									</li>

									<li class="listaDadosLi">
										<a class="listaDadosLink geralTransition clearfix" href="javascript:;">
											<span class="listaDadosIcone geralTransition"></span>

											<span class="listaDados1">
												<span>12/10/12</span>
											</span>

											<span class="listaDados2">
												There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
											</span>
											<span class="listaDados3"><span>2</span></span>
											<span class="listaDadosIcone2 geralTransition"></span>
										</a>
									</li>
									<li class="listaDadosLi">
										<a class="listaDadosLink geralTransition clearfix" href="javascript:;">
											<span class="listaDadosIcone geralTransition"></span>

											<span class="listaDados1">
												<span>23/11/12</span>
											</span>

											<span class="listaDados2">
												There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage
											</span>
											<span class="listaDados3"><span>1</span></span>
											<span class="listaDadosIcone2 geralTransition"></span>
										</a>
									</li>
									<li class="listaDadosLi">
										<a class="listaDadosLink geralTransition clearfix" href="javascript:;">
											<span class="listaDadosIcone geralTransition"></span>

											<span class="listaDados1">
												<span>23/12/12</span>
											</span>

											<span class="listaDados2">
												There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage 
												There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage 
												There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage 
											</span>
											<span class="listaDados3"><span>10</span></span>
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
		<script src="js/perfil-paciente.js"></script>
	</body>
</html>
 