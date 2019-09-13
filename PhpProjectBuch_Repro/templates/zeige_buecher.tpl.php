<?php
require_once 'inc/functions.inc.php';
require_once 'inc/emulator.inc.php';
require_once 'src/Entities/Buch.php';

$buch = findeBuecher();
require_once 'templates/zeige_buecher.tpl.php';
?>