<?php
# Nom du dossier images à renseigner
$dir = 'assets/galerie';
# Récupération et affichage de la liste des images sous forme de liste
$glob = plxGlob::getInstance($dir);

if ($files = $glob->query('/[a-z0-9-_]+.tb.(jpg|gif|png)$/i')) {
    echo '<ul class="galerie">';
    foreach($files as $filename) {
        $file = $dir.'/'.$filename;
        echo '<li><a href="'.str_replace('.tb', '', $file).'"><img src="'.$file.'" alt="" /></a></li>';
    }
    echo '</ul>';
}
else echo "Aucune image";
?>