<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seja Bem Vindo - Site de Teste</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <main>
         <div class="row">
            <div class="col-md-12 foto-logo">
                <img src="imagens/logo.jpg" class="img-responsive"></img>
            </div>
        </div>
        <form method="post" action="php/login.php">
            <div class="row login">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="usuario">Usuário</label>
                        <input type="text" name="usuario" class="form-control" id="usuario" onkeyup="verifica_nome()"/>
                    </div>
                    <div id="alerta-usuario" class="alerta">Nome INvalido</div>
                </div>
            </div>
            <div class="row login">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="Senha">Senha</label>
                        <input type="password" name="senha" class="form-control" id="senha" onkeyup="verifica_senha()"/>
                    </div>
                    <div id="alerta-senha" class="alerta">Senha invalida</div>
                </div>
            </div>
            <div class="row login">
                <div class="col-md-12">
                    <div class="form-group">
                        <button class="btn btn-success btn-block">Entrar</button>
                    </div>
                </div>
            </div>
        </form>
    </main>
    <script>
        function verifica_nome(){
            
            if(document.getElementById("usuario").value == "")
                document.getElementById("alerta-usuario").removeClass("alerta");
            else
                document.getElementById("alerta-usuario").addClass("alerta");
        }
        
        
        function verifica_senha(){
            
            if(document.getElementById("senha").value == "")
                document.getElementById("alerta-senha").removeClass("alerta");
            else
                document.getElementById("alerta-senha").addClass("alerta");
        }
    </script>
</body>
</html>
