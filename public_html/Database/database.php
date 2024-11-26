<?php
$host = 'lamp';
$db   = 'db_s3229272';
$user = 's3229272';
$pass = '!DukeDullisck';
$port = "3306";
$charset = 'utf8mb4';

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
$dsn = "mysql:host=$host;dbname=$db;charset=$charset;port=$port";

function dbConnect() {
    //try {
        //$pdo = new PDO($dsn, $user, $pass, $options);
    //} catch (PDOException $e) {
        //exit('Errore connessione');
                //      throw new PDOException($e->getMessage(), (int)$e->getCode());
        // throw $e;
    //}
    $pdo=new PDO("mysql:host=lamp;dbname=db_s3229272;charset=utf8mb4;port=3306", "s3229272", "!DukeDullisck");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
return $pdo;
}

function getElencoCdl() {
	$pdo = dbConnect();
	$res = $pdo->query('SELECT * FROM cdl');
	return $res;
}

function printCdlTable() {
    $res = getElencoCdl();
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
    <td> <?=$cdl["descrizione_cdl"]?> </td>
    </tr>
    <?php endforeach; ?>
    </table>

    <?php  
}


//$r = getElencoCdl();
//printCdlTable($r);

// printCdlTable(getElencoCdl());
?>