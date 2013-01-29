<?php
	header('Content-Type: application/xml; charset=ISO-8859-1');


	$url = 'http://www.acessobrasil.org.br/libras/consultaPersonalizada.php?';
	if(isset($_REQUEST['minhapalavra'])) {
		$minhapalavra = rawurldecode($_REQUEST['minhapalavra']);
		$url .= '&minhapalavra=' . $minhapalavra;
	}
	if(isset($_REQUEST['opcao'])) {
		$opcao = $_REQUEST['opcao'];
		$url .= '&opcao=' . $opcao;
	}

	if(isset($_REQUEST['palavra'])) {
		$palavra = rawurldecode($_REQUEST['palavra']);

		$url = $url = 'http://www.acessobrasil.org.br/libras/consultaDetalhesPalavra.php?';
		$url .= '&palavra=' . $palavra;
	}	

	if(isset($_REQUEST['assunto'])) {
		$assunto = rawurldecode($_REQUEST['assunto']);

		$url = $url = 'http://www.acessobrasil.org.br/libras/consultaPalavraEmAssunto.php?';
		$url .= '&assunto=' . $assunto;
	}	
	

	echo file_get_contents($url);
?>