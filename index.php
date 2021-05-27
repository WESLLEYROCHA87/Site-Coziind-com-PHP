<!-- Inclusão de links externos-->
<?php include 'header.php'; ?>

<!-- Slide Show -->
<div class="container my-2">
    <div id="slideshow" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#slideshow" data-slide-to="0" class="active"></li>
            <li data-target="#slideshow" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <a href="#">
                    <img src="img/Carousel/Carousel_1.jpg" class="d-block w-100 rounded" alt="Primeiro Slide">
                </a>
            </div>
            <div class="carousel-item">
                <a href="#">
                    <img src="img/Carousel/Carousel_2.jpg" class="d-block w-100 rounded" alt="Segundo Slide">
                </a>
            </div>
        </div>
        <a href="#slideshow" class="carousel-control-prev" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a href="#slideshow" class="carousel-control-next" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Próximo</span>
        </a>
    </div>
</div>

<!-- Informações sobre o serviço prestado-->
<div class="container-fluid">
    <div class="mt-2 py-4">
        <section class="container">
            <h1 class="text-center CorFontPersonal"> A Consultoria </h1>
            <span class="underline"></span>
            <p class="text-justify pPersonal py-4">Os processos de
                <Strong>licitações</Strong> hoje são extremamentes rigorosos: da documentação exigida até a execução do objeto contratado, a <strong>Lei de Licitações</strong> permitiu que as
                <Strong>licitações</Strong> ficassem mais transparentes aos participantes e à sociedade, garantindo o cumprimento do princípio constitucional de Igualdade de Competição.
            </p>
            <h1 class="text-center CorFontPersonal"> O que fazemos?</h1>
            <span class="underline"></span>
            <p class="text-justify pPersonal py-4">A empresa tem por objetivo auxiliar o empresário na complexa atuação junto ao Poder Público, através de assessoria em licitações públicas de quaisquer modalidades, acompanhando o cliente desde a análise do edital até o momento da contratação
                junto à Administração, verificando-se a regularidade de todas as etapas da licitação.</p>
            <h1 class=" text-center CorFontPersonal">Qual a importância da representação?</h1>
            <span class="underline"></span>
            <p class="text-justify pPersonal py-4">A presença de um profissional especialista no ato de abertura de uma
                <Strong>licitações</Strong> é uma vantagem competitiva crucial, pois neste momento é possível afunilar a competição, eliminando concorrentes mal preparados, através da análise rigorosa de sua documentação de habilitação e propostas. Da mesma forma, a presença
                do especialista pode impedir a inabilitação do cliente por exigência excessiva ou erros de avaliação da <strong>Comissão de Licitação</strong>. Caso se faça necessário, o especialista pode impetrar recursos ou as medidas protetivas
                cabíveis, garantindo ao seu cliente a continuidade, de forma justa, na competição.
            </p>
            <p class="text-justify pPersonal"> <strong>Ao cliente cumpre somente definir qual o <u>preço mínimo</u> que poderá ser ofertado à
                    Administração; todo o resto fica a cargo da nossa empresa.</strong> .</p>
            <p class="mt-4"><a href="servicos.html" class="CorFontPersonal pPersonal">Saiba mais...</a></p>
        </section>
    </div>
</div>


<!-- Area de Atuação -->
<div class="container-fluid bg-areAatuacao">
    <div class="mt-2 py-2">
        <section class="container py-2">
            <header class="col-md-12">
                <h1 class="text-center CorFontPersonal py-2">Área de Atuação</h1>
            </header>
            <!--Inclusão dos Cards-->
            <div class="card-deck">
                <div class="card sombra">
                    <img src="img/AreaAtuacao/Concorrencia.jpg" class="p-3 mb-5 bg-white rounded card-img-top" alt="">
                    <div class="card-body">
                        <h2 class="text-center py-2 CorFontPersonal">Concorrência</h2>
                        <p class="text-justify mt-2 pPersonal">A concorrência é a modalidade para contratação de bens e serviços especiais, além de obras e serviços comuns e especiais de engenharia. Os critérios de julgamento das propostas podem ser:
                        <ul>
                            <li class="pPersonal">Menor preço; </li>
                            <li class="pPersonal">Melhor técnica ou conteúdo artístico;</li>
                            <li class="pPersonal">Técnica e preço;</li>
                            <li class="pPersonal">Maior retorno econômico;</li>
                            <li class="pPersonal">Maior desconto</li>
                        </ul>
                        </p>
                    </div>
                </div>
                <div class="card sombra">
                    <img src="img/AreaAtuacao/Pregao.jpg" class="p-3 mb-5 bg-white rounded card-img-top" alt="">
                    <div class="card-body">
                        <h2 class="text-center py-2 CorFontPersonal">Pregão</h2>
                        <p class="text-justify mt-2 pPersonal"> Modalidade de licitação obrigatória para aquisição de bens e serviços comuns, cujo critério de julgamento poderá ser o de menor preço ou o de maior desconto. A disputa é feita por propostas e lances sucessivos. Exige um pregoeiro
                            e uma equipe de apoio.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <div class="card sombra">
                        <img src="img/AreaAtuacao/DialogoCompetitivo.jpg" class="p-3 mb-5 bg-white rounded card-img-top" alt="">
                        <div class="card-body">
                            <h2 class="text-center py-2 CorFontPersonal">Diálogo Competitivo</h2>
                            <p class="text-justify mt-2 pPersonal">É a modalidade que entrou em vigor recentemente com a Nova Lei de Licitações: <a href="http://www.planalto.gov.br/ccivil_03/_Ato2019-2022/2021/Lei/L14133.htm">Lei nº 14.133, de 1º de Abril de 2021</a>. Trata-se de uma modalidade
                                para contratação de obras, serviços e compras em que a administração pública realiza diálogos com os licitantes, os quais são selecionados previamente conforme alguns critérios estabelecidos. Seu objetivo é desenvolver
                                uma ou mais alternativas capazes de atender necessidades, de forma que os licitantes apresentem uma proposta final após o encerramento dos diálogos.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<!-- Sessão Parallax -->
<div class="container-fluid">
    <div class="py-4">
        <section class="container py-4">
            <header class="col-md-12">
                <h2 class="text-center CorFontPersonal">COZIIND</h2>
                <span class="underline CorFontPersonal"></span>
                <p class="text-center mt-2 pPersonal"> Fazendo História!</p>
            </header>
            <div class="row py-2 mt-5">
                <div class="col-sm-6 col-md-4 col-lg-4">
                    <div class="fatos">
                        <div class="icon">
                            <i class="fa fa-calendar-alt"></i>
                        </div>
                    </div>
                    <div class="fatos">
                        <h3>+ <span class="contar">50</span> anos</h3>
                        <h4>de experiência</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4">
                    <div class="fatos">
                        <div class="icon">
                            <i class="fas fa-trophy"></i>
                        </div>
                    </div>
                    <div class="fatos">
                        <h3>+ <span class="contar">200</span> Mi </i>
                        </h3>
                        <h4>Vendidos</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4">
                    <div class="fatos">
                        <div class="icon">
                            <i class="fas fa-warehouse"></i>
                        </div>
                    </div>
                    <div class="fatos">
                        <h3>+ <span class="contar">300</span></i>
                        </h3>
                        <h4>Unidades Beneficiadas</h4>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<!-- Inclusão de links externos-->
<?php include 'footer.php'; ?>