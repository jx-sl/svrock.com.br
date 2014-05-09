<!doctype html>
<html lang='pt-br'>
<head>
    <?php include 'includes/head.php'; ?>
</head>
<body>

    <?php include 'includes/header.php'; ?>

    <!-- CONTEUDO ESPECIFICO DA PAGINA -->
  	<section id='content' style='height: 800px'>
      <div class="container">
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
      	<div class='main-content'>
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
            <form action="includes/validaDados.php" method="post" onsubmit="return validaDados()">
              <label>Nome Completo</label>
              <input type='text' maxlength="250" name='nome' required><br>
              <label>Email</label>
              <input type='email' name='email' maxlength="100" required><br>
              <label>Endereco(Rua, número)</label>
              <input type='text' maxlength="150" name='rua' required><br>
              <label>Bairro</label>
              <input type='text' name='bairro' maxlength="100" required><br>
              <label>Cep(somente números)</label>
              <input type='text' name='cep' maxlength="9" required><br>
              <label>Cidade</label>
              <input type='text' name='cidade' maxlength="100" required><br>
              <label>Data de Nascimento(DD/MM/AAAA)</label>
              <input type='text' name='nascimento' maxlength="8" required><br>
              <br>
              <label>Instrumento/Curso</label>
              <select name='instrumento' id='instrumento' required style="margin:2px 10px">
              	<option value='1' selected="selected">Baixo</option>
              	<option value='2'>Bateria</option>
              	<option value='3'>Guitarra</option>
              	<option value='4'>Vocal</option>
              	<option value='5'>Outro</option>
              </select>
              <label>Já toca ou canta?</label>
              <select name='jaToca' id='jaToca' required>
              	<option value='0' selected="selected">Não</option>
              	<option value='1'>Sim</option>
              </select><br>
              <label>Tem banda?</label>
              <select name='pergunta01' id='pergunta01' required style="margin:2px 10px">
              	<option value='0' selected="selected">Não</option>
              	<option value='1'>Sim</option>
              	<option value='1'>Mais ou menos</option>
              </select>
              <label>Já foi no SV ROCK?</label>
              <select name='pergunta02' id='pergunta02' required>
              	<option value='0' selected="selected">Não</option>
              	<option value='1'>Sim</option>
              </select><br>
              <input type="radio" name='pergunta03' id='pergunta03' required="required" style="width: 10%; float:left; margin-top:34px;">
              <label style="width: 90%; float:left; margin:20px 0">Estou ciente de que devo fazer um som no proximo SV ROCK<br>em contrapartida ao auxilio recebido caso for sorteado. </label><br><br>
              <input type="submit" value="Enviar">
            </form>
          </fieldset>
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