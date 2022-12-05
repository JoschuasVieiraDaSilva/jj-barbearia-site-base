<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Formulário de registro</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <script src="assets/js/jquery-3.6.0.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>
        <div id="whatsapp_link">
            <a href="https://api.whatsapp.com/send?phone=5511969690879" target="_blank" class="linkzerostyle">
                <img src="assets/img/whatsapp.png" class="icon_fixed">
            </a>
        </div>
        <div id="logo_size">
            <img src="assets/img/logo.png" class="logo">
        </div>
        <div id="formplaceholderII">
            <div class="c" align="center"> <!--Conteudo principal-->
                <div class="container m-3" >
                    <h3>Autenticação do Usuário</h3>
                    <form id="frmLogin" action="" method="POST">
                        <div class="form-group">
                            <label for="name" id="labelname">Nome:</label>
                            <input type="text" class="form-control" id="name" placeholder="Digite seu nome:" name="nome">
                        </div>
                        <br/>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="text" class="form-control" id="email" placeholder="Digite seu email:" name="email">
                        </div>
                        <br/>
                        <div class="form-group">
                            <label for="pwd" id="labelpwd">Senha:</label>
                            <input type="password" class="form-control" id="pwd" placeholder="Digite sua nova senha:" name="senha">
                        </div>
                        <br/>
                        <button type="button" id="btnRegister"  class="btn btn-primary">Registrar</button>
                    </form>
                    <div id="msg"></div>
                </div>
            </div>
        </div>
        <div id="anterodape" class="spaceplus"> <!--Rodape e subrodape-->
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

