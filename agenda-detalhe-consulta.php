<!DOCTYPE html>
<html class="no-js">
	<head>
		<meta charset="utf-8">
		<title>Ibasa APP</title>

		<link rel="stylesheet" href="css/template.css"/>
		<link rel="stylesheet" href="css/agenda-detalhe-consulta.css"/>
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
							<span class="paginaTitulo">Detalhe da Consulta / Revisão</span>
						</header>

						<div class="conteudoListas clearfix">
							<div class="conteudoConsulta">
								<ul class="agendaUl">
									<li class="agendaLi agendaLiDataHora clearfix">
										<span class="agendaTitulo">Data e Hora</span>

										<div class="blocoAgenda">
											<span class="diaSemana">Quarta-feira</span>
											<span>14 de novembro 2012</span>
										</div>
										<div class="blocoAgenda blocoAgendaHora">
											<span>09:30h</span>
										</div>
									</li>
									<li class="agendaLi clearfix">
										<span class="agendaTitulo">Proprietário</span>
										<div class="agendaInfo clearfix">
											<img class="agendaImg" src="img/gerais/agenda_proprietario.jpg" alt=""/>
											<ul class="agendaInfosUl">
												<li class="agendaInfosLi agendaInfosLiNome">Giuliano Varriale</li>
												<li class="agendaInfosLi">giuliano@sprdigital.com.br</li>
												<li class="agendaInfosLi">Cel.: (51) 9266.4589</li>
												<li class="agendaInfosLi">Tel.: (51) 3564.4589</li>
											</ul>
										</div>
									</li>
									<li class="agendaLi clearfix">
										<span class="agendaTitulo">Paciente</span>
										<div class="agendaInfo clearfix">
											<img class="agendaImg" src="img/gerais/agenda_paciente.jpg" alt=""/>
											<ul class="agendaInfosUl">
												<li class="agendaInfosLi agendaInfosLiNome">Katyta</li>
												<li class="agendaInfosLi">Fêmea</li>
												<li class="agendaInfosLi">Canino / Yorkshire</li>
												<li class="agendaInfosLi">Idade: 1 ano</li>
											</ul>
										</div>
									</li>
								</ul>
								<a class="btAgendaVoltar geralTransition" href="javascript:;">
									<span class="iconeVotar geralTransition"></span>
									Voltar para agenda
								</a>
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
 