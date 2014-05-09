<!doctype html>
<html lang='pt-br'>
<head>
    <?php include 'includes/head.php'; ?>
</head>
<body>

    <?php include 'includes/header.php'; ?>

    <!-- CONTEUDO ESPECIFICO DA PAGINA -->
  	<section id='content' style='min-height: 480px'>
      <div class="container">
      	<div class='main-content'>
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
        <div class='sidebar-content'>
          <div style="background-color:#FFFFFF" class="fb-like-box" data-href="https://www.facebook.com/saovendelinorock" data-width="292" data-height="300" data-show-faces="true" data-header="true" data-stream="true" data-show-border="true"></div>
        </div>
      </div>
  	</section>
    <!-- FIM CONTEUDO ESPECIFICO DA PAGINA -->

    <?php include 'includes/footer.php'; ?>

</body>
</html>