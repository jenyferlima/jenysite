<?php
	$para		= "jenyferslima@gmail.com";
	$assunto	= $_REQUEST['sobre'];
	$nome		= $_REQUEST['nome'];
	$email		= $_REQUEST['email'];
	$mensagem	= $_REQUEST['mensagem'];
				
		$corpo .= "<img src='http://jenylima.com/img/contato_jeny.png' style='height:auto !important; max-width:600px !important;'><br>";
		$corpo .= "<strong>$assunto</strong><br>";
		$corpo .= "$nome | $email<br>";
		$corpo .= "<strong>Assunto:</strong> $assunto<br>";
		$corpo .= "$mensagem";
		
		$header = "Content-Type: text/html; charset = utf-8\n";
		$header.= "From: $email\n";
		
	@mail($para, $assunto, $corpo, $header);

header("location:https://jenylima.com/enviado");
?>