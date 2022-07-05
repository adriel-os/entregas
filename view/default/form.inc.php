<div class="mainContainer container row">
    <div class="artLogin w-50 border"> art</div>

    <form method="post" action="/autenticacao" name="auth" class="border w-50 d-flex flex-wrap flex-column justify-content-center" >

            <?php echo isset($this->msg)? '<div class="alert alert-warning text-center">' . $this->msg . '</div>':'<div class="fs-2 mb-3 text-center">Área Restrita</div>';?>
            <div class="input-group w-50 p-1 border flex-fill">
              <span class="input-group-text" id="basic-addon1">
                <i class="bi bi-incognito col-2"></i>
              </span>
              <input type="text" class="form-control" placeholder="Digite" aria-label="Input group example" aria-describedby="basic-addon1">
            </div>
            <div class="input-group w-50 p-1">
              <span class="input-group-text" id="basic-addon1">
                <i class="bi bi-key col-2"></i>
              </span>
              <input type="password" name="password" class="form-control" placeholder="Digite" aria-label="Input group example" aria-describedby="basic-addon1">
            </div>

            <div class="row rowBtn justify-content-center align-items-center border">
                <div class="col-6">
                    <input type="button" class="bot btnCadastrar col-10 btn btn-primary" name="submit" value="Não tenho Login"/>
                </div>
                <div class="col-6">
                    <input type="submit" class="bot btnLogin col-10 btn btn-success " name="submit" value="Login"/>
                </div>
            </div>
    </form>
  </div>