<!-- Inclusão de links externos-->
<?php include 'header.php'; ?>

<?php include 'ProdutosSelecionados.php'; ?>

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
                <?php foreach ($produtos as $item) { ?>
                    <div class="col-md-4">
                        <div class="card sombra mb-3">
                            <img src=" <?php echo $item['imgProduto']; ?> " class="img-fluid mx-auto d-block" alt="" title="<?php echo $item['Title']; ?>">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $item['NomeProduto']; ?></h5>
                                <!-- Botão para acionar modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="<?php echo $item['data-target']; ?>">
                                    Informações para Aquisição
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="<?php echo $item['id_modal']; ?>" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
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
                                                            <th scope="col" class="text-center">Valor Unitário:</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th> <?php echo $item['id']; ?> </th>
                                                            <th> <?php echo $item['Pregao']; ?> </th>
                                                            <th> <?php echo $item['UASG']; ?> </th>
                                                            <th> <?php echo $item['Item']; ?> </th>
                                                            <th> <a href="<?php echo $item['urlCatalogo']; ?>"><?php echo $item['Modelo']; ?></a></th>
                                                            <th> <?php echo $item['ValorUnitário']; ?> </th>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </section>
    </div>
</div>
<!-- Inclusão de links externos-->
<?php include 'footer.php'; ?>