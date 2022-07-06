
<form method="post" action="/autenticacao" name="auth" class="hidden" >
  <input type="text" name="login" placeholder="Seu login">
  <input type="password" name="password"  placeholder="Sua senha">
  <input type="submit" value="Entrar">
</form>
<script>
  $('form:class=login').hidden()
</script>