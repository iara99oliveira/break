
  <?php
$disabled = "disabled";
   ?>
  <div id="campo">
    <label for="nome_user">Nome</label>
    <input type="text" name="nome_user" value="<?=$_SESSION['nm_usuario']?>" <?=$disabled?> />
  </div>
  <div id="campo">
    <label for="sobrenome_user">Sobrenome</label>
    <input type="text" id="sobrenome_user" name="sobrenome_user" value="<?=$_SESSION['sbm_usuario']?>" <?=$disabled?> />
  </div>
  <br/>

  <label for="email_user">E-mail</label>
  <input type="email" id="email_user" name="email_user" value="<?=$_SESSION['email']?>"<?=$disabled?>/>
  <br/>

  <div id="radio-genero" <?=$disabled?>>
    <?php
    $checkedM = "";
    $checkedF = "";
     ?>
    <label for="sexo_user">Gênero</label>
     <?php
     if ($_SESSION['sexo'] == "M"){
       $checkedM = "checked";
    }else{
      $checkedF = "checked";
    }?>
    <input type="radio" id="sexo_user" name="sexo_user" value="M" <?=$checkedM?> > Masculino
    <input type="radio" id="sexo_user" name="sexo_user" value="F" <?=$checkedF?>> Feminino
  </div>
  <br/>

  <label for="dataNasc_user">Data de Nascimento</label>
  <input type="date" id="dataNasc_user" name="dataNasc_user" value="<?=$_SESSION['dt_nasc']?>" <?=$disabled?>/>
  <br/>

  <label for="escolaridade_user">Escolaridade</label>
  <select id="escolaridade_user" name="escolaridade_user" <?=$disabled?>>
    <option value="escolaridade"><?=$_SESSION['escolaridade']?></option>
  </select>
  <br>
