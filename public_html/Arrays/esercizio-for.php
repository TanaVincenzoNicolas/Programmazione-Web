<!--  
    for ($i=1; $i <= 10; $i++) {
        echo "$i <br>";     //Senza usare il . perchè la variabile viene castata direttamente in stringa
    }
-->

<?php
    for ($i=1; $i <= 10; $i++) :
?>
        Numero <?= $i ?> <br>
<?php
endfor;
?>
