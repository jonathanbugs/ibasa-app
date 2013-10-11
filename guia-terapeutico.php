<!DOCTYPE html>
<html class="no-js">
	<head>
		<meta charset="utf-8">
		<title>Ibasa APP</title>

		<link rel="stylesheet" href="css/template.css"/>
		<link rel="stylesheet" href="css/chosen.css"/>
		<link rel="stylesheet" href="css/guia-terapeutico.css"/>
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
							<span class="paginaTitulo">Guia Terapêutico</span>
						</header>
						<header class="headerFiltros clearfix">
							<form action="javascript:;" method="post" name="formBuscaNome" id="formBuscaNome" class="form" lang="pt">
								<div class="relative">
									<span class="iconeBusca"></span>
									<label class="label" for="buscaNome">Digite o que você está procurando</label>
									<input class="input" name="buscaNome" id="buscaNome"/>
								</div>
							</form>

							<div class="listaMedicamentos">
								<select data-placeholder="Listando medicamentos de todos os laboratórios" name="selMedicamentos" id="selMedicamentos">
									<option value=""></option>
									<option value="">Medicamento 1</option>
									<option value="">Medicamento 2</option>
									<option value="">Medicamento 3</option>
								</select>
							</div>
						</header>

						<ul class="listaUl">
							<li class="listaLi listaLiTitulo clearfix">
								<span class="listaDados">Medicamento</span>
								<span>Laboratório</span>
							</li>

							<!-- LETRA A -->
							<li class="listaLi">
								<span class="letra">A</span>
								<a class="listaLinkDados geralTransition clearfix" href="javascript:;">
									<span class="listaIcone geralTransition"></span>
									<span class="listaDados">Abamic</span>
									<span>laboratório IBASA Ltda.</span>
									<span class="listaIcone2 geralTransition"></span>
								</a>
							</li>

							<!-- LETRA B -->
							<li class="listaLi">
								<span class="letra">B</span>
								<a class="listaLinkDados geralTransition clearfix" href="javascript:;">
									<span class="listaIcone geralTransition"></span>
									<span class="listaDados">Bolisterol</span>
									<span>laboratório IBASA Ltda.</span>
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
		<script src="js/plugins.js"></script>
		<script src="js/funcoes.js"></script>
		<script src="js/guia-terapeutico.js"></script>
	</body>
</html>
 