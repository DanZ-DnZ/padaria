<?php
    class Login extends CI_Controller{
            
            public function __construct(){
                parent::__construct();

                $this->load->model('LoginModel');
            }
            //carrega o formulário de Registro
            public function Registro(){
                $this->template->load("templates/loginTemp", "login/register");
            }
            //carrega o formulario para registro de senha
            public function RegistrarSenha(){
                $this->template->load("templates/loginTemp", "login/registrarsenha");
            }
            //carrega o form de login
            public function login(){
                $this->template->load("templates/loginTemp", "login/login");
            }
            public function SalvarRegistro(){
                $num1 = rand(0, 9);
                $num2 = rand(0, 9);
                $num3 = rand(0, 9);
                $num4 = rand(0, 9);
                $num5 = rand(0, 9);
                $num6 = rand(0, 9);

                $chave = $num1 . '' . $num2 .''. $num3 .''. $num4 . '' . $num5 .''. $num6 . '';

                $data = array(
                    "email" => $_POST['email'],
                    "nome" => $_POST['nome'],
                    "chave" => $chave
                );

                $retorno = $this->LoginModel->registrar( $data );

                $email = $_POST['email'];
                $subject = 'Confirmação de E-mail';
                $message = "Sua Chave de criação de senha: " . $chave;
                $headers = array(
                    'From' => 'Registro@PadariadoBarba.com',
                    'Reply-To' => 'Registro@PadariadoBarba.com'  
                );
                if( $retorno ){
                    mail($email, $subject, $message, $headers);
                    echo "Verifique seu email, foi enviado uma chave para a criação da senha!";
                }else{
                    echo "Erro ao Criar Usuário";
                }
                
            }

            public function AlterarSenha(){
                $senha = sha1($_POST["senha"] . $this->conc);
                $email = $_POST["email"];
                $chave = $_POST["chave"];

                $retorno = $this->LoginModel->CriarSenha($email, $senha, $chave);

                if($retorno)
                    echo "Senha cadastrada com Sucesso!";
                else
                    echo "Erro ao cadastrar senha!";
            }

            private $conc = "smdiaiehfbiandfoa";

            public function ValidaLogin() {
                $email = $_POST["email"];
                $senha = $_POST["senha"];
    
                $senha = md5( $senha . $this->conc);
    
                $retorno = $this->LoginModel->ValidaLogin($email, $senha);
                $adm = $this->LoginModel->VerAdm($email);
                if ( $retorno ) {
                    $_SESSION["session"] = array(
                        "email" => $email,
                        "admin" => $adm
                    );
    
                    header("location: /index.php");
                }
                else {
                    echo "Usuário e/ou sneha inválidos";
                }
    
            }

            public function Deslogar() {
                unset($_SESSION);
                header("location: /index.php/login");
            }
            
    }