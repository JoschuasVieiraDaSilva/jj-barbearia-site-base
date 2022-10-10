<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="./css/style.css">
        <title>Formulário de Agendamento</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <script src="assets/js/jquery-3.6.0.min.js"></script>
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
                    <a href="index.html" id="logoid"><img src="img/logo.png" id="logo"></a>
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
                <form id="frmLogin">
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
        <div id="anterodape">
            <div class="subanterodape">
                <h3>
                    Redes sociais
                </h3>
                <a href="https://www.facebook.com/BarbeariadeFreitas/" target="_blank" id="facelink">
                    <img src="./img/facebook.png" id="face">
                </a>
                <a href="https://api.whatsapp.com/send?phone=5511969690879" target="_blank" id="facelink">
                    <img src="./img/whatsapp.png" id="face">
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
