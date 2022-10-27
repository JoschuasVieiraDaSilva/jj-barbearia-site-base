<?php
// identifica o Diretório Raiz da Aplicação

$path = $_SERVER['SCRIPT_FILENAME'];
for ($i = 0; $i < 2; $i++) {
    $path = substr($path, 0, strripos($path,"/"));
}
$path .= "/";

// Requer as configurações em relação ao diretório local
require $path.'database/DBConnection.class.php';

class DBQuery {
    
    private $conn           =  null;
    private $tableName 	    = "";
    private $fieldsName     = array();
    private $fieldKey  	    = "";
    private $keyFieldIndex  = -1;
    
    
    public function __construct( $tableName, $fieldsName, $fieldKey ) {
        $this->setTableName	( $tableName  );
        $this->setFieldsName( $fieldsName );
        $this->setFieldKey	( $fieldKey   );
       
        $dbconn = new DBConnection();
        echo "<br>4<br>";
        $this->conn = $dbconn->getConn();
    }
    
    function removeQuotes($str) {
        return( str_replace('\'', '', $str ) );
    }

    function removeQuotesArray($array) {
        $tmpArray = array();
        for ($i = 0; $i < count($array); $i++) {
            $tmpArray[$i] = removeQuotes($array[$i]);
        }
        return( $tmpArray );
    }
    
    public function select($where) {
        $sql = "SELECT ".  implode(', ', $this->getFieldsName()) . " FROM " . $this->getTableName();
        $sql .= (( $where!="") ? " WHERE ". $where : "" );
        return $this->getConn()->query($sql);
    }
    
    public function insert($values) {
        if ( count($values) == count($this->getFieldsName())){
            $sql = "INSERT INTO " . $this->getTableName() . " (".implode(', ', $this->getFieldsName()) ;
            $sql .= ") VALUES ('" . implode("','", $values) . "')";
            // echo $sql;
            return $this->getConn()->query($sql);
        }else{
            echo("O número de valores informados não é equivalente aos campos da tabela!");
        }
        return 0;
    }
    
    public function update($values) {
        if ( count($values) != count($this->getFieldsName())){
            echo ("\n A quantidade de campos é diferente da quantidade de valores!");
            return ( 0 );
        }

        $sql = "\nUPDATE ".$this->getTableName()." SET ";
        
        for( $i=0; $i <  count($values); $i++){
            $sql .= "\n\t " . $this->fieldsName[$i] . " = '". $values[$i] ."'" .  (($i == count($values)-1) ? "" : ", ");
        }
       
        if ( $this->getFieldKey() < 0 ){
            return(0);
        }
        $sql .= "\n WHERE " . $this->getFieldKey() . " = '" . $values[$this->getKeyFieldIndex()] . "'";
       
        return $this->getConn()->query($sql);
    }

    public function delete($values) {
       if ( count($values) != count($this->getFieldsName())){
            echo ("\n A quantidade de campos é diferente da quantidade de valores!");
            return ( 0 );
       }
        
       $sql = "\nDELETE FROM " . $this->getTableName() . " ";
       if ( $this->getKeyFieldIndex() < 0 ){
            return(0);
       }
       $sql .= "\n WHERE " . $this->getFieldKey() ." = '" . $values[$this->getKeyFieldIndex()] . "'";
       return $this->getConn()->query($sql);
    }
    
    public function getConn(){
        return $this->conn;
    }

    public function setConn($conn){
        $this->conn = $conn;
        return $this;
    }

    public function getTableName(){
        return $this->tableName;
    }

    public function setTableName($tableName){
        $this->tableName = $tableName;
    }

    public function getFieldsName(){
        return $this->fieldsName;
    }

    public function setFieldsName( $fieldsName ){
        $this->fieldsName	=  explode(',', $fieldsName);
        for ($i=0;  $i< count($this->fieldsName); $i++) {
            $this->fieldsName[$i] = trim($this->fieldsName[$i]);
        };
    }

    public function getFieldKey(){
        return $this->fieldKey;
    }

    private function whereIsKeyField() {
        for ($i = 0; $i < count($this->getFieldsName()); $i++) {
            if( $this->fieldsName[$i] == $this->getFieldKey() ){
                return( $i );
            }
        }
        return(-1);
    }
    
    public function setFieldKey( $fieldKey ) {
        $this->fieldKey = $fieldKey;
        $this->setKeyFieldIndex($this->whereIsKeyField());
    }
    
    public function getKeyFieldIndex(){
        return $this->keyFieldIndex;
    }

    public function setKeyFieldIndex($keyFieldIndex){
        $this->keyFieldIndex = $keyFieldIndex;
        return $this;
    }

}