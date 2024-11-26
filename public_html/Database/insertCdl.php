<?php
//error_reporting
session_start(); // serve sempre se vogliamo accedere alle variabili di sessione

// valori precedentemente inviati dall'utente
$id = $_SESSION['OLDPOST']['id_cdl'];
$desc = $_SESSION['OLDPOST']['descrizione_cdl'];

// messaggi di errore
$idErr = $_SESSION['errori']['id_cdl'];
$descErr = $_SESSION['errori']['descrizione_cdl'];

?>

<form action="doInsertCdl.php"  method="post">
	Id CdL 	    <input type="text" name="id_cdl" value="<?=$id?>">  
                <?=$idErr?> <br>
	Descrizione <input type="text" name="descrizione_cdl" value="<?=$desc?>">
                <?=$descErr?> <br>
	<input type="submit">

</form>

