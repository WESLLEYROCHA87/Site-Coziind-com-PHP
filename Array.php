<h3>Agora é a sua vez</h3>

<p>Trabalhe com o array de camisetas. Passe o código do produto via URL, e use a variável $_GET para apresentar o nome do produto e os tamanhos disponíveis.</p>

<?php

$itens = array(

    'shirt_avg' =>  array(
        'nome' => 'Camiseta Avengers',
        'tamanhos' => array(
            'Registro1' => array(
                '18', '14/2020', 'DB-25HD-N',
                '13', '15/2020', 'GPC-57-BR'
            )
        )
    ),

    'shirt_batman' =>  array(
        'nome' => 'Camiseta Batman',
        'tamanhos' => array(
            'Registro1' => '17', '6/2020', 'PRCOP-504',
            'Registro2' => '32', '14/2020', 'DB-25HD-N + CC-25HD'
        )
    )
);

?>

<pre><?php print_r($itens); ?></pre>
<?php echo $itens[$_GET['id']]['nome']; ?>

<?php $tamanhos =  $itens[$_GET['id']]['tamanhos']; ?>


<pre>
    <?php foreach ($tamanhos as $registro => $valor) {
        var_dump($valor);
    }; ?>
 </pre>

<br>
<hr>
<br>

<?php

while (key($valor) !== null) {
    echo " " . current($valor);
    next($valor);
};

?>


<hr>
<h4>Tabela:</h4>
<br>
<table>
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Pregão</th>
            <th scope="col">Modelo</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <?php while (key($valor) !== null) {
                echo current($valor);
                next($valor);
            };
            ?>
        </tr>
    </tbody>
</table>

<br>
<hr>


</body>

</html>