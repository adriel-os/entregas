<section class="p-3 textoPrincipal">
    <h1 class="">Você precisa autenticar!</h1>
    <h3 class="desktop">Faça seu logon agora mesmo no seu computador!</h3>
    <h3 class="tablet">Faça seu logon agora mesmo no seu tablet!</h3>
    <h3 class="mobile">Faça seu logon agora mesmo no seu celular!</h3>
    
</section>
<div class="bannerMini">
        <img class="" src="view/default/img/bannerMini.jpg" alt="arte de capa quando mobile" >
</div>
<actions class="">
    <div class="mt-3 linha">
        <?php include_once 'main.right.form.cadastro.inc.php';?>
    </div>
    <div class="linha">
        <?php include_once 'main.right.form.login.inc.php'; ?>
    </div>
</actions>

<script>
// Não enviar até que esteja validado
(function() {
  'use strict';
  window.addEventListener('load', function() {
    var forms = document.getElementsByClassName('needs-validation');
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>

