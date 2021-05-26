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
    <!-- Vantagens para Empresa-->
    <div class="container-fluid">
        <div class="mt-2 py-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <img src="img/PagServicos/imgVantagens.jpg" class="img-fluid py-3 rounded">
                    </div>
                </div>
            </div>
            <section class="container mt-4">
                <h1 class="text-center CorFontPersonal"> Vantagens para Empresa </h1>
                <span class="underline"></span>
                <h2 class="text-center mt-5 CorFontPersonal">Redução de custos</h2>

                <p class="text-justify pPersonal py-4"> Sua empresa elimina custos de busca de oportunidades, treinamento e qualificação dos funcionários, logística para obter e enviar documentos e contratação de assessorias jurídicas para impugnações, recursos administrativos e medidas judiciais
                    protetivas, com horas técnicas muito acima dos valores da Consultoria em Licitações.
                </p>
                <h2 class="text-center CorFontPersonal">Redução de equipe interna</h2>

                <p class="text-justify pPersonal py-4"> Com o custo do salário um profissional de alto nível, sua empresa tem uma equipe inteira ao seu dispor e consumir seus recursos internos, como espaço, equipamentos, etc.
                </p>
                <h2 class=" text-center CorFontPersonal">Serviços de especialistas</h2>
                <p class="text-justify pPersonal py-4">
                    Ao invés de treinar um profissional, que levaria anos para obter todo o conhecimento que os processos de licitação demandam, e poderia sair a qualquer momento, sua empresa tem acesso imediato e contínuo a consultores especialistas no assunto.
                </p>
            </section>
        </div>
    </div>

    <!-- Serviços -->
    <div class="container-fluid">
        <div class="mt-2 py-2">
            <section class="container py-2">
                <header class="col-md-12">
                    <h1 class="text-center CorFontPersonal py-2 mt-3 mb-4">Serviços</h1>
                </header>
                <!--Inclusão dos Cards-->
                <div class="card-deck">
                    <div class="card sombra">
                        <img src="img/PagServicos/imgPreparacaoParaLicitar1.jpg" class="p-3 mb-5 bg-white rounded  card-img-top" alt="">
                        <div class="card-body">
                            <h2 class="text-center py-2 CorFontPersonal">Preparação para Licitar</h2>
                            <p class="text-justify mt-2 pPersonal">
                                O processo de consultoria em licitações começa com a organização e análise da documentação existente, atestados, cadastros nos órgãos públicos, regularidade fiscal e trabalhista, qualificação econômico-financeira. A COZIIND aponta os ajustes necessários,
                                a luz da Lei de Licitações: melhorias em atestados, alterações contratuais, etc. Dá suporte à organização de documentos dos parceiros, de forma atualizada e contínua, para manutenção das condições habilitatórias e aponta
                                os cadastros necessários: SICAF, etc.
                            </p>
                        </div>
                    </div>
                    <div class="card sombra">
                        <img src="img/PagServicos/imgProspeccaoDeEditais.jpg" class="p-3 mb-5 bg-white rounded card-img-top" alt="">
                        <div class="card-body">
                            <h2 class="text-center py-2 CorFontPersonal">Prospecção de Editais de Licitação</h2>
                            <p class="text-justify mt-2 pPersonal">
                                Prospecção diária de editais de licitação e oportunidades de negócios, em âmbito nacional. A consultoria em licitações, nesta etapa, é importante, pois já é feita uma análise jurídica prévia dos editais (aspectos legais e competitivos impugnações recursos,
                                etc.) e das condições de competição do cliente no certame e são identificadas as melhores oportunidades.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card-deck py-4">
                    <div class="card sombra">
                        <img src="img/PagServicos/imgParticipacao.jpg" class="p-3 mb-5 bg-white rounded card-img-top" alt="">
                        <div class="card-body">
                            <h2 class="text-center py-2 CorFontPersonal">Participação no processo Licitatório</h2>
                            <p class="text-justify mt-2 pPersonal">
                                Identificada a oportunidade, a COZIIND trabalha junto com o cliente na montagem dos documentos de habilitação e dando suporte à preparação das propostas técnicas e comerciais. A COZIIND participa nas sessões de abertura, com análise criteriosa da documentação
                                e propostas dos concorrentes, visando impugnações, inabilitações e desclassificação daqueles que não atenderem aos requisitos legais. É nesta etapa que o serviço de Consultoria em Licitações é fundamental, pois são muitos
                                os detalhes e pormenores de cada Edital, que se não observados estritamente podem desqualificar o licitante, por melhores que sejam suas condições e proposta.
                            </p>
                        </div>
                    </div>
                    <div class="card sombra">
                        <img src="img/PagServicos/imgAcompanhamento.jpg" class="p-3 mb-5 bg-white rounded card-img-top" alt="">
                        <div class="card-body">
                            <h2 class="text-center py-2 CorFontPersonal">Acompanhamento da Execução do Contrato</h2>
                            <p class="text-justify mt-2 pPersonal">
                                Vencidas as licitações, o trabalho da COZIIND continua com o acompanhamento dos processos de homologação, contratação, empenhos, liquidações e pagamentos, com a interposição de ações judiciais para defesa dos interesses dos parceiros e de questões de
                                ordem pública, sempre que necessário.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!-- Rodapé -->
    <footer class="container-fluid bg-rodape1">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="card bg-card-rodape">
                        <div class="card-body">
                            <h2 class="text-light text-center"> Endereço:</h2>
                            <p class="text-light text-center mt-3"> Endereço: Rua Dr Quirino, 734 Edifício Portal do Carmo - Sala 61 Centro - Campinas-SP - CEP 13015-081 </p>
                            <p class="text-light text-center mt-3"> Telefone: (19) 3232-2829 </p>
                            <p class="text-light text-center mt-3"> E-mail: <a class="text-light" href="mailto:coziind@coziind.com.br" title=""> coziind@coziind.com.br</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Row Final Site -->
    <div class="container-fluid mt-0 py-0 bg-rowTopo">
        <div class="row">
            <div class="col-md-12">
                <p class="text-center text-light my-2">Desenvolvido por <a class="text-light" href="https://www.linkedin.com/in/weslley-rocha/" target="_blank"> Weslley Rocha</a>&#174;</p>
            </div>
        </div>
    </div>


    <!-- Link Externo -->
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>

</body>

</html>