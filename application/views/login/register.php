<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Registrar Usuário</title>
    <link rel="stylesheet" href="../../public/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../public/assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="../../public/assets/css/style.css">
    <link rel="shortcut icon" href="../../public/assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card col-lg-4 mx-auto">
              <div class="card-body px-5 py-5">
                <h3 class="card-title text-left mb-3">Registrar</h3>
                <form method="POST" action="index.php/login/salvarregistro">
                  <div class="form-group">
                    <label>Nome</label>
                    <input type="text" class="form-control p_input" name="nome">
                  </div>
                  <div class="form-group">
                    <label>E-mail</label>
                    <input type="email" class="form-control p_input" name="email">
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-block enter-btn">Registrar</button>
                  </div>
                  <p class="sign-up text-center">Já Possui uma Conta?<a href="#"> Entrar </a></p>
                  <p class="terms">Ao criar uma conta está a aceitar os nossos<a href="#"> Termos e Condições</a></p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="../../public/assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="../../public/assets/js/off-canvas.js"></script>
    <script src="../../public/assets/js/hoverable-collapse.js"></script>
    <script src="../../public/assets/js/misc.js"></script>
    <script src="../../public/assets/js/settings.js"></script>
    <script src="../../public/assets/js/todolist.js"></script>
  </body>
</html>