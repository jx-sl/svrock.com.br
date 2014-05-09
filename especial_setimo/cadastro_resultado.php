<!doctype html>
<html lang='pt-br'>
<head>
    <?php include '../includes/headSetimo.php'; ?>
</head>
<body id='bandas'>

    <?php include '../includes/headerSetimo.php'; ?>

    <!-- CONTEUDO ESPECIFICO DA PAGINA -->
  	<section class='container'>
		<div class='col-md-4'>
			<h1>
				<img src='../img/logo_svrock.png'>
			</h1>
		</div>
		<div class='col-md-6'>
          <h2>Cadastro</h2>
	      	<?php
	      		$ret = "Deu um erro ai tchê!<br>Tenta de novo e se der merda manda um e-mail para <a href='mailto:saovendelinorock@gmail.com'>saovendelinorock@gmail.com</a> avisando que a gente dá um jeito.";
	      		if( isset( $_GET['merdaSqn'] ) ){
					if($_GET['merdaSqn']=='ok')
						$ret = "Cadastro Realizado com Sucesso!";						
				}
				print "<p>".$ret."</p>";
				
	      	?>
		</div>
		<div class='col-md-2'></div>
  	</section>
    <!-- FIM CONTEUDO ESPECIFICO DA PAGINA -->
    
    <?php include '../includes/footerSetimo.php'; ?>

</body>
</html>
