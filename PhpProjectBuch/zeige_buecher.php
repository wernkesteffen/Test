<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <titel>Bücherliste</titel>
    </head>
    
    <body>
        <?php foreach ($buecher as $buch):?>;
        <?php require 'buch.tpl.php';?>
        <?php endforeach;?>
       // <h2 class="titel"><?= bereinige($buch->getTitel())?></h2>
       // <p class="preis"><?= (float)$buch->getPreis()?></p>
    </body>
</html>