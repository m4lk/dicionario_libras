<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link href="favicon.png" rel="icon" type="image/x-icon" />
	<title>LIBRAS - Dicion&aacute;rio da L&iacute;ngua Brasileira de Sinais</title>


	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" type="text/css" href="css/ui/start/jquery-ui-1.10.0.custom.min.css">
</head>
<body>
	<div id="site">
		<header>
			<hgroup>
				<h1>LIBRAS</h1>
				<h2>Dicion&aacute;rio da L&iacute;ngua Brasileira de Sinais</h2>
				<h3>Vers&atilde;o HTML5 - 2013</h3>

				<nav>
					<ul id="busca-alfabetica">
						<li><label>Busca Alfab&eacute;tica:&nbsp;</label></li>
						<li><a href="#" title="Reiniciar Busca Alfabética">#</a>&nbsp;-&nbsp;</li>
						<li><a href="a" title="Busca Alfabética: A">a</a>&nbsp;-&nbsp;</li>
						<li><a href="b" title="Busca Alfabética: B">b</a>&nbsp;-&nbsp;</li>
						<li><a href="c" title="Busca Alfabética: C">c</a>&nbsp;-&nbsp;</li>
						<li><a href="d" title="Busca Alfabética: D">d</a>&nbsp;-&nbsp;</li>
						<li><a href="e" title="Busca Alfabética: E">e</a>&nbsp;-&nbsp;</li>
						<li><a href="f" title="Busca Alfabética: F">f</a>&nbsp;-&nbsp;</li>
						<li><a href="g" title="Busca Alfabética: G">g</a>&nbsp;-&nbsp;</li>
						<li><a href="h" title="Busca Alfabética: H">h</a>&nbsp;-&nbsp;</li>
						<li><a href="i" title="Busca Alfabética: I">i</a>&nbsp;-&nbsp;</li>
						<li><a href="j" title="Busca Alfabética: J">j</a>&nbsp;-&nbsp;</li>
						<li><a href="k" title="Busca Alfabética: K">k</a>&nbsp;-&nbsp;</li>
						<li><a href="l" title="Busca Alfabética: L">l</a>&nbsp;-&nbsp;</li>
						<li><a href="m" title="Busca Alfabética: M">m</a>&nbsp;-&nbsp;</li>
						<li><a href="n" title="Busca Alfabética: N">n</a>&nbsp;-&nbsp;</li>
						<li><a href="o" title="Busca Alfabética: O">o</a>&nbsp;-&nbsp;</li>
						<li><a href="p" title="Busca Alfabética: P">p</a>&nbsp;-&nbsp;</li>
						<li><a href="q" title="Busca Alfabética: Q">q</a>&nbsp;-&nbsp;</li>
						<li><a href="r" title="Busca Alfabética: R">r</a>&nbsp;-&nbsp;</li>
						<li><a href="s" title="Busca Alfabética: S">s</a>&nbsp;-&nbsp;</li>
						<li><a href="t" title="Busca Alfabética: T">t</a>&nbsp;-&nbsp;</li>
						<li><a href="u" title="Busca Alfabética: U">u</a>&nbsp;-&nbsp;</li>
						<li><a href="v" title="Busca Alfabética: V">v</a>&nbsp;-&nbsp;</li>
						<li><a href="x" title="Busca Alfabética: X">x</a>&nbsp;-&nbsp;</li>
						<li><a href="y" title="Busca Alfabética: Y">y</a>&nbsp;-&nbsp;</li>
						<li><a href="w" title="Busca Alfabética: W">w</a>&nbsp;-&nbsp;</li>
						<li><a href="z" title="Busca Alfabética: Z">z</a></li>
					</ul>
				</nav>
			</hgroup>
		</header>
		<section id="content">
			<div id="busca">
				<form id="frm_busca">
					<div id="erro"></div>
					<label for="txt_busca">Busca&nbsp;</label>
					<input type="text" name="txt_busca" id="txt_busca" placeholder="Digite aqui" required />
					<button name="btn_buscar" id="btn_buscar">Buscar</button>
					<div id="busca-opcoes">
						<input type="radio" name="opcao-busca" id="opcao-busca-1" value="1" checked />
						<label for="opcao-busca-1">Palavra</label>
				
						<input type="radio" name="opcao-busca" id="opcao-busca-2" value="2" />
						<label for="opcao-busca-2">Acep&ccedil;&atilde;o</label>
				
						<input type="radio" name="opcao-busca" id="opcao-busca-3" value="3" />
						<label for="opcao-busca-3">Exemplo</label>
				
						<input type="radio" name="opcao-busca" id="opcao-busca-4" value="4" />
						<label for="opcao-busca-4">Assunto</label>
					</div>
				</form>
				<div class="col">
					<fieldset id="assuntos">
						<legend>Assuntos</legend>
						<ul class="menu">
							
						</ul>
					</fieldset>

					<fieldset id="palavras">
						<legend>Palavras</legend>
						<ul class="menu">
							
						</ul>
					</fieldset>
				</div>
				<div class="col">
					<fieldset id="acepcao">
						<legend>Acep&ccedil;&atilde;o</legend>
						<article>
							<p></p>
						</article>
					</fieldset>
					<fieldset id="exemplo">
						<legend>Exemplo</legend>
						<article>
							<p></p>
						</article>
					</fieldset>
					<fieldset id="exemplo-libras">
						<legend>Exemplo em Libras</legend>
						<article>
							<p></p>
						</article>
					</fieldset>
				</div>
				<div class="col">
					<fieldset id="video">
						<legend>V&iacute;deo</legend>
						<div class="video-wrapper">
							<div id="videoPlayer"></div>
						</div>
						<nav>
							<button class="play">Tocar</button>
							<input type="checkbox" class="loop" id="btn_loop" />
							<label for="btn_loop">Repetir</label>
						</nav>
					</fieldset>
					<article id="extra_info">
						<div class="mao">
							<label>Mão</label>
							<span></span>
						</div>
						<div class="classe_gramatical">
							<label>Classe Gramatical</label>
							<span></span>
						</div>
						<div class="origem">
							<label>Origem</label>
							<span></span>
						</div>
					</article>
				</div>
			</div>
		</section>
		<footer>
			<div class="acessibilidade">
				<a href="http://www.acessobrasil.org.br/" target="_blank" title="Acesso Brasil">
					<img src="images/acessibilidade.jpg" alt="Acesso Brasil" />
				</a>
			</div>
			<div class='versao'>
				<a href="http://www.acessobrasil.org.br/libras/" title="Versão antiga">Ir para a vers&atilde;o antiga</a>
			</div>
			<div class="autor">
				<strong>Autor: </strong>
				<span><a href="https://www.facebook.com/rodrigo.malk" title="Facebook" target="_blank">Rodrigo Malk</a></span>
			</div>
		</footer>
		<div id="preloader"><img src="images/preloader.gif" /></div>
	</div>

	<script type="text/javascript" src="scripts/jquery.min.js"></script>
	<script type="text/javascript" src="scripts/jquery-ui-1.10.0.custom.min.js"></script>
	<script type="text/javascript" src="scripts/jquery.tools.min.js"></script>
	<script type="text/javascript" src="scripts/general.js"></script>
</body>
</html>