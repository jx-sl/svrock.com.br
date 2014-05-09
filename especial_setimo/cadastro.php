<!doctype html>
<html lang='pt-br'>
<head>
    <?php include '../includes/headSetimo.php'; ?>
    <script>
      	function validaDados(){
          	var msg="";
          	if($(":input").is(':empty')) msg += "Existem campos vazios<br>";

          	if(msg==""){
          		$("#erro").empty().removeAttr("style");
              	return true;
          	}else{
				$("#erro").empty().append(msg).css({"background":"red", "border-radius":"5px", "padding":"5px 10px"}).fadeout(12000);
              	return false;
          	}
      	}
      </script>
</head>
<body id='cadastro'>

    <?php include '../includes/headerSetimo.php'; ?>

    <!-- CONTEUDO ESPECIFICO DA PAGINA -->
  	<section class='container'>
		<div class='col-md-4'>
			<h1>
				<img src='../img/logo_svrock.png'>
			</h1>
		</div>
		<div class='col-md-8'>
      	
          <h2>Cadastro</h2>
          <p>Este cadastro é necessario par participar do sorteio dos cursos de musica do 7º SV ROCK.<br>
          Antes de se cadastrar, leia o <a href='regulamento.php'>regulamento</a> e esteja ciente.
          <small>Preencha todos os campos!</small></p>
          
          <div id="erro">
	      	<?php
	      			$ret = "";
					if(isset($_GET['merda'])){
						if($_GET['merda']=="ok")
							$ret = "Preenche direito isso ai se não vai sempre dar merda.<br>E se der merda mesmo preenchendo tudo direito, manda um e-mail para <a href='mailto:saovendelinorock@gmail.com'>saovendelinorock@gmail.com</a> avisando que a gente dá um jeito.";
							print "<script>$(function(){ $('#erro').css({'background':'red', 'border-radius':'5px', 'padding':'5px 10px'}).fadeout(12000); });</script>";
					}
					print "<p>".$ret."</p>";
	      	?>
          </div>
          <fieldset>
            <form action="../includes/validaDados.php" method="post" onsubmit="return validaDados()">
              <label>Nome Completo</label><br>
              <input type='text' maxlength="250" name='nome' required><br>
              <label>Email</label><br>
              <input type='email' name='email' maxlength="100" required><br>
              <label>Endereco(Rua, número)</label><br>
              <input type='text' maxlength="150" name='rua' required><br>
              <label>Bairro</label><br>
              <input type='text' name='bairro' maxlength="100" required><br>
              <label>Cep(somente números)</label><br>
              <input type='text' name='cep' maxlength="9" required><br>
              <label>Cidade</label><br>
              <input type='text' name='cidade' maxlength="100" required><br>
              <label>Data de Nascimento(DD/MM/AAAA)</label><br>
              <input type='text' name='nascimento' maxlength="8" required><br>
              <br>
              <label>Instrumento/Curso</label><br>
              <select name='instrumento' id='instrumento' required style="margin:2px 0">
              	<option value='1' selected="selected">Baixo</option>
              	<option value='2'>Bateria</option>
              	<option value='3'>Guitarra</option>
              	<option value='4'>Vocal</option>
              	<option value='5'>Outro</option>
              </select><br>
              <label>Já toca ou canta?</label><br>
              <select name='jaToca' id='jaToca' required>
              	<option value='0' selected="selected">Não</option>
              	<option value='1'>Sim</option>
              </select><br>
              <label>Tem banda?</label><br>
              <select name='pergunta01' id='pergunta01' required style="margin:2px 0">
              	<option value='0' selected="selected">Não</option>
              	<option value='1'>Sim</option>
              	<option value='1'>Mais ou menos</option>
              </select><br>
              <label>Já foi no SV ROCK?</label><br>
              <select name='pergunta02' id='pergunta02' required>
              	<option value='0' selected="selected">Não</option>
              	<option value='1'>Sim</option>
              </select><br>
              <input type="radio" name='pergunta03' id='pergunta03' required="required" style="width: 30px; float:left; margin-top:34px;">
              <label style="width: 350px; float:left; margin:20px 0">Estou ciente de que devo fazer um som no proximo SV ROCK em contrapartida ao auxilio recebido caso for sorteado. </label><br><br><br>
              <input type="submit" value="Enviar">
            </form>
          </fieldset>
        </div>
  	</section>
    <!-- FIM CONTEUDO ESPECIFICO DA PAGINA -->
    
    <?php include '../includes/footerSetimo.php'; ?>

</body>
</html>
