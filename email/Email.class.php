<?php

// Utilizaremos o https://github.com/PHPMailer/PHPMailer

namespace email;

require __DIR__.'/../resources/configure.php';

//Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require __DIR__.'/vendor/autoload.php';


class Email {
    
    private $host;
    private $auth;
    private $secure;
    private $username;
    private $password;
    private $port;
    
    private $from = array();
    private $repply = array();
    private $to = array();
    private $subject  = '';
    private $msgHTML  = '';
    private $msgTxt   = '';
    private $attachments  = array();
    
    function __construct() {
        $this->serverConfiguration();
    }
    
    public function serverConfiguration() {
        if ( session_status() == PHP_SESSION_NONE ) { //  PHP >= 5.4.0
            session_start();
        }
        $this->setHost      ( $_SESSION["smtp"]['host'] );
        $this->setAuth      ( $_SESSION["smtp"]['auth'] );
        $this->setSecure    ( $_SESSION["smtp"]['secure'] );
        $this->setUsername  ( $_SESSION["smtp"]['username'] );
        $this->setPassword  ( $_SESSION["smtp"]['password'] );
        $this->setPort      ( $_SESSION["smtp"]['port'] );
        //print_r($_SESSION["smtp"]);
    }
    
    public function send(){
        $mail = new PHPMailer();
    }
    
    
    
    
    public function send_gmail_xoauth($param) {
        
    }
    public function send_gmail() {
        
        $mail = new PHPMailer();
        // Dados do Servidor
        $mail->isSMTP();
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->Host      = $this->getHost();
        $mail->Port      = $this->getPort();
        $mail->SMTPSecure= PHPMailer::ENCRYPTION_SMTPS;
        $mail->SMTPAuth  = true;
        $mail->Username  = $this->getUsername();
        $mail->Password  = $this->getPassword();
        
        // Dados da Mensagem 
        $from = $this->getFrom();
        
        $mail->setFrom( $from["email"], $from["name"]);
        $mail->addReplyTo($from["email"], $from["name"]);
        
        foreach ($this->getTo() as $to ) {
            $mail->addAddress($to['email'], $to['name']);
            //echo "<br>".$to['email']." | ". $to['name'];
        }
        //echo "<hr> 1 ";
        $mail->Subject = $this->getSubject();
        //echo "<hr> 2 ";
        
        $mail->msgHTML($this->getMsgHTML()?"":$this->getMsgTxt());
        //echo "<hr> 3 ";
        $mail->AltBody = $this->getMsgTxt();
        
        //echo "<hr> 4 ";
/*         if (count ($this->getAttachments() )> 0)
        foreach ($this->getAttachments() as $attachment ) {
            $mail->addAddress($attachment);
            echo "<br>".$attachment;
        } */
        //echo "<hr> 5 ";
        //echo "<hr>";
        /*if (!$mail->send()) {
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            echo 'Message sent!';
        }*/
    }
    
	private function getHost(){
		return $this->host;
	}

	private function setHost($host){
		$this->host = $host;
	}

	private function getAuth(){
		return $this->auth;
	}

	private function setAuth($auth){
		$this->auth = $auth;
	}

	private function getSecure(){
		return $this->secure;
	}

	private function setSecure($secure){
		$this->secure = $secure;
	}

	private function getUsername(){
		return $this->username;
	}

	private function setUsername($username){
		$this->username = $username;
	}

	private function getPassword(){
		return $this->password;
	}

	private function setPassword($password){
		$this->password = $password;
	}

	private function getPort(){
		return $this->port;
	}

	private function setPort($port){
		$this->port = $port;
	}
    
	public function getFrom(): array{
		return ( $this->from);
	}

	public function setFrom($email, $name){
	    $this->from = array("email"=>$email, "name"=>$name);
	}

	public function getRepply(): array{
	    return ( $this->repply);
	}

	public function setRepply($email, $name){
	    $this->repply = array("email"=>$email, "name"=>$name);
	}

	public function getTo(): array{
	    return ( $this->to);
	}

	public function addTo($email, $name){
	    array_push($this->to, array("email"=>$email, "name"=>$name));
	}

	public function getSubject(){
	    return $this->subject;
	}

	public function setSubject($subject){
		$this->subject = $subject;
	}

	public function getMsgHTML(){
		return $this->msgHTML;
	}

	public function setMsgHTML($msgHTML){
		$this->msgHTML = $msgHTML;
	}

	public function getMsgTxt(){
		return $this->msgTxt;
	}

	public function setMsgTxt($msgTxt){
		$this->msgTxt = $msgTxt;
	}

	public function getAttachments() : array{
	    return $this->attachments;
	}

	public function addAttachments( $filePath ){
	    $this->attachments[] = $filePath;
	}

}





?>
