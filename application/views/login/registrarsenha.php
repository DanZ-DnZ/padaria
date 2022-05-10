<?php 
      echo validation_errors();

      echo form_open('form');
    ?>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card col-lg-4 mx-auto">
              <div class="card-body px-5 py-5">
                <h3 class="card-title text-left mb-3">Registrar</h3>
                  <div class="form-group">
                    <label>E-mail</label>
                    <input type="text" class="form-control p_input" name="email">
                    <?php echo form_error('email'); ?>
                  </div>
                  <div class="form-group">
                    <label>Senha</label>
                    <input type="password" class="form-control p_input" name="senha">
                    <?php echo form_error('senha'); ?>
                  </div>
                  <div class="form-group">
                    <label>Chave</label>
                    <input type="text" class="form-control p_input" name="chave">
                    <?php echo form_error('chave'); ?>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-block enter-btn">Registrar Senha</button>
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
