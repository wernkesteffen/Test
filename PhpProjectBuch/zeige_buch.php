<?php
require_once 'inc/functions.inc.php';
require_once 'inc/emulator.inc.php';
require_once 'src/Entities/Buch.php';

$buch = findeBuch(0);
require_once 'templates/zeige_buch.tpl.php';
?>