<?php

require './email/Email.class.php';

if (isset($_POST["nome"]) && isset($_POST["email"]) && isset($_POST["date"]) && isset($_POST["hour"]) && isset($_POST["service"])) {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $date = $_POST["date"];
    $hour = $_POST["hour"];
    $service = $_POST["service"];
    
    $send = new email\Email();
    $send->setFrom("Joschuas500@gmail.com", "Jóschuas");
    $send->addTo($email, $nome);
    $send->setSubject("Agendamento de dia");
    $send->setMsgTxt("Nome: $nome\nEmail: $email\nDia e Hora: $date - $hour\nTipo de serviço: $service");
    $send->send_gmail();
    
    header("Location: http://localhost/GU3006875/LAB-1/jj-barbearia-site-base-main/index.html");
}

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="assets/css/style.css">
        <title>Formulário de Agendamento</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--<link rel="stylesheet" href="assets/css/bootstrap.min.css">-->
        <script src="assets/js/jquery-3.6.1.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <script>
            var today;
            $(document).ready(function(){
                $("#date").click(function(){
                    today = new Date().toISOString().slice(0, 10)
                    $("#date").attr("min", today);
                    $("#date").attr("max", );
                    console.log($("#date").attr("min"));
                }); 
            })
        </script>
        <div id="cabecalhomain">
            <div id="cabecalho_1" align="center"> <!--Divisão da logo-->
                <div id="cabecalhologo">
                    <a href="index.html" id="logoid"><img src="assets/img/logo.png" id="logo"></a>
                </div>
            </div>
            <div id="cabecalho_2" align="center"> <!--Divisão do texto e botão "entrar"-->
                <div id="cabecalhotext">
                    <h2>Barbearia de Freitas</h2>
                    <a href="./login.php"> Login </a>
                </div>
            </div>
        </div>
        <div id="c" align="center"> <!--Conteudo principal-->
            <div class="container m-3" >
                <h3>Autenticação do Usuário</h3>
                <form id="frmLogin" method="POST">
                <div class="form-group">
                        <label for="nome">Nome:</label>
                        <input type="text" class="form-control" id="nome" placeholder="Digite seu nome:" name="nome">
                    </div>
                    <br/>
                	<div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" placeholder="Digite seu email:" name="email">
                    </div>
                    <br/>
                    <div class="form-group">
                        <label for="date">Dia:</label>
                        <input type="date" min="" max="" class="form-control" id="date" name="date">
                    </div>
                    <br/>
                    <div class="form-group">
                        <label for="hour" id="labelpwd">Hora:</label>
                        <input type="time" class="form-control" id="time" placeholder="Coloque o horário:" name="hour">
                    </div>
                    <br/>
                    <div class="form-group">
                        <label for="service" id="labelservice">Serviço(s):</label>
                        <select class="form-control" id="service" name="service">
                            <option value="Cabelo">Cabelo</option>
                            <option value="Barba">Barba</option>
                            <option value="Luz">Luz</option>
                            <option value="Alisamento">Alisamento</option>
                        </select>
                        <br/>
                    </div>
                    <br/>
                    <button type="submit" id="btnService"  class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
        <br/><br/><br/><br/><br/><br/><br/><br/><br/>
        <div id="anterodape">
            <div class="subanterodape">
                <h3>
                    Redes sociais
                </h3>
                <a href="https://www.facebook.com/BarbeariadeFreitas/" target="_blank" id="facelink">
                    <img src="assets/img/facebook.png" id="face">
                </a>
                <a href="https://api.whatsapp.com/send?phone=5511969690879" target="_blank" id="facelink">
                    <img src="assets/img/whatsapp.png" id="face">
                </a>
            </div>
            <div class="subanterodape">
                <h3>
                    Endereço
                </h3>
                <p>
                    Rua Marquês de Cesare Bonesana <br/> 370 / SP 07195200 <br/> Guarulhos / SP
                </p>
            </div>
            <div class="subanterodape">
                <h3>
                    Contato
                </h3>
                <p> 
                    +55 (11) 96969-0879 (whatsapp)
                </p>
            </div>
        </div>
        <footer id="rodape" align="center"> <!--Rodapé-->
            <h3 class="direitos">
                © JJ Assuntos Ténicos 2022
            </h3>
            <br>
            <h3 class="direitos">
                Todos os direitos reservados
            </h3>
        </footer>
    </body>
</html>
