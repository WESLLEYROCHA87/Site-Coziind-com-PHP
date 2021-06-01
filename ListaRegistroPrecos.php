<h4>Array</h4>

<?php
$produto = array(
    array(
        "Produto" => "Lava Louça",
        "Cod" => "17",
        "Pregao" => "6/2020",
        "UASG" => "160120",
        "Item" => "49",
        "Modelo" => "PRCOP-504",
        "Qtde" => "49",
        "ValorUnitario" => "R$ 9.900,00"
    ),
    array(
        "Produto" => "Descascador",
        "Cod" => "32",
        "Pregao" => "14/2020",
        "UASG" => "160186",
        "Item" => "49",
        "Modelo" => "DB-25HD-N + CC-25HD",
        "Qtde" => "13",
        "ValorUnitario" => "R$ 7.575,00"
    ),
    array(
        "Produto" => "Carro de Transporte",
        "Cod" => "81",
        "Pregao" => "1/2020",
        "UASG" => "160198",
        "Item" => "35",
        "Modelo" => "3 PLANOS",
        "Qtde" => "42",
        "ValorUnitario" => "R$ 375,00"
    )
);
?>

<table>
    <thead>
        <tr>
            <th>Produto</th>
            <th>Cod</th>
            <th>Pregao</th>
            <th>UASG</th>
            <th>Item</th>
            <th>Modelo</th>
            <th>Qtde</th>
            <th>Valor Unitario</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($produto as $valor) { ?>
            <tr>
                <td><?php echo $valor['Produto']; ?></td>
                <td><?php echo $valor['Cod']; ?></td>
                <td><?php echo $valor['Pregao']; ?></td>
                <td><?php echo $valor['UASG']; ?></td>
                <td><?php echo $valor['Item']; ?></td>
                <td><?php echo $valor['Modelo']; ?></td>
                <td><?php echo $valor['Qtde']; ?></td>
                <td><?php echo $valor['ValorUnitario']; ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>