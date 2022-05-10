<?php

    class Form extends CI_Controller{

        public function index(){
            $this->load->helper(array('form', '/index.php/login/validalogin'));
            $this->load->library('form_validation');

            $config = array(
                array(
                    'field' => 'email',
                    'label' => 'E-mail',
                    'rules' => 'required'
                ),
                array(
                    'field' => 'senha',
                    'label' => 'Senha',
                    'rules' => 'required'
                )
            );
            $this->form_validation->set_rules( $config );

            if( $this->form_validation->run() == FALSE )
                $this->template->load("templates/loginTemp", "login/login");
            else
                $this->load->view('formsuccess');
        }

    }