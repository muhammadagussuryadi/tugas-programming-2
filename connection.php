<?php
  class Database{

    var $host   = "localhost";
    var $dbName = "db_learn_pl2";
    var $dbUser = "root";
    var $dbPass = "";
    var $connection;

    function connectDb(){
      $this->connection = mysqli_connect($this->host, $this->dbUser, $this->dbPass, $this->dbName);
      return $this->connection;
    }

  }

?>