	      	<?php
	      		$nome = $email = $rua = $bairro = $cep = $cidade = $nascimento = $instrumento = $jaToca = $pergunta01 = $pergunta02 = $pergunta03 = "";
				$merda=false;
				if(isset($_POST['nome'])) addslashes($nome = $_POST['nome']); else $merda=true;
				if(isset($_POST['email'])) addslashes($email = $_POST['email']); else $merda=true;
				if(isset($_POST['rua'])) addslashes($rua = $_POST['rua']); else $merda=true;
				if(isset($_POST['bairro']))	addslashes($bairro = $_POST['bairro']); else $merda=true;
				if(isset($_POST['cep'])) addslashes($cep = $_POST['cep']); else $merda=true;
				if(isset($_POST['cidade']))	addslashes($cidade = $_POST['cidade']); else $merda=true;
				if(isset($_POST['nascimento']))	addslashes($nascimento = $_POST['nascimento']); else $merda=true;
				if(isset($_POST['instrumento']))	addslashes($instrumento = $_POST['instrumento']); else $merda=true;
				if(isset($_POST['jaToca']))	$jaToca = addslashes($_POST['jaToca']); else $merda=true;
				if(isset($_POST['pergunta01']))	$pergunta01 = addslashes($_POST['pergunta01']); else $merda=true;
				if(isset($_POST['pergunta02']))	$pergunta02 = addslashes($_POST['pergunta02']); else $merda=true;
				if(isset($_POST['pergunta03']))	$pergunta03 = addslashes($_POST['pergunta03']); else $merda=true;
				
				if($merda){
					header("Location:../especial_setimo/cadastro.php?merda=ok");
				}else{
					$query = "INSERT INTO usuario(
						nome,rua,bairro,cep,cidade,login,senha,nascimento,instrumento,pergunta01,pergunta02,pergunta03,telefone,email,jaToca)
					VALUES(
						'$nome',	'$rua',	'$bairro',	'$cep',	'$cidade',	'login',	'$senha',	'$nascimento',	'$instrumento',	'$pergunta01',	'$pergunta02',	'$pergunta03',	'$telefone',	'$email',	'$jaToca')";
		
					$mysql_link = mysql_connect("localhost","root","juliao123") or die(mysql_error());
					mysql_select_db("svrock_cadastro") or die(mysql_error());
					$result=mysql_query($query);
					if ($result)
						header("Location:../especial_setimo/cadastro_resultado.php?merdaSqn=ok");
					else
						header("Location:../especial_setimo/cadastro_resultado.php");
				}
	      	?>  