<?php

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <title>Landing Page</title>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="description" content="Descrição do meu site">
    <meta charset="keywords" content="palavras, chave, do site">
    <meta charset="author" content="Danilo Augusto">
</head>
<body>

    <header>
        <div class="container">
            <div>
                <div class="logo-1"></div>
            </div>
            <div>
                <div class="logo-2"></div>
            </div>
            <div class="clear"></div>
        </div>
    </header>

    <section class="cover-form">
        <div class="container bg">
            <div class="form-container">
                <h2>Pode acreditarm por dentro é ainda mais bonito.</h2>
                <form>
                    <div class="form-wraper">
                        <label>Nome Completo: *</label>
                        <input type="text" name="nome" placeholder="Nome" required>
                    </div>

                    <div class="form-wraper">
                        <label>E-mail: *</label>
                        <input type="text" name="email" placeholder="E-mail" required>
                    </div>

                    <div class="form-wraper">
                        <label>Telefone: *</label>
                        <input type="text" name="telefone" placeholder="Telefone" required>
                    </div>

                    <div class="form-wraper">
                        <input type="submit" value="Enviar" name="acao">
                    </div>

                    <div class="form-wraper">
                        <p>* Campos Obrigatórios</p>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <section class="chamada">
        <div class="container">
            <div>
                <h2>Minha chamada para o empreendimento</h2>
            </div>
            <div>
                <p>Alguma mensagem para a chamada</p>
            </div>
        </div>
    </section>
    
</body>
</html>