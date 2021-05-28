<h3>Agora é a sua vez</h3>

<p>Trabalhe com o array de camisetas. Passe o código do produto via URL, e use a variável $_GET para apresentar o nome do produto e os tamanhos disponíveis.</p>

<?php

$itens = array(
    'shirt_avg' =>  array(
        'nome' => 'Camiseta Avengers',
        'tamanhos' => array('XS', 'S', 'M', 'L', 'XL')
    ),
    'shirt_batman' =>  array(
        'nome' => 'Camiseta Batman',
        'tamanhos' => array('S', 'M', 'L', 'XL')
    ),
    'jacket_superman' =>  array(
        'nome' => 'Casaco Superman',
        'tamanhos' => array('M', 'L', 'XL', 'XXL')
    ),
);

?>

<?php print_r($_GET); ?>

<h4>Produto: </h4>



<h4>Tamanhos disponíveis: </h4>
<p>solte os tamanhos aqui</p>



</body>

</html>