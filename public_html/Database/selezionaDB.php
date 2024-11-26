<?php
// prende il file in directory differenti
// define('__ROOT__', dirname(dirname(__FILE__)));
// require_once(__ROOT__.'/Database/db_connect.php');

// prende il file nella stessa directory
require_once 'database.php';
$pdo=dbConnect();

// eseguire la query di inserimento
$res = $pdo->query('SELECT * FROM cdl');
?>

<table>
<tr>
   <th>Id</th>
   <th>Descrizione</th>
</tr>
<?php
foreach($res as $cdl): ?>
<tr>
   <td> <?=$cdl["id_cdl"]?> </td>
   <td>        
        <a href="dettaglioCdL.php?id_cdl=<?=$cdl["id_cdl"]?>">
           <?=$cdl["descrizione_cdl"]?>
       </a>
   </td>
</tr>
<?php endforeach; ?>
</table>