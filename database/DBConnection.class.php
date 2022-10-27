<?php
// identifica o Diretório Raiz da Aplicação

$path = $_SERVER['SCRIPT_FILENAME'];
for ($i = 0; $i < 2; $i++) {
    $path = substr($path, 0, strripos($path,"/"));
}
$path .= "/";

// Requer as configurações em relação ao diretório local
require $path.'resources/configure.php';

class DBConnection {
    
    private $host = "";
    private $user = "";
    private $pass = "";
    private $db   = "";
    
    private $conn = null;
    
    function __construct() {
        
        include "../resources/configure.php";
        
        $this->setHost( $host );
        $this->setUser( $user );
        $this->setPass( $pass );
        $this->setDb  ( $db );
        $this->setConn( mysqli_connect($this->host, $this->user, $this->pass, $this->getDb() ));
        // Check connection
        if (!$this->conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
    }
    
    public function query($SqlCommand){
        $resultSet = $this->conn->query($SqlCommand);
        return( $resultSet );
    }

    public function getHost(){
        return $this->host;
    }

    public function setHost($host){
        $this->host = $host;
    }

    public function getUser(){
        return $this->user;
    }

    public function setUser($user){
        $this->user = $user;
    }

    public function getPass(){
        return $this->pass;
    }

    public function setPass($pass){
        $this->pass = $pass;
    }

    public function getConn(){
        return $this->conn;
    }

    public function setConn($conn){
        $this->conn = $conn;
    }
    

    public function getDb(){
        return $this->db;
    }

    public function setDb($db){
        $this->db = $db;
        return $this;
    }

}

?>