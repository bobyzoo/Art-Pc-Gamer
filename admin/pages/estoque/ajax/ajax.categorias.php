
<thead>
<tr>
    <th>ID</th>
    <th>Nome</th>
</tr>
</thead>
<tfoot>
<tr>
    <th>ID</th>
    <th>Nome</th>
</tr>
</tfoot>
<tbody >
<?php
require_once "../../../../class/produtos.php";
$prod = new produtos();
foreach ($prod->selectCategorias() as $product){
    echo "<tr>";
    echo "<td>";
    echo $product->id;
    echo "</td>";
    echo "<td>";
    echo $product->nome;
    echo "</td>";
    echo "</tr>";
}
?>
</tbody>

