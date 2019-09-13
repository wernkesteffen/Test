<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <titel>First MVC</titel>
    </head>
    <body>
        <h2 class="titel"><?= bereinige($buch->getTitel())?></h2>
        <p class="preis"><?= (float)$buch->getPreis()?></p>
    </body>
</html>