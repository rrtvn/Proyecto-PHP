<?php



  require_once 'config.php';

  /**
   *
   */
  class Modelo
  {
    protected $_db;

    public function __construct()
    {
      $this->_db = new mysqli(SERVER,USER,PASS,DATABASE);
      if ($this->_db->connect_error) {
         echo "error  " . $this->_db->connect_error;
         return;
      }
    }
  }


 ?>
