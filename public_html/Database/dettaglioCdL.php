<?php
require_once 'database.php';
$pdo=dbConnect();

$res = $pdo->prepare('SELECT * FROM cdl WHERE id_cdl=? ');
$res->execute([$_GET["id_cdl"]]);
?>


<ul>
<?php
foreach($res as $cdl): ?>
   <li> <?=$cdl["id_cdl"]?>   -   <?=$cdl["descrizione_cdl"]?> </li>
<?php endforeach; ?>
</ul>