<?php

require_once 'models/usuario.php';
require_once 'models/usuarioDAO.php';

class UserController {
  private $usuarioDAO;

  function __construct() {
    $this->usuarioDAO = new usuarioDAO();
  }

  function post() {
    $user =  new usuario(0,$_REQUEST['username'],$_REQUEST['user_password']);
    
    if ($this->usarioDAO->insert($user)) {
        echo '<p Usuário cadastrado com sucesso!</p>';
    } else {
        echo '<p Erro ao cadastrar Usuário!</p>';
    }
    }
    function auth() {

      $user = $_REQUEST['username'];
      $user_password = $_REQUEST['username_password'];

      if ($this->usuarioDAO->authentication($user,$user_password)) {
      echo "Ola ".$user.'</br>';
      } 
      
      else {
          echo '<p Erro ao autenticar</p>';
      }
    }
  
}