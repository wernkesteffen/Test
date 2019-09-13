<?php
require_once 'inc/functions.inc.php';
require_once 'src/Entities/Buch.php';
$buecher = findeBuecher();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <titel>Buch anzeigen</titel>
    </head>
    <body>
        <ul id="navi">
            <li><a href="liste.php">Startseite</a></li>
            <li><a href="neu.php">Buch anlegen</a></li>
        </ul>
        <ul>
            <?php foreach($buecher as $id => $buch):?>
            <li>
                <a href="zeige.php?id=<?=(int)$id?>"><?=bereinige($buch->getTitel())?></a>
            </li>
            <?php endforeach;?>
        </ul>
        <form action="neu.php" method="Post">
            <input type="text" name="titel" id="titel" placeholder="Titel">
            <input type="text" name="preis" id="preis" placeholder="Preis">
            <input type="Submit" value="Speichern">
        </form>
    </body>
</html>