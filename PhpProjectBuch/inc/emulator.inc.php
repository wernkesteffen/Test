<?php
// Selct * From Buecher

function findeBuecher(){
    $buecher = [];
    $buecher[] = new Buch(
            [
                'titel' => 'Der Graf von ...',
                'preis' => 9.99
            ]
            );
    $buecher[] = new Buch(
            [
                'titel' => 'Alien ...',
                'preis' => 13.99   
            ]
            );
    return $buecher;
} 
function findeBuch($id) {
    $buecher = findeBuecher();
    $buch = null;
    if(isset($buecher[$id])){
        $buch = $buecher[$id];
    }
    return $buch;
}
?>
