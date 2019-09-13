<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <titel> Eintrag anlegen</titel>
    </head>
    <body>
        <ul id="navi">
            <li><a href="liste.php">Startseite</a></li>
            <li><a href="neu.php">Buch anlegen</a></li>
        </ul>
        <form action="neu.php" method="Post">
            <input type="text" name="titel" id="titel" placeholder="Titel">
            <input type="text" name="preis" id="preis" placeholder="Preis">
            <input type="Submit" value="Speichern">
        </form>
    </body>
</html>