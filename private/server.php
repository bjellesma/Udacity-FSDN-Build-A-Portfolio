<?php
  require_once('../PHP/security.php');
  class EmailSettings{
    const HOST = '';
    const USERNAME = '';
    const PASSWORD = '';
    const SECURITY = '';
    const PORT = ;
    public function getHost(){
      return self::HOST;
    }
    public function getUsername(){
      return self::USERNAME;
    }
    public function getPassword(){
      return self::PASSWORD;
    }
    public function getSecurity(){
      return self::SECURITY;
    }
    public function getPort(){
      return self::PORT;
    }
  }

?>
