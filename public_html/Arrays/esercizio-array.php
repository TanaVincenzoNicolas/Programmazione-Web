<?php
//$giorni = array("lunedì","martedì","mercoledì");
$giorni = ["lunedì","martedì","mercoledì"];
//echo $giorni[1];
//print_r($giorni); //Mostra gli indici e il contenuto

//echo "<pre>";
//print_r($giorni);
//echo "<pre>";


//possiamo uscire dal php per mettere la tag pre, rientrare in php e poi riuscire per chidere pre
?>  
<pre>
<?php      
print_r($giorni);
?>
</pre>

<br>

<?php
$mesi[0] = "gennaio";
$mesi[1] = "febbraio";
$mesi[2] = "marzo";
$mesi[] = "aprile";
$mesi[] = "maggio";
$mesi[] = "giugno";

?> <pre> <?php

var_dump($mesi);

?> 

<ul> 
    <?php
    foreach ($mesi as $m) :
    ?> 
    <li>
        <?= $m ?>
    </li>
    <?php
    endforeach;
    ?> 
</ul> 

<?php

