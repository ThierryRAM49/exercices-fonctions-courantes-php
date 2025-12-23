<!-- Exercices PHP : Fonctions
courantes
1. Fonctions sur les chaînes de caractères
Exercice 1.1 – Longueur d'une chaîne
Objectif : Utiliser strlen()
Créez une variable $texte contenant une phrase de votre choix.
Affichez le nombre de caractères dans la chaîne.-->
<?php
$texte = "Bonjour tout le monde!";
echo strlen($texte);
?><br>

<!-- Exercice 1.2 – Mise en majuscules et minuscules
Objectif : Utiliser strtoupper() et strtolower()
À partir de la variable $texte , affichez la même phrase :
en majuscules
puis en minuscules.-->
<?php
echo strtoupper($texte)."<br>";
echo strtolower($texte);
?><br>

<!-- Exercice 1.3 – Rechercher un mot
Objectif : Utiliser strpos()
Créez une variable $phrase contenant une phrase avec plusieurs mots.
Recherchez si le mot "PHP" est présent dans la phrase.
Affichez la position si trouvé, ou un message s'il n'est pas trouvé.-->
<?php
$phrase = "Bonjour tout le monde!";
echo strpos($phrase, "PHP");
   echo("php n'est pas dans la phrase");
?><br>

<!-- Exercice 1.4 – Remplacer un mot
Objectif : Utiliser str_replace()
Dans la variable $phrase , remplacez le mot "difficile" par "facile" et affichez le
résultat.-->

<?php
$phrase = "difficile";
echo str_replace("difficile", "facile", $phrase);
?><br>

<!-- 2. Fonctions sur les nombres
Exercice 2.1 – Arrondi dʼun nombre
Objectif : Utiliser round() , floor() , ceil()
Créez une variable $nombre contenant une valeur décimale (ex. 3.75.
Affichez l'arrondi mathématique, l'arrondi inférieur et l'arrondi supérieur.-->
<?php
$nombre = 3.75;
echo round($nombre); 
echo floor($nombre);
echo ceil($nombre);
?><br>

<!-- Exercice 2.2 – Nombre aléatoire
Objectif : Utiliser rand()
Générez un nombre aléatoire entre 1 et 100.
Affichez ce nombre.-->
<?php
echo rand(1, 100);
?><br>

<!-- Exercice 2.3 – Formater un prix
Objectif : Utiliser number_format()
Créez une variable contenant un prix avec des décimales.
Affichez le prix au format  1 234,56 (utilisez une virgule comme séparateur
décimal et un espace pour les milliers).-->
<?php
$price = 1234.56;
echo number_format($price, 2, ",", " ");
?><br>

<!-- 3. Fonctions sur les booléens
Exercice 3.1 – Tester une variable vide
Objectif : Utiliser empty()
Créez une variable $valeur vide (ou contenant 0, false, ou une chaîne vide).
Testez si la variable est vide et affichez un message.-->
<?php
$valeur = "";
if (empty($valeur)) {
    echo "La variable est vide";
}
?><br>

<!-- Exercice 3.2 – Tester si une variable existe
Objectif : Utiliser isset()
Ne créez pas la variable $nom .
Testez si $nom est définie.
Affichez un message selon le cas.-->
<?php
if (isset($nom)) {
    echo "La variable est d&eacute;finie";  
} else {
    echo "La variable n'est pas d&eacute;finie";    
}
?><br>

<!-- Exercice 3.3 – Forcer un type booléen
Objectif : Utiliser (bool) ou boolval()
Créez différentes variables contenant : une chaîne non vide, 0, 1, une
chaîne vide.
Transformez-les en booléen et affichez le résultat avec var_dump() .-->
<?php
$variable1 = "Hello";
$variable2 = 0;
$variable3 = 1;
$variable4 = "";
echo boolval($variable1);
echo boolval($variable2);
echo boolval($variable3);
echo boolval($variable4);
echo var_dump($variable1);
echo var_dump($variable2);
echo var_dump($variable3);
echo var_dump($variable4);
?><br>

<!-- 4. Fonctions sur les tableaux
Exercice 4.1 – Compter les éléments
Objectif : Utiliser count()
Créez un tableau avec 5 prénoms.
Affichez le nombre dʼéléments dans le tableau.-->
<?php
$names = ["Johnny", "Jane", "Bob", "Alice", "Charline"];
echo count($names);
?><br>

<!-- Exercice 4.2 – Ajouter et supprimer
Objectif : Utiliser array_push() et array_pop()
Ajoutez un prénom à la fin du tableau.
Supprimez le dernier prénom ajouté.-->

<?php
$names = ["Johnny", "Jane", "Bob", "Alice", "Charline"];
array_push($names, "John");
// afficher le tableau
echo "<pre>";
print_r($names);
echo "</pre>";
array_pop($names);
// afficher le tableau
echo "<pre>";
print_r($names);
echo "</pre>";
?><br>


<!-- Exercice 4.3 – Trier un tableau
Objectif : Utiliser sort()
Créez un tableau avec plusieurs prénoms.
Triez le tableau dans lʼordre alphabétique.
Affichez le tableau trié avec print_r() dans une balise <pre> .-->
<?php
$names = ["Jacky", "julie", "Maryse", "Adam", "Charlie"];
sort($names);
// afficher le tableau
echo "<pre>";
print_r($names);
echo "</pre>";
?><br>

<!-- Exercice 4.4 – Rechercher dans un tableau
Objectif : Utiliser in_array()
Vérifiez si le prénom "Marie" est présent dans le tableau.
Affichez un message selon le cas.-->
<?php
$names = ["Marie", "Jacky", "julie", "Maryse", "Adam", "Charlie"];
if (in_array("Marie", $names)) {
    echo "Marie est dans le tableau";
} else {
    echo "Marie n'est pas dans le tableau";
}
?><br>


