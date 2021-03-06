<?php
  require 'dao-pergunta.php';
  require 'dao-conteudo-feed.php';

  $materias = listaMateriasDoPost($conexao);
  $perguntas = listaPergunta($conexao);
?>

<link rel="stylesheet" type="text/css" href="css/filtro-conteudo.css">

<script type="text/javascript" src="js/filtro-conteudo.js"></script>
<div id="text_content">

  <?php
    foreach ($perguntas as $pergunta) :
  ?>
  <div id="topic" class="filterDiv <?=$pergunta['disc_apelido']?> show">
    <div id="balaozin">
      <div id="tag_disc" title="Disciplina: <?=$pergunta['disc_nome']?>" style="background-color: <?=$pergunta['disc_back_color']?>;">
        <p id="text_tag" style="color:  <?=$pergunta['disc_textcolor']?>;">
          <?=$pergunta['disc_apelido']?>
        </p>
      </div>
      <h2><span style="font-weight: 800;"><?= $pergunta['prg_titulo']?></h2>
      <p id="p_desc"><?=substr($pergunta['prg_descricao'], 0, 70)?></p>

      <form action="pergunta-detalhe.php" method="post">
          <input type="hidden" name="id" value="<?=$pergunta['idpergunta'] ?>" />
          <input type="submit" name="ver_mais" id="ver_mais" value="Ver Mais...">
      </form>


    </div ::after>

    <div id="baixo_balaozin">
        <p class="header_space2">
            Postado em: <time><?=$pergunta['prg_registro']?></time>
        </p>
        <p class="header_space2">
          <i>by <?=$pergunta['nome_user']?></i>
        </p>

        <?php
          if($pergunta['fk_usuario'] != $_SESSION['id_usuario']) {
        ?>
          <form action="pergunta-detalhe.php" method="post">
              <input type="hidden" name="id" value="<?=$pergunta['idpergunta'] ?>" />
              <div id="reply">
                <button id="btn_opt" title="Responder pergunta">
                    <img id="btn_opt_img" src="img/reply.png" alt=""/>
                </button>
              </div>
          </form>

        <?php
          }else{
        ?>
          <div id="opt">
            <form action="form-altera-pergunta.php" method="post">
                <input type="hidden" name="id" value="<?=$pergunta['idpergunta'] ?>"/>
                <div id="reply">
                  <button id="btn_opt" title="Editar pergunta">
                      <img id="btn_opt_img" src="img/edit.png" alt=""/>
                  </button>
                </div>
            </form>
            <form  action="exclui-pergunta.php" method="post" class="opt">
                <input type="hidden" name="id" value="<?=$pergunta['idpergunta'] ?>" />
                <div id="reply2">
                  <button id="btn_opt_erase" title="Apagar pergunta">
                      <img id="btn_opt_img" src="img/eraser.png" alt=""/>
                  </button>
                </div>
            </form>
          </div>

      <?php
          }
      ?>

    </div>
  </div>
    <?php
      endforeach
     ?>
