<?php

require('repertoire.php');


echo "Parcours du Répertoire <br>";
foreach ($Repertoire as $contact) {
    echo $contact['nom'] . ' '  .  $contact['prenom'] . ' '  ;
    echo "réside à " . $contact['ville']  . "<br>";
}


echo (count($Repertoire));


echo "Parcours du Répertoire avec affichage d'un tableau  <br>";
echo "<table> 
  <tr>
    <th>Nom</th>
    <th>Prénom</th>
    <th>Ville</th>
  </tr>";

foreach ($Repertoire as $contact) {
    echo " <tr>";
    echo "<td> " .$contact['nom'] ." </td>";
    echo "<td> " .$contact['prenom'] ." </td>";
    echo "<td> " .$contact['ville'] ." </td>";
    echo "</tr>";

}
echo "</table> ";

// TP 1 suite : fonctions
function SePresenter(string $nom, string $prenom): string
{
    if (!empty($nom) && !empty($prenom)) {
        $presentation  = "Je m'appelle $prenom $nom <br>";
    }
    else {
        $presentation  = "ERREUR il manque un paramètre <br>";
    }
    return $presentation;
}
echo SePresenter("Joe", "Biden");
echo SePresenter("Joe", "");



function AfficheDatecourante (): void
{
  echo "nous sommes le " . date('D j M Y ') . "<br>";
}

echo "function AfficheDatecourante <br>";
AfficheDatecourante();


function CalculerSurface(float $largeur, float $longueur ): float
{
    $surface = 0.0 ;
    if ($largeur > 0 && $longueur > 0 )  {
        $surface = $largeur * $longueur;
    } else {
        echo "Erreur dans les paramètres : largeur ou longueur doivent être > 0";
    }
    return round($surface,3);
}
$larg = 2.5568;
$long = 10.564;
 echo "test fonction CalculerSurface  avec largeur $larg et longueur $long <br>";
 echo CalculerSurface($larg, $long);



