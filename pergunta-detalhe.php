<?php
	/* index.php */
	require 'header.php';
	require 'dao-pergunta.php';
	require 'dao-resposta.php';

  $id = $_POST['id'];
  $pergunta = buscaPergunta($conexao, $id);
	$respostas = listaRespostaWherePergunta($conexao, $id);

?>
	<link rel="stylesheet" type="text/css" href="css/feed.css">

	<script type="text/javascript" src="js/feed.js"></script>
	<script type="text/javascript" async
		src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.2/MathJax.js?config=TeX-MML-AM_CHTML">
		MathJax.Hub.Config({
		extensions: ["tex2jax.js"],
		jax: ["input/TeX","output/HTML-CSS"],
		tex2jax: {inlineMath: [["$","$"],["\\(","\\)"]]}
	});
	</script>

	<title>Break | <?=$pergunta['disc_apelido']?> - <?=$pergunta['prg_titulo']?></title>

</head>
<body onload="loading();">
	<?php
		include 'essencials/top.php';
	?>
	<div class="main">
	<?php include 'tabs.php'; ?>
		<div id="grad">
			<div id="header_main">
				<div id="header_space2">
          <h2><span style="font-weight: 800;"><?= $pergunta['prg_titulo']?></span></h2>
						<p id="p_desc">
							<?=$pergunta['prg_descricao']?>
						</p>
            <p class="header_space2">Postado em: <time><?=$pergunta['prg_registro']?></time></p>
            <p class="header_space2"><i>by <?=$pergunta['nome_user']?></i></p>
				</div>
				<hr>
			</div>
		</div>
		<div class="back_main">
			<div id="content">
				<div id="text_content">
					<form id="postar" action="adiciona-resposta.php" method="post">
						<div class="post_area">
							<textarea onkeyup="ajustarTamanho(this)" placeholder="Sabe a resposta? Então conte pra gente ;)" name="resposta" required></textarea>
							<div id="post_btns">
								<input type="hidden" name="id" value="<?=$id?>"/>
								<button type="button" id="btn_opt" onclick="show_tools()">
										<img id="btn_opt_img" src="img/sum_icon.png" alt="+-*:" title="Usar símbolos Matemáticos">
								</button>
								<input type="submit" value="POSTAR" id="btn_posta"/>
							</div>
							<div id="tools">
								<a id="tool" title="Abrir Fórmula" href="#" onclick="math_func()"><img src="img/formula.png" alt=""/>Abrir fórmula</a>
							</div>
							<div id="view">

							</div>
						</div>
					</form>
					<?php
						if (isset($_SESSION['alert'])){
					?>
					<p class="<?=$_SESSION['alert_tipo']?>"><?=$_SESSION['alert'] ?></p>
					<?php
							unset($_SESSION['alert']);
							unset($_SESSION['alert_tipo']);
						}
					 ?>

						<?php	foreach ($respostas as $resposta) :	?>

								<h4><?=$resposta['rsp_descricao']?></h4>
								<p class="header_space2">Postado em: <time><?=$resposta['rsp_registro']?></time></p>
								<p class="header_space2"><i>by <?=$resposta['nome_user']?></i></p>

								<?php if($resposta['fk_usuario'] == $_SESSION['id_usuario']) {?>

						      <form  action="form-altera-resposta.php" method="post">
						          <input type="hidden" name="id" value="<?=$resposta['idresposta'] ?>" />
						          <button>Alterar</button>
						      </form>
						      <form  action="exclui-resposta.php" method="post">
						          <input type="hidden" name="id" value="<?=$resposta['idresposta'] ?>" />
						          <button>Remover</button>
						      </form>
						    <?php } ?>

						<?php endforeach?>

				</div>


			</div>
		</div>
	</div>
	<div class="back_rodape">
		<div id="rodape">
			<h3> Este é um rodapé </h3>
		</div>
	</div>
</body>
</html>
