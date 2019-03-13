<!doctype html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
          crossorigin="anonymous">
    <link rel=stylesheet href="./style.css">
    <title>Wild bazar</title>
</head>

<body>
<?php
/**
 * Created by PhpStorm.
 * User: yavuz
 * Date: 2019-03-13
 * Time: 15:16
 */

$tableaudeproduit = [
    'produit 1'=>['nbproduit' => 1, 'nomproduit' => 'Produit 1', 'prix' => 10 , 'lienversimage' => 'https://www.ouestfrance-emploi.com/sites/default/files/styles/610-largeur/public/fiches_metiers/421_132048829.jpg?itok=t0RGTR-X', 'alt' => 'mug'],
    'produit 2'=>['nbproduit' => 1, 'nomproduit' => 'Produit 1', 'prix' => 10 , 'lienversimage' => 'https://www.ouestfrance-emploi.com/sites/default/files/styles/610-largeur/public/fiches_metiers/421_132048829.jpg?itok=t0RGTR-X', 'alt' => 'mug'],
    'produit 3'=>['nbproduit' => 1, 'nomproduit' => 'Produit 1', 'prix' => 10 , 'lienversimage' => 'https://www.ouestfrance-emploi.com/sites/default/files/styles/610-largeur/public/fiches_metiers/421_132048829.jpg?itok=t0RGTR-X', 'alt' => 'mug'],
    'produit 4'=>['nbproduit' => 1, 'nomproduit' => 'Produit 1', 'prix' => 10 , 'lienversimage' => 'https://www.ouestfrance-emploi.com/sites/default/files/styles/610-largeur/public/fiches_metiers/421_132048829.jpg?itok=t0RGTR-X', 'alt' => 'mug']

];

// Voir le contenu de la variable

// Début container fluid
echo '<div class="container-fluid">';

for($i=1;$i<=4;$i++){
    // Instruction Row
    echo '<div class="row">';

    foreach ($tableaudeproduit as $key => $value)
    {
        // Instruction produit
        // Code de la CARD html
        echo'<div class="col-3">';
            echo'<div class="card cartes">';
                foreach ($value as $key2 => $details)
                {
                    // Instruction détails produits
                    echo'<img src="'.$value['lienversimage'].'" class="card-img-top" alt="Mug">';
                    echo'<div class="card-body">';
                        echo'<p class="cartes">'.$value['nomproduit'].'<br><span class="price">'.$value['prix'].'</span></p>';
                    echo'</div>';

                }
            echo'</div>';
        echo'</div>';
        // Code fin card
    }
    // Instruction fin Row
    echo '</div>';

}
// fin container fluid
echo '</div>';
?>
</body>
</html>