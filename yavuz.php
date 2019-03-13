<?php
/**
 * Created by PhpStorm.
 * User: yavuz
 * Date: 2019-03-13
 * Time: 15:16
 */

$tableaudeproduit = [
        'produit 1'=>['1', 'tst'],
        'produit 2'=>['nombreproduit' => '1', 'nomproduit' => 'tst', 'prix', 'lienversimage', 'alt' => 'mug'],
        'produit 3'=>['1', 'tst', 'prix', 'lienversimage'],
        'produit 4'=>['1', 'tst'],
        'produit 5'=>['1', 'tst']
];

include './menu.php';
?>

ytivzueybfind,s;lgrjfdkl,s

<?php

for($i=1;$i<=4;$i++){
    // Instruction Row
    echo '<div class="row">';

    foreach ($tableaudeproduit as $key => $value)
    {
        // Instruction produit
        // Code de la CARD html

        foreach ($value as $key2 => $details)
        {
            // Instruction détails produits
            echo '<img src="'.$lienimage.'" class="card-img-top" alt="'.$details['alt'].'">';

        }

        // Code fin card
    }
    // Instruction fin Row
    echo '</div>';

}
?>
