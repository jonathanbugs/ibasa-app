<!DOCTYPE html>
<html class="no-js">
	<head>
		<meta charset="utf-8">
		<title>Ibasa APP</title>

		<link rel="stylesheet" href="css/template.css"/>
		<link rel="stylesheet" href="css/guia-terapeutico-detalhe.css"/>
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

						<div class="conteudoListas clearfix">
							<aside class="sidebarMedicamento">
								<span class="sidebarMedicamentoTitulo">Nutrifer</span>
								<img class="sidebarMedicamentoImg" src="img/gerais/medicamento.jpg" alt="" />

								<div class="formula">
									<span class="formulaTitulo">Fórmula</span>
									<span class="contem">Cada 100 mL contém:</span>
									<p class="formulaDescricao">
										Abamectina ................ 1 g <br/>
										Veículo q.s.p. .............. 100 mL
									</p>
								</div>

								<a class="btVoltar geralTransition" href="javascript:;">
									<span>Voltar para a Lista</span>
								</a>
							</aside>
							<div class="conteudoMedicamentos">
								<div class="blocoGuia">
									<span class="blocoTitulo">Indicações</span>
									<p class="blocoDescricao">
										É indicado na prevenção e tratamento da anemia ferropriva causada por distúrbios nutricionais, doenças infecciosas ou parasitarias e homorragias em: Bovinos, Suinos, Ovinos, Caprinos e Cães.
									</p>
								</div>

								<div class="blocoGuia">
									<span class="blocoTitulo">Composição</span>
									<p class="blocoDescricao">
										Cada 100 mL do produto contém: Ferro elementar ( sob a forma de hidróxido férrico em complexo dextrano) - 20g Veículo q.s.p. - 100mL
									</p>
								</div>

								<div class="blocoGuia">
									<span class="blocoTitulo">Precauções</span>
									<p class="blocoDescricao">
										O produto deve ser administrado pela via intramuscular profunda.
										As doses superiores a 4mL devem ser divididas, sendo aplicadas em diferentes locais.
										As doses indicadas não requerem repetição, salvo nos casos específicos do quadro ou quando assim determina o médico veterinário.
									</p>
								</div>

								<div class="blocoGuia">
									<span class="blocoTitulo">Contra Indicações</span>
									<p class="blocoDescricao">
										O produto não deve ser administrado a felinos
									</p>
								</div>

								<div class="blocoGuia">
									<span class="blocoTitulo">Efeitos Colaterais</span>
									<p class="blocoDescricao">
										Em leitões normais os compostos de ferro-dextrano são seguros e geralmente atóxicos
									</p>
								</div>

								<div class="blocoGuia">
									<span class="blocoTitulo">Posologia</span>
									<p class="blocoDescricao">
										As doses indicadas encontram-se na tabela abaixo de acordo com a espécie animal e devem ser administradas somente via intramuscular profunda:
									</p>

									<table class="tabelaInformacoes">
										<thead>
											<tr>
												<th class="bgTitulo bgTitulo1">Espécie</th>
												<th class="bgTitulo bgTitulo2">Profilaxia</th>
												<th class="bgTitulo bgTitulo3">Terapêutica específica com</th>
												<th class="bgTitulo bgTitulo4">tratamento coadjuvante</th>
											</tr>
										</thead>
										<tbody>
											<tr class="tr tr1">
												<td>Suínos</td>
												<td>0,8 a 1ml de preferencia ao 3º dia após o nascimento</td>
												<td>0,5 a 1ml</td>
												<td>0,5 a 1ml</td>
											</tr>
											<tr class="tr tr2">
												<td>Bezerros</td>
												<td>2 a 4ml na semana do nascimento</td>
												<td>2 - 4 - 6ml</td>
												<td>2 a 4ml</td>
											</tr>
											<tr class="tr tr1">
												<td>Bovinos</td>
												<td>-</td>
												<td>-</td>
												<td>2 a 4ml</td>
											</tr>
										</tbody>
									</table>
								</div>

								<div class="blocoGuia">
									<div class="guiaInfos">
										<ul class="guiaInfosUl">
											<li class="guiaInfosLi guiaInfosLiTitulo">
												Registro no Ministério da Agricultura, Pecuária e Abastecimento:
											</li>
											<li class="guiaInfosLi">6387/98</li>

											<li class="guiaInfosLi guiaInfosLiMargem guiaInfosLiTitulo">
												Responsável técnico:
											</li>
											<li class="guiaInfosLi">Dr. Ruben Dario Sosa - CRMV:RS 5911</li>

											<li class="guiaInfosLi guiaInfosLiMargem guiaInfosLiTitulo">
												serviço de atendimento ao consumidor
											</li>
											<li class="guiaInfosLi guiaInfosLiFone">0800.342495</li>

											<li class="guiaInfosLi guiaInfosLiMargem">
												Declaramos para os devidos fins que todas as informações prestadas aqui são deinteira e exclusiva responsabilidade do proprietário do produto.
											</li>
										</ul>
									</div>
								</div>
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
 