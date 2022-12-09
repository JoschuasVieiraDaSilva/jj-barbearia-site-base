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
    
    header("Location: https://hostdeprojetosdoifsp.gru.br/barbfreitas/index.html");
    
}<?php

require './email/Email.class.php';

if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["date"]) && isset($_POST["hour"]) && isset($_POST["service"])) {
    $nome = $_POST["name"];
    $email = $_POST["email"];
    $date = $_POST["date"];
    $hour = $_POST["hour"];
    $service = $_POST["service"];
    
    $send = new email\Email();
    $send->setFrom("Joschuas500@gmail.com", "Agendamento");
    $send->addTo(utf8_decode($email, $nome));
    $send->setSubject("Agendamento de dia");
    $send->setMsgTxt(utf8_decode("Nome: $nome <br/><br/> Email: $email <br/><br/> Dia e Hora: $date às $hour <br/><br/> Tipo de serviço: $service"));
    $send->send_gmail();
    header("Location: http://localhost/GU3006875/LAB-1/jj-barbearia-site-base-main/index.html");
}
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Agendamento</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--<link rel="stylesheet" href="assets/css/bootstrap.min.css">-->
        <script src="assets/js/jquery-3.6.1.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="assets/css/style.css">
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
                $("btnService").click(function(){
                    window.location.href = "./index.html"
                })
            })
        </script>
        <div class="fixedcontent" id="entrar">
            <a href="./index.html">Página Inicial</a>
        </div>
        <div id="whatsapp_link">
            <a href="https://api.whatsapp.com/send?phone=5511969690879" target="_blank" class="linkzerostyle">
                <img src="assets/img/whatsapp.png" class="icon_fixed">
            </a>
        </div>
        <div id="logo_size">
            <img src="assets/img/logo.png" class="logo">
        </div>
        <div id="formplaceholderIII">
            <div id="c" align="center"> <!--Conteudo principal-->
                <div class="container m-3" >
                    <h3>Autenticação do Usuário</h3>
                    <form id="frmLogin" method="POST">
                    <div class="form-group">
                            <label for="nome">Nome:</label>
                            <input type="text" class="form-control" id="name" placeholder="Digite seu nome:" name="name" required>
                        </div>
                        <br/>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" placeholder="Digite seu email:" name="email" required>
                        </div>
                        <br/>
                        <div class="form-group">
                            <label for="date">Dia:</label>
                            <input type="date" min="" max="" class="form-control" id="date" name="date" required>
                        </div>
                        <br/>
                        <div class="form-group">
                            <label for="hour" id="labelpwd">Hora:</label>
                            <input type="time" class="form-control" id="time" min="10:00" max="18:00" placeholder="Coloque o horário:" name="hour" required>
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
                        <button type="submit" id="btnService"  class="btn btn-primary spaceplus">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
        <div id="anterodape" class="spaceplus">
            <div class="subanterodape">
                <h3>
                    Redes sociais
                </h3>
                <a href="https://www.facebook.com/BarbeariadeFreitas/" target="_blank">
                    <img src="assets/img/facebook.png" class="icon">
                </a>
                <a href="https://api.whatsapp.com/send?phone=5511969690879" target="_blank">
                    <img src="assets/img/whatsapp.png" class="icon">
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


?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Agendamento</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--<link rel="stylesheet" href="assets/css/bootstrap.min.css">-->
        <script src="assets/js/jquery-3.6.1.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="assets/css/style.css">
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
        <div class="fixedcontent" id="entrar">
            <a href="./index.html">Página Inicial</a>
        </div>
        <div id="whatsapp_link">
            <a href="https://api.whatsapp.com/send?phone=5511969690879" target="_blank" class="linkzerostyle">
                <img src="assets/img/whatsapp.png" class="icon_fixed">
            </a>
        </div>
        <div id="logo_size">
            <img src="assets/img/logo.png" class="logo">
        </div>
        <div id="formplaceholderIII">
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
                        <button type="submit" id="btnService"  class="btn btn-primary spaceplus">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
        <div id="anterodape" class="spaceplus">
            <div class="subanterodape">
                <h3>
                    Redes sociais
                </h3>
                <a href="https://www.facebook.com/BarbeariadeFreitas/" target="_blank">
                    <img src="assets/img/facebook.png" class="icon">
                </a>
                <a href="https://api.whatsapp.com/send?phone=5511969690879" target="_blank">
                    <img src="assets/img/whatsapp.png" class="icon">
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
