<?php

require_once 'models/banco.php';

class usuarioDAO
{
   private $connection;

  function __construct() {
    $db = new Database();
    $this->connection = $db->getConnection();
  }

  function insert($user) {
      $query = "INSERT INTO usuarios(username,user_password) VALUES(:username,:user_password)";

      $stmt = $this->connection->prepare($query);
      $stmt->bindValue(':username', $user->getUsername());
      $stmt->bindValue(':user_password', $user->getPassword());
      
      return $stmt->execute();
  }

  function authentication($user,$user_password) {
    $query = "SELECT * FROM usuarios WHERE username = '$user' AND  user_password = '$user_password';";

    $stmt = $this->connection->prepare($query);

    $stmt->execute();

    return $stmt->fetchAll();
  }

}