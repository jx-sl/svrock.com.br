<!doctype html>
<html lang='pt-br'>
<head>
    <?php include 'includes/head.php'; ?>
</head>
<body>

    <?php include 'includes/header.php'; ?>
	<center class='container' style="background: darkred">
		<h3 style="color:orange">Saca todas informações sobre o 7º SV ROCK acessando o site especial para o evento<br>
		<button style="border-radius:4px;color:#333" onclick="window.location.href='especial_setimo';">CLICA AQUI PARA ACESSAR</button></h3>
	</center>
    <!-- CONTEUDO ESPECIFICO DA PAGINA -->
  	<section id='banner'>
  		<figure id='banner01' class='active'>
  			<img src='img/banner/banner01.jpg' alt='Sorteio de Guitarra no 7º SV ROCK!'>
  		</figure>
  		<figure id='banner02'>
  			<img src='img/banner/banner02.jpg' alt='OS VESPAS no 7º SV ROCK!'>
  		</figure>
  		<figure id='banner03'>
  			<img src='img/banner/banner03.jpg' alt='Sorteio de Aulas 7º SV ROCK!'>
  		</figure>
  		<ul>
  			<li>
  				<a href="javascript:void(0)" class='active' name="banner01" onclick="trocaBanner(this.name)">1</a>
  			</li>
  			<li>
  				<a href="javascript:void(0)" name="banner02" onclick="trocaBanner(this.name)">2</a>
  			</li>
  			<li>
  				<a href="javascript:void(0)" name="banner03" onclick="trocaBanner(this.name)">3</a>
  			</li>
  		</ul>
  	</section>
    <!-- FIM CONTEUDO ESPECIFICO DA PAGINA -->

    <?php include 'includes/footer.php'; ?>

</body>
</html>
