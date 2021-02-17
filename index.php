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
    <meta name="description" content="Descrição do meu site">
    <meta name="keywords" content="palavras, chave, do site">
    <meta name="author" content="Danilo Augusto">
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

    <section class="mosaico">
        <div class="container">
            <div class="flex-mosaico">
                <div style="background-image: url('images/mosaico1.jpg');" class="item-1-mosaico"></div>
                <!-- /.item-1-mosaico -->
                <div class="item-2-mosaico"><p>Excepteur esse veniam consectetur aute sunt elit occaecat magna aliqua eu elit irure id irure.Sint qui eu excepteur nisi ullamco ea deserunt Lorem eu minim culpa dolore mollit.Ex ipsum dolor dolore cillum anim commodo elit ullamco occaecat.Veniam veniam aliquip laboris occaecat deserunt tempor adipisicing laborum.</p></div>
                <!-- /.item-2-mosaico -->
            </div>
            <!-- /.flex-mosaico -->
            <div class="flex-mosaico">
                <div style="background-image: url('images/mosaico2.jpg');order:2" class="item-1-mosaico"></div>
                <!-- /.item-1-mosaico -->
                <div class="item-2-mosaico" style="order:1"><p>Excepteur esse veniam consectetur aute sunt elit occaecat magna aliqua eu elit irure id irure.Sint qui eu excepteur nisi ullamco ea deserunt Lorem eu minim culpa dolore mollit.Ex ipsum dolor dolore cillum anim commodo elit ullamco occaecat.Veniam veniam aliquip laboris occaecat deserunt tempor adipisicing laborum.</p></div>
                <!-- /.item-2-mosaico -->
            </div>
            <!-- /.flex-mosaico -->
            <div class="flex-mosaico">
                <div style="background-image: url('images/mosaico3.jpg');" class="item-1-mosaico"></div>
                <!-- /.item-1-mosaico -->
                <div class="item-2-mosaico"><p>Excepteur esse veniam consectetur aute sunt elit occaecat magna aliqua eu elit irure id irure.Sint qui eu excepteur nisi ullamco ea deserunt Lorem eu minim culpa dolore mollit.Ex ipsum dolor dolore cillum anim commodo elit ullamco occaecat.Veniam veniam aliquip laboris occaecat deserunt tempor adipisicing laborum.</p></div>
                <!-- /.item-2-mosaico -->
            </div>
            <!-- /.flex-mosaico -->
            <div class="flex-mosaico">
                <div style="background-image: url('images/mosaico4.jpg');order:2" class="item-1-mosaico"></div>
                <!-- /.item-1-mosaico -->
                <div class="item-2-mosaico" style="order:1"><p>Excepteur esse veniam consectetur aute sunt elit occaecat magna aliqua eu elit irure id irure.Sint qui eu excepteur nisi ullamco ea deserunt Lorem eu minim culpa dolore mollit.Ex ipsum dolor dolore cillum anim commodo elit ullamco occaecat.Veniam veniam aliquip laboris occaecat deserunt tempor adipisicing laborum.</p></div>
                <!-- /.item-2-mosaico -->
            </div>
            <!-- /.flex-mosaico -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /.mosaico -->

    <footer>
        <div class="container">
            <img src="images/logo-1.png" alt="">
            <p>Todos os direitos reservados</p>
            <p>Contato: 3222-2356</p>
        </div>
    </footer>
    
</body>
</html>