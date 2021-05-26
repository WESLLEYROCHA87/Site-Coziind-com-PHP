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

    <!-- Cards Produtos-->
    <div class="container-fluid py4">
        <div class="py-2">
            <section class="container">
                <header>

                    <h3 class="text-center mt-5 CorFontPersonal"> O que é o carona no processo de licitação? </h3>
                    <span class="underline"></span>
                    <p class="text-justify pPersonal py-4"> O carona no processo de licitação é um órgão que antes de proceder à contratação direta sem licitação ou a licitação verifica já possuir, em outro órgão público, da mesma esfera ou de outra, o produto desejado em condições de vantagem
                        de oferta sobre o mercado já comprovadas.</p>
                    <p class="text-justify pPersonal py-4"><strong>A utilização do Sistema de Registro de Preços importa uma série de vantagens para a Administração Pública e a possibilidade do “carona” é uma forma inteligente e vantajosa para ser utilizada pelos entes públicos.</strong></p>
                    <h1 class="text-center mt-3 CorFontPersonal"> Produtos Registrados em Atas</h1>
                    <span class="underline mb-5"></span>
                </header>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card sombra mb-3">
                            <img src="img/ImgProdutos/PRCOP_504.jpg" class="img-fluid mx-auto d-block" alt="" title="Lava Louça">
                            <div class="card-body">
                                <h5 class="card-title">Lava Louça - Prática Klimaquip
                                </h5>
                                <!-- <a href="">Informações Adicionais</a> -->
                                <!-- Botão para acionar modal -->
                                <button type="button" class="btn btn-primary justify-content-center" data-toggle="modal" data-target="#ModalLavaLouca"> 
                                Informações para Aquisição                                
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="ModalLavaLouca" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="TituloModalCentralizado">Informações adicionais
                                                    <p class="text-danger">Clique no modelo para ter acesso ao catálogo!</p>
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <!-- Inicio da tabela -->
                                                <table class="table table-sm table-hover table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">Pregão:</th>
                                                            <th scope="col">UASG:</th>
                                                            <th scope="col">Item:</th>
                                                            <th scope="col">Modelo:</th>
                                                            <th scope="col">Valor Unitário:</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">17</th>
                                                            <th> 6/2020 </th>
                                                            <th> 160120 </th>
                                                            <th> 49 </th>
                                                            <th>
                                                                <a href="img/CatalogoProdutos/PRCOP_504.pdf" target="_blank">PRCOP-504</a>
                                                            </th>
                                                            <th> R$ 9.900,00 </th>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                                <!-- <button type="button" class="btn btn-primary">Salvar mudanças</button> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card sombra mb-3">
                            <img src="img/ImgProdutos/DB-25HD-N.jpg" class="img-fluid mx-auto d-block" alt="" title="Descascador">
                            <div class="card-body">
                                <h5 class="card-title">Descascador - Skymsen</h5>
                                <!-- <a href="">Informações Adicionais</a> -->
                                <!-- Botão para acionar modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalDescascador"> 
                                Informações para Aquisição
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="ModalDescascador" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="TituloModalCentralizado">Informações adicionais
                                                    <p class="text-danger">Clique no modelo para ter acesso ao catálogo!</p>
                                                </h5>

                                                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <!-- Inicio da tabela -->
                                                <table class="table table-sm table-hover table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">Pregão:</th>
                                                            <th scope="col">UASG:</th>
                                                            <th scope="col">Item:</th>
                                                            <th scope="col">Modelo:</th>
                                                            <th scope="col">Valor Unitário:</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th> 18 </th>
                                                            <th> 3/2020 </th>
                                                            <th> 160038 </th>
                                                            <th> 220 </th>
                                                            <th>
                                                                <a href="img/CatalogoProdutos/DB-25HD-N.pdf">DB-25HD-N </a>
                                                            </th>
                                                            <th> R$ 6.560,00 </th>
                                                        </tr>
                                                        <tr>
                                                            <th> 32 </th>
                                                            <th> 14/2020 </th>
                                                            <th> 160186 </th>
                                                            <th> 49 </th>
                                                            <th class="bg-warning">
                                                                <a href="img/CatalogoProdutos/DB-25HD-N.pdf">DB-25HD-N + CC-25HD</a></th>
                                                            <th> R$ 7.575,00 </th>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                                <!-- <button type="button" class="btn btn-primary">Salvar mudanças</button> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card sombra mb-3">
                            <img src="img/ImgProdutos/CARRO 3 PLANOS.jpg" class="img-fluid mx-auto d-block" alt="" title="Lava Louça">
                            <div class="card-body">
                                <h5 class="card-title">Carro de Transporte - Magna</h5>
                                <!-- Botão para acionar modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalCarroTransporte"> 
                                Informações para Aquisição
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="ModalCarroTransporte" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="TituloModalCentralizado">Informações adicionais
                                                    <p class="text-danger">Clique no modelo para ter acesso ao catálogo!</p>
                                                </h5>

                                                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <!-- Inicio da tabela -->
                                                <table class="table table-sm table-hover table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col" class="text-center">#</th>
                                                            <th scope="col" class="text-center">Pregão:</th>
                                                            <th scope="col" class="text-center">UASG:</th>
                                                            <th scope="col" class="text-center">Item:</th>
                                                            <th scope="col" class="text-center">Modelo:</th>
                                                            <th scope="col" class="text-center">Qtde:</th>
                                                            <th scope="col" class="text-center">Valor Unitário:</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th> 81 </th>
                                                            <th> 1/2021 </th>
                                                            <th> 160198 </th>
                                                            <th> 35 </th>
                                                            <th>
                                                                <a href="img/CatalogoProdutos/CAT.ITEM 35 - CARRO INOX 3P.pdf">3 PLANOS</a>
                                                            </th>
                                                            <th> 42 </th>
                                                            <th> R$ 375,00 </th>

                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                                <!-- <button type="button" class="btn btn-primary">Salvar mudanças</button> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card sombra mb-3">
                            <img src="img/ImgProdutos/GPC-57-BR.png" class="img-fluid mx-auto d-block" alt="" title="Freezer Vertical">
                            <div class="card-body">
                                <h5 class="card-title">Freezer Vertical - Gelopar</h5>
                                <!-- Botão para acionar modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalFreezerVertical"> 
                                Informações para Aquisição
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="ModalFreezerVertical" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="TituloModalCentralizado">Informações adicionais
                                                    <p class="text-danger">Clique no modelo para ter acesso ao catálogo!</p>
                                                </h5>

                                                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <!-- Inicio da tabela -->
                                                <table class="table table-sm table-hover table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col" class="text-center">#</th>
                                                            <th scope="col" class="text-center">Pregão:</th>
                                                            <th scope="col" class="text-center">UASG:</th>
                                                            <th scope="col" class="text-center">Item:</th>
                                                            <th scope="col" class="text-center">Modelo:</th>
                                                            <th scope="col" class="text-center">Qtde:</th>
                                                            <th scope="col" class="text-center">Valor Unitário:</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th> 13 </th>
                                                            <th> 15/2020 </th>
                                                            <th> 160473 </th>
                                                            <th> 44 </th>
                                                            <th>
                                                                <a href="img/CatalogoProdutos/GPC-57-BR.pdf">GPC-57-BR</a>
                                                            </th>
                                                            <th> 25 </th>
                                                            <th> R$ 2.665,00 </th>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                                <!-- <button type="button" class="btn btn-primary">Salvar mudanças</button> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card sombra mb-3">
                            <img src="img/ImgProdutos/GHBS-510.png" class="img-fluid mx-auto d-block" alt="" title="Freezer Horizontal">
                            <div class="card-body">
                                <h5 class="card-title">Freezer Horizontal - Gelopar</h5>
                                <!-- Botão para acionar modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalFreezerHorizontal"> 
                                Informações para Aquisição
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="ModalFreezerHorizontal" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="TituloModalCentralizado">Informações adicionais
                                                    <p class="text-danger">Clique no modelo para ter acesso ao catálogo!</p>
                                                </h5>

                                                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <!-- Inicio da tabela -->
                                                <table class="table table-sm table-hover table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col" class="text-center">#</th>
                                                            <th scope="col" class="text-center">Pregão:</th>
                                                            <th scope="col" class="text-center">UASG:</th>
                                                            <th scope="col" class="text-center">Item:</th>
                                                            <th scope="col" class="text-center">Modelo:</th>
                                                            <th scope="col" class="text-center">Qtde:</th>
                                                            <th scope="col" class="text-center">Valor Unitário:</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th> 16 </th>
                                                            <th> 15/2020 </th>
                                                            <th> 160473 </th>
                                                            <th> 69 </th>
                                                            <th>
                                                                <a href="img/CatalogoProdutos/GHBS-510.pdf">GHBS-510</a>
                                                            </th>
                                                            <th> 69 </th>
                                                            <th> R$ 2.085,00 </th>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                                <!-- <button type="button" class="btn btn-primary">Salvar mudanças</button> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>


    <!-- Rodapé -->
    <footer class="container-fluid bg-rodape1 ">
        <div class="container py-5 ">
            <div class="row ">
                <div class="col-md-12 ">
                    <div class="card bg-card-rodape ">
                        <div class="card-body ">
                            <h2 class="text-light text-center "> Endereço:</h2>
                            <p class="text-light text-center mt-3 "> Endereço: Rua Dr Quirino, 734 Edifício Portal do Carmo - Sala 61 Centro - Campinas-SP - CEP 13015-081 </p>
                            <p class="text-light text-center mt-3 "> Telefone: (19) 3232-2829 </p>
                            <p class="text-light text-center mt-3 "> E-mail: <a class="text-light " href="mailto:coziind@coziind.com.br " title=" "> coziind@coziind.com.br</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Row Final Site -->
    <div class="container-fluid mt-0 py-0 bg-rowTopo ">
        <div class="row ">
            <div class="col-md-12 ">
                <p class="text-center text-light my-2 ">Desenvolvido por <a class="text-light " href="https://www.linkedin.com/in/weslley-rocha/ " target="_blank "> Weslley Rocha</a>&#174;</p>
            </div>
        </div>
    </div>


    <!-- Link Externo -->
    <script src="js/jquery-3.6.0.min.js "></script>
    <script src="js/jquery-min.js "></script>
    <script src="js/popper.min.js "></script>
    <script src="js/bootstrap.min.js "></script>
    <script src="js/jquery.counterup.min.js "></script>
    <script src="js/waypoints.min.js "></script>
    <!--Script pessoal-->
    <script type="text/javascript " src="js/main.js "></script>


</body>

</html>

</html>

</html>