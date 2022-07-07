<?php
if(isset($vars['login']) and !$vars['login'])
{
  $hiddenForm = false;
  foreach($vars['msg'] as $seq=>$msg)
  {
    ?>
    <small class="alert alert-warning container-fluid"><?=$msg?></small>
    <?php
  }
}
?>
<form method="post" action="/autenticacao" name="auth" class="formLogin p-2 needs-validation" active="false">
  <div class="fieldsArea <?=$hiddenForm?'hidden':'' ?>">
    <div class="input-group m-1">
                  <span class="input-group-text bi bi-incognito" id="basic-addon1"></span>
                  <input type="text" value="<?=@$vars['post']['login']?>" name="login" required class="form-control" placeholder="Digite um login" aria-label="Input login" aria-describedby="basic-addon1">
      </div>  
      <div class="input-group m-1">
                  <span class="input-group-text bi bi-key" id="basic-addon1"></span>
                  <input type="password" name="password" required class="form-control" placeholder="Digite a senha" aria-label="Input senha" aria-describedby="basic-addon1">
      </div>
  </div>
<div class="input-group m-1 submitArea mt-3">
  <button class="btn btn-secondary actionEntrar" type="submit">Entrar</button>
  <div class="p-2 description">Caso ja esteja cadastrado faça seu logon.</div>
</div>
</form>
<script src="/view/default/js/action.login.js" language="javascript"> </script>