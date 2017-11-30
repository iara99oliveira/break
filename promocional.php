<?php
	/* promocional.php */
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="description" content="Tenha seus estudos na palma da sua mão. Compartilhe conhecimento e se ligue com a galera.">
	<meta name="keywords" content="Break">
	<meta name="author" content="Iara; Vitória; Luiz e; Vinícius J">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/promo.css">
	<link rel="icon" href="https://lh3.googleusercontent.com/-iVcMZ5Oeclc/WXdX3bE0tWI/AAAAAAAAZFM/ZVPSzODFT8ArUjSyc_akglrvfZO57aS9gCL0BGAs/s530-p-rw/icon_break.png" size="32x32">
	<title>	Break | Uma rede social um pouco diferente</title>
</head>
<body>
	<div class="header-left">
		<img src="img/break-logo.png" alt="break-logo" id="header-logo">
		<h2 id="title-header">Break</h2>
	</div>
	<div class="main">
		<div id="tabs">
			<a href="login.php" id="tab" title="Entra aí">LOGIN<img id="icon" src="img/log-in.png" alt="Entre"></a>
			<a href="cadastra.php" id="tab" title="Cadastre-se"> CADASTRE-SE </a>
		</div>
		<div id="first_part">
			<div id="note"></div>
			<div id="first_cont">
				<h1 id="first">Todos os seus estudos </br><span style="font-weight: 800; font-size: 26pt; letter-spacing: -1px;">na palma da sua mão.</span></h1>
				<a href="cadastra.php" title="Come to the break side" id="force_unlished">Junte-se à galera. ></a>
			</div>
			<a id="first" title="Pular para 'o que é'" href="#section01"><span></span></a>
		</div>

		<div id="second_part">
			<section id="section01" class="demo">
				<img id="hominho" src="img/Hominho.png"
					 alt="garoto, 3 braços a direta e, nas mãos: indicador apontado para cima, balão de conversa e
						  livros empilhados. Mão esquerda com celular na mão.">
				<div id="second_cont">
					<h1 id="second">O que é   &nbsp;</br>
						<span style="font-weight: 800; font-size: 34pt;
												 letter-spacing: -1px; text-indent: 50px;">"BREAK"?</span>
					</h1>
					<p>Em palavras bonitas, uma plataforma interativa para prática dos estudos e
						da socialização no âmbito estudantil.</p>

					<p>Em palavras bonitas, uma plataforma interativa para prática dos estudos e
						da socialização no âmbito estudantil.</p>
				</div>
  			<a href="#section02" title="Pular para 'Justificativa'"><span></span></a>
			</section>
		</div>
		<div id="third_part">
			<section id="section02" class="demo">
  			<h1>Tudo bem? #4</h1>
  			<a href="#section01"><span></span></a>
			</section>

		</div>
		<div id="acessibility_part">
			<section id="section06" class="demo">
				<img id="keya" src="img/A Key.png"
					 alt="Tecla de teclado com letra 'A'">
					 <img id="keyc" src="img/C Key.png"
	 					 alt="Tecla de teclado com letra 'C'">
				<img id="keys" src="img/Acessibility Key.png"
					 alt="Tecla de teclado com símbolo da acessibilidade. Prova de que até
					 			um deficiente visual pode usar é vocês estarem ouvindo isso">
				<div id="acessibility_cont">
					<h1 title="Pois é, prova disso é vocês estarem ouvindo esse atributo title." id="acessibility">A palavra chave:</br>
						<span style="font-weight: 800; font-size: 34pt;
												 letter-spacing: -1px; text-indent: 50px;">A-ces-si-bi-li-da-de</span>
					</h1>
					<p>Acessível a todos. Não importa a deficiência. De daltônico e T D A H,
						à deficiente Visual ou Sonoro. </p>
				</div>
  			<a href="#section02" title="Pular para 'Justificativa'"><span></span></a>
			</section>
		</div>
		<script>
			$(function() {
			  $('a[href*=#]').on('click', function(e) {
			    e.preventDefault();
			    $('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top}, 500, 'linear');
			  });
			});
		</script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	</div>
</body>
</html>
