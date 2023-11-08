<?php

class DBManager{

    private static $instance = null;
    public $pdo = null;

    private function __construct()
    {
        $this->pdo = new PDO('mysql:host=localhost:3306;dbname=ricassodb', 'root',
        '');
    }

    public static function getInstance()
    {
      if (self::$instance == null)
      {
        self::$instance = new DBManager();
      }
   
      return self::$instance;
    }
    public function getDBConnection(){
        return $this->pdo;
    }

}
?>