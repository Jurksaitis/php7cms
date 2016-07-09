<?php

class User{
  protected string email;
  protected string username;
  protected string password;

    public function __construct(string email = '', string username = '', string password = ''){
      $this->email = email;
      $this->username = username;
      $this->password = password;
    }
}
