<!-- Site desenvolvido por Weslley Rocha -->
<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Coziind</title>

    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- CSS personalizado -->
    <link rel="stylesheet" href="css/estilo.css">
    <!-- Fonte para Icones -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <link rel="shortcut icon" href="img/Logos/favicon.ico">

</head>

<body>

    <!-- Row Topo Site -->
    <div class="container-fluid mt-0 py-0 bg-rowTopo">
        <div class="row">
            <div class="col-md-12">
                <p class="text-center text-light my-2">Especialista em Licitação Pública</p>
            </div>
        </div>
    </div>

    <!-- Navegador -->
    <div class="container-fluid bg-topo">
        <header class="container">
            <nav class="navbar navbar-expand-lg navbar-dark ">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <a href="#" class="navbar-brand">
                                <img src="img/Logos/LogoCoziindCorBranco.png" height="120" class="d-inline-block align-top" alt="" title="Logo Coziind">
                            </a>
                        </div>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Menu Colapso">
                        <span class="navbar-toggler-icon text-light"></span>
                    </button>
                </div>
                <div class="container my-1">
                    <div class="row">
                        <div class="col">
                            <div id="menu" class="collapse navbar-collapse">
                                <ul class="navbar-nav mr-auto text-light">
                                    <li class="nav-item"> <a href="index.php" class="nav-link text-light">Início</a></li>
                                    <li class="nav-item"> <a href="servicos.php" class="nav-link text-light">Serviços</a></li>
                                    <li class="nav-item"> <a href="produtos.php" class="nav-link text-light">Produtos</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="contato.php" class="btn col-md-3 mb-2 btn-contato">Entrar em contato</a>
            </nav>
        </header>
    </div>

    <!-- Contato -->
    <div class="container-fluid">
        <div class="mt-5 py-2">

            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <img src="img/PagContato/ImgContato.png" class="img-fluid rounded" style="width: 700px;">
                    </div>
                </div>
            </div>
            <section class="container">
                <h1 class="text-center mt-3 CorFontPersonal"> Contatos </h1>
                <span class="underline"></span>
                <h2 class="text-center mt-5 CorFontPersonal">Geral: </h2>
                <h4 class="text-center  CorFontPersonal"> E-mail: <a class="pPersonal" href="mailto:coziind@coziind.com.br" title="">coziind@coziind.com.br</a></h4>
                <p class="text-justify pPersonal py-4">
                </p>
                <h2 class="text-center mt-5 CorFontPersonal"> Pedido / Empenho / Cotação: </h2>
                <h4 class="text-center CorFontPersonal"> E-mail: <a class="pPersonal" href="mailto:vendas@coziind.com.br" title="">vendas@coziind.com.br</a></h4>
                <p class="text-justify pPersonal py-4">
                </p>
                <h2 class="text-center mt-5 CorFontPersonal"> Telefone: </h2>
                <h4 class="text-center mb-5 CorFontPersonal"> (19) 3232-2829 </h4>
            </section>
        </div>
    </div>

   <!-- Inclusão de links externos-->
    <?php include 'footer.php'; ?>

</body>

</html>