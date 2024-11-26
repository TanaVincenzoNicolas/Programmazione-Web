<?php
if (!array_key_exists("numvisite",$_COOKIE)){
    $numvisiteprecedenti = 0;
} else {
    $numvisiteprecedenti = (int) $_COOKIE["numvisite"];
}
setcookie("numvisite", $numvisiteprecedenti + 1);

session_start();
if (!array_key_exists("numvisite",$_SESSION)) {
    $contatore = 0;
} else {
    $contatore = (int) $_SESSION["numvisite"];
}
$_SESSION["numvisite"] = $numvisiteprecedenti + 1;

if ($numvisiteprecedenti == 0){
?>

Benvenuto, questa è la tua prima visita!

<?php
} else {
?>

Bentornato, questa è la tua visita n. <?=$numvisiteprecedenti + 1?>

<?php
}
?>