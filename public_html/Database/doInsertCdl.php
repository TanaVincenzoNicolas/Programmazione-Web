<?php
require_once 'database.php';
$pdo=dbConnect();

session_start(); 

$messaggiErrore = [];
if (!strlen($_POST['id_cdl']) >= 3) {
    $messaggiErrore['id_cdl'] = "L'id deve contenere almeno 3 caratteri ";
}
if (strlen($_POST['descrizione_cdl']) > 10) {
    $messaggiErrore['descrizione_cdl'] = "La descrizione può avere massimo 10 caratteri";
}

if (empty($messaggiErrore)) {
    $res = $pdo->prepare('INSERT INTO cdl VALUES (:id_cdl, :descrizione_cdl) ');
    $res->execute([	'id_cdl'      =>   $_POST['id_cdl'],   
    'descrizione_cdl' =>   $_POST['descrizione_cdl'] ]);
} else {
    $_SESSION['errori'] = $messaggiErrore;
    $_SESSION['OLDPOST'] = $_POST;
}

header('Location: insertCdl.php');  // in alcuni casi l'URL deve avere parametri GET
exit();  //  interrompo l'esecuzione dello script, per sicurezza ma potrebbe essere superfluo
?>