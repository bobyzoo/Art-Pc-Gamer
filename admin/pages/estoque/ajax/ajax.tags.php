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
foreach ($prod->selectTags() as $tag){
    echo "<tr>";
    echo "<td>";
    echo $tag->id;
    echo "</td>";
    echo "<td>";
    echo $tag->nome;
    echo "</td>";
    echo "</tr>";
}
?>
</tbody>

