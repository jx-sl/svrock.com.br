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
          <h2>Lista de Cadastrados</h2>
          <?php
          /*
			$query = "SELECT * FROM usuario";
			$mysql_link = mysql_connect("localhost","root","juliao123") or die(mysql_error());
			mysql_select_db("svrock_cadastro") or die(mysql_error());
			$result=mysql_query($query);
			*/
		?>
		<ul>
			<li>Nome //  Cidade // E-mail // Instrumento // Ja toca?</li>
		<?php
			function getInstrumento($id){
				switch ($id){
					case 1 : return "Baixo"; break;
					case 2 : return "Bateria"; break;
					case 3 : return "Guitarra"; break;
					case 4 : return "Vocal"; break;
					case 5 : return "Outro"; break;
				}
			}
			function getBoolean($id){
				if($id==0) return "Não";
				if($id==1) return "Sim";
			}
			$con=mysqli_connect("localhost","root","juliao123","svrock_cadastro");
			// Check connection
			if (mysqli_connect_errno())
			  {
			  echo "Erro ao conectar ao banco de dados: " . mysqli_connect_error();
			  }
			
			$result = mysqli_query($con,"SELECT * FROM usuario");
			$empty = true;
			while($row = mysqli_fetch_array($result)){
			  echo "<li>".$row['nome']."  |  ".$row['cidade']."  |  ".$row['email']."  |  ".getInstrumento($row['instrumento'])."  |  ".getBoolean($row['jaToca'])."</li>";
			  $empty = false;
			  /*
			  

			  '$nome',
			  '$rua',
			  '$bairro',
			  '$cep',
			  '$cidade',
			  '$login',
			  '$senha',
			  '$nascimento',
			  '$instrumento',
			  '$pergunta01',
			  '$pergunta02',
			  '$pergunta03',
			  '$telefone',
			  '$email',
			  '$jaToca'
			  */
			  
			  
			}
			
			mysqli_close($con);
			if($empty) echo "<li>Nenhum cabeça cadastrado ainda!</li>";
		?>
		</ul>
        </div>
		<div class='col-md-2'></div>
  	</section>
    <!-- FIM CONTEUDO ESPECIFICO DA PAGINA -->
    
    <?php include '../includes/footerSetimo.php'; ?>

</body>
</html>
