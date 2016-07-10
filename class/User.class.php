<?php
class User{
  protected $email;
  protected $password;
  protected $username;
  protected $db;

  public function __construct($db, string $email = '', string $username = '', string $password = ''){
    $this->email = $email;
    $this->password = $password;
    $this->username = $username;
    $this->db = $db;
  }
  public function create(){
    $db = $this->db;
    try{
    $db->beginTransaction();
    $db->query('INSERT INTO user (email, password, username) VALUES (:email, :password, :username)');
    $db->bind(':email', $this->email);
    $db->bind(':password', $this->password);
    $db->bind(':username', $this->username);
    $db->execute();
    $db->endTransaction();
  } catch (PDOException $e) {
    return false;
  }
  return true;
  }
}
