<h1>Coucou</h1>
<?php
$a = false;
$b = 12;
$c = 12.5;
$chaine = "Ceci est une chaine de caractère";

echo "<p>".$chaine."</p>";

echo "<p>Bonjour voici la valeur de la variable chaine : {$chaine}</p>";

echo "<p class=\"title\">La valeur est $chaine</p>";

echo '<p>La valeur est $chaine</p>';
//TAbleau 1 dimension indice/valeur
$arrayHomme = array("Brice", "Loup", "Antoine", "Jules", 12);
$arrayFemme = ["Marion", "Sylvie", "Chantal"];
var_dump($arrayHomme);
echo "<p>{$arrayHomme[2]}</p>";
$arrayHomme[] = "Lukas";
var_dump($arrayHomme);

// Tableau 1 dimension clef/valeur
$arrayFruits = [
   "F" => "Fraise",
   "A" => "Abricot",
   "P" => "Pomme"
];
var_dump($arrayFruits);
echo "<p>{$arrayFruits["F"]}</p>";
$arrayFruits["k"] = "Kiwi";
var_dump($arrayFruits);

foreach ($arrayFruits as $index => $fruit){
    echo "<li>Le fruit /{$index}/ est {$fruit}</li>";
}
/* Exercice :  Créer un tableau $mois :
- Clef = Nom du mois
- Valeur = nb jour du mois

$mois = array(
    "Janvier" => 31,
    "Février" => 28,
    "Mars" => 31,
    "Avril" => 30,
    "Mai" => 31,
    "Juin" => 30,
    "Juillet" => 31,
    "Août" => 31,
    "Septembre" => 30,
    "Octobre" => 31,
    "Novembre" => 30,
    "Décembre" => 31
);

echo "<table border='1'>
        <tr>
            <th>Mois</th>
            <th>Nombre de jours</th>
        </tr>";

foreach ($mois as $nomMois => $nbJours) {
    echo "<tr>
            <td>$nomMois</td>
            <td>$nbJours</td>
          </tr>";
}

echo "</table>";
