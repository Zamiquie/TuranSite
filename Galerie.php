<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Titre de la page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css.css">

</head>
<body>
<div class="container gallery-container">

    <div class ="tz-gallery">
        <div class="row">
            <?php
            $dir_nom = 'assets/galerie'; // dossier listé (pour lister le répertoir courant : $dir_nom = '.'  --> ('point')
            $dir = opendir($dir_nom) or die('Erreur de listage : le répertoire n\'existe pas'); // on ouvre le contenu du dossier courant
            $fichier= array(); // on déclare le tableau contenant le nom des fichiers

            while($element = readdir($dir)) {
                if($element != '.' && $element != '..') {
                    if (!is_dir($dir_nom.'/'.$element)) {$fichier[] = $element;}
                else {$dossier[] = $element;}
                }
            }
            closedir($dir);
            if(!empty($fichier)){
                sort($fichier);// pour le tri croissant, rsort() pour le tri décroissant
                //echo "<p>Liste des images accessibles sur l'hebergeur : \n\n</p>";
                foreach($fichier as $lien) {
                    echo "<div class=\"col-sm-6 col-md-4\"><a class=\"lightbox\" href=\"$dir_nom/$lien \"><img src=\"$dir_nom/$lien \" width=\"305\" height=\"25\" alt=\"Park\"></a></div>";
                }
            }
            ?>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>
</body>
</html>



