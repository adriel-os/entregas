<?php
 $hiddenForm = true;
if(isset($this->msg_cadastro) and count($this->msg_cadastro) > 0)
{
  $hiddenForm = false;
  foreach($this->msg_cadastro as $seq=>$msg)
  {
    ?>
    <small class="container-fluid alert alert-warning"><?=$msg?></small>
    <?php
  }
}
?>
<form action="/cadastro"  name="register" method="post" class="formRegister p-2 needs-validation" active="false">
<div class="fieldsArea <?php echo $hiddenForm?'hidden':'';?>">
  <div class="input-group m-1 form-group">
              <span class="input-group-text bi bi-person-circle" id="basic-addon1"></span>
              <input type="text" value="<?=@$vars['nome'];?>" required name="nome" class="form-control" placeholder="Digite seu nome" aria-label="Input nome" aria-describedby="emailHelp" >
  </div>
  <div class="input-group m-1">
              <span class="input-group-text bi bi-envelope" id="basic-addon1"></span>
              <input value="<?=@$vars['email'];?>"  id="exampleInputEmail1" type="email" name="email" class="form-control" required placeholder="Digite seu e-mail" aria-label="Input email" aria-describedby="basic-addon1">
  </div>
  <div class="input-group m-1">
              <span class="input-group-text bi bi-incognito" id="basic-addon1"></span>
              <input type="text" value="<?=@$vars['login'];?>" name="login" class="form-control" required placeholder="Digite um login" aria-label="Input login" aria-describedby="basic-addon1">
  </div>  
  <div class="input-group m-1">
              <span class="input-group-text bi bi-key" id="basic-addon1"></span>
              <input type="password" value="<?=@$vars['senha'];?>" name="senha" required class="form-control" placeholder="Digite a senha" aria-label="Input senha" aria-describedby="basic-addon1">
  </div>
  </div>
  <div class="input-group m-1 submitArea mt-3">
        <button class="btn btn-primary actionRegister">Cadastre-se</button>
        <div class="p-2 description">Atenção, para usar nosso serviço realize seu cadastro. Leia os <a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop">temos de uso</a> de nossa plataforma.</div>
  </div>    
</form>
<script src="/view/default/js/action.register.js" language="javascript"> </script>
