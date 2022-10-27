<?php


if ( session_status() == PHP_SESSION_NONE ) { //  PHP >= 5.4.0
    session_start();
}

$path   = array();
$confDB = array();
$smtp   = array();

// Definir caminhos padrões
$path["projectDIR"]     = __DIR__ ;
$path["projectURL"]     = __DIR__ ;
$path["uploadPublic"]   = __DIR__ ."/upFilesPublic/";
$path["uploadPrivate"]  = __DIR__ ."/upFilesPrivate/";
$path["autoload"]       = __DIR__ ."/autoload.php";
$_SESSION['path']       = $path;

// Definir configurações de Banco de Dados
if ( $_SERVER ['HTTP_HOST'] == 'localhost' ){ // Em localhost
    $confDB['host']     = "localhost";
    $confDB['user']     = "developer";
    $confDB['pass']     = "senha";
    $confDB['schema']   = "lojinha";
}else{                                  // Em deploy
    $confDB['host']  = "";
    $confDB['user']  = "";
    $confDB['pass']  = "";
    $confDB['schema']= "";
}
$_SESSION["confDB"] = $confDB;

// Definir Configurações de SMTP
$smtp['host']       = 'smtp.gmail.com';
$smtp['auth']       =  true;
$smtp['secure']     = 'tls';
$smtp['username']   = 'Joschuas500@gmail.com';
$smtp['password']   = 'ohyyjkiewwvsiocn';
$smtp['port']       =  465;
$_SESSION["smtp"]   = $smtp;

?>