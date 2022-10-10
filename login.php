<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="./css/style.css">
        <title>Formulário de Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <script src="assets/js/jquery-3.6.0.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <div id="cabecalhomain">
            <div id="cabecalho_1" align="center"> <!--Divisão da logo-->
                <div id="cabecalhologo">
                    <a href="index.html" id="logoid"><img src="img/logo.png" id="logo"></a>
                </div>
            </div>
            <div id="cabecalho_2" align="center"> <!--Divisão do texto-->
                <div id="cabecalhotext">
                    <h2>Barbearia de Freitas</h2>
                    <a href="agendamento.php" id="link_agend">Agendamento</a>
                </div>
            </div>
        </div>
        <div id="c" align="center"> <!--Conteudo principal-->
            <div class="container m-3" >
                <h3>Autenticação do Usuário</h3>
                <form id="frmLogin">
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" placeholder="Digite seu email:" name="email">
                    </div>
                    <br/>
                    <div class="form-group">
                        <label for="pwd" id="labelpwd">Senha:</label>
                        <input type="password" class="form-control" id="pwd" placeholder="Digite sua senha:" name="senha">
                    </div>
                    <br/>
                    <button type="button" id="btnLogin"  class="btn btn-primary">Enviar</button>
                </form>
                <p>Não possui uma conta?</p>
                <a href="register.html" id="Register_link">Registre-se</a>
                <div id="msg"></div>
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
            <h3>
                &copy JJ Assuntos Ténicos 2022
            </h3>
            <h3>
                Todos os direitos reservados
            </h3>
        </footer>
    </body>
</html>

