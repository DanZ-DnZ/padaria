
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card col-lg-4 mx-auto">
              <div class="card-body px-5 py-5">
                <h3 class="card-title text-left mb-3">Logar</h3>
                <form method="POST" action="index.php/login/">
                  <div class="form-group">
                    <label>E-mail</label>
                    <input type="email" class="form-control p_input" name="email">
                  </div>
                  <div class="form-group">
                    <label>Senha</label>
                    <input type="password" class="form-control p_input" name="senha"> 
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-block enter-btn">Login</button>
                  </div>
                  <p class="sign-up text-center">Não Possui uma Conta?<a href="index.php/login/register"> Registrar-se</a></p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
