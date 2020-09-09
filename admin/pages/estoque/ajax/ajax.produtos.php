
<thead>
<tr>
    <th>ID</th>
    <th>Categoria</th>
    <th>Descrição do produto</th>
    <th>valor</th>
</tr>
</thead>
<tfoot>
<tr>
    <th>ID</th>
    <th>Categoria</th>
    <th>Descrição do produto</th>
    <th>valor</th>
</tr>
</tfoot>
<tbody >
<?php
require_once "../../../../class/produtos.php";
$prod = new produtos();
foreach ($prod->select() as $product){
echo "<tr>";
    echo "<td>";
    echo $product->id;
    echo "</td>";
    echo "<td>";
    echo $product->nome;
    echo "</td>";
    echo "<td>";
    echo $product->desc_produto;
    echo "</td>";
    echo "<td>";
    echo $product->valor;
    echo "</td>";
echo "</tr>";
}
?>
</tbody>

