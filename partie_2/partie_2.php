<?php

// PARTIE 2 du cours PHP POO 

//-----------------------Facture-----------------------
// class Verre {
//     public $nom;
//     public $materiaux;
//     public $contenu;

//     function __construct($nom, $materiaux, $contenu) {

//         $this->nom = $nom;
//         $this->materiaux = $materiaux;
//         $this->contenu = $contenu;
//     }
// }

// $gobletEau= new Verre("Goblet","platisque","eau");

//-----------------------Voiture-----------------------

// class Voiture {
//     public $modele;
//     public $couleur;

//     function __construct($modele, $couleur) {

//         $this->modele = $modele;
//         $this->couleur = $couleur;
//         echo "Une $this->modele $this->couleur  a été créée";
//     }
// }

// $pagani= new Voiture("Pagani Zonda","grise");

//-----------------------Chicken-----------------------

// class Chicken {

//     function __clone() {
//         echo "<p> Objet cloner </p>";
//     }
//     function __destruct() {
//         echo "<p> Objet détruit </p>";
//     }
//     function __construct() {
//         echo "<p> Objet créer </p> ";
//     }
// }

// $nugget= new Chicken();
// $nugget2= clone $nugget;

//-----------------------Tshirt-----------------------

// class Tshirt1 {

//     public $name;

//     function __construct($name) {
//         $this->name= $name;
//         echo "<p>$this->name</p>";
//     }
// }
// // Tshirt pas secure
// $diesel = new Tshirt1("diesel");
// $fauxDiesel =$diesel;
// echo $fauxDiesel->name;

// echo "<hr>";
// $diesel->name ="diesel2";
// echo $diesel->name;
// echo "<br>";
// echo "Objet fauxDiesel: ".$fauxDiesel->name;
// echo "<br>";
// $fauxDiesel->name ="diesel 3";
// echo "<br>";
// echo "Objet diesel: ".$diesel->name;
// echo "<br>";

// class Tshirt {

//     public $name;
//     public $copie ;

//     function __construct($name) {
//         $this->name= $name;
//         echo "<p>$this->name</p>";
//     }
//     function __clone() {
//         $this->copie = "je suis une Copie";
//         echo "<p>$this->copie</p>";
//     }
// }

// $kalenji = new Tshirt("kalenji");

// $fauxKalenji = clone $kalenji;

// $diesel = new Tshirt("diesel");

// $fauxDiesel =$diesel ;

// echo $fauxDiesel->copie;

// Tshirt sécure déclenche la methode magique clone multiples applications possibles
// Mais la manque d'inspiration...

//-----------------------Class D -----------------------
// ------------CLONAGE 

// Comprendre la nuance sur un exercice simple

// class D {
//     public $name;
// }

// $objA = new D();
// $objA->name = "Original A";
// $objB= $objA;
// //Avant
// echo "<p>var ObjetA = $objA->name</p>"; // var ObjetA = Original A
// echo "<p>var ObjetB = $objB->name</p>"; // var ObjetB = Original A

// $objA->name = "Alpha";
// //Après
// echo "<p>var ObjetA = $objA->name</p>"; // var ObjetA = Alpha
// echo "<p>var ObjetB = $objB->name</p>"; // var ObjetB = Alpha

// $objB->name = "5.20"; //on modifie l'objet B
// //Dans l'autre sens ?
// echo "<p>var ObjetA = $objA->name</p>"; // ???
// echo "<p>var ObjetB = $objB->name</p>"; // ???


// $origine = new D();
// $origine->name = "Origine";
// $copie= clone $origine;

// // //Avant
// // echo "<p>var Origine = $origine->name</p>"; // var Origine = Origine
// // echo "<p>var Copie = $copie->name</p>"; // var Copie = Origine

// $origine->name = "Agent 47";
// // //Après
// echo "<p>var Origine = $origine->name</p>"; // var Origine = Agent 47
// echo "<p>var Copie = $copie->name</p>"; // var Copie = Origine


// $copie->name = "Agent 007";
// //Enfin
// echo "<p>var Origine = $origine->name</p>"; // var Origine = Agent 47
// echo "<p>var Copie = $copie->name</p>"; // var Copie = Origine


//-----------------------Class Pomme Poire-----------------------

// class Pomme {
//     public $name;
//     function __construct($name){
//          $this->name= $name; 
//         }
// }

// $objet1= new Pomme("Pomme granny");
// // $objet2= $objet1;
// $objet2= new Pomme("Pomme golden");
// // Identiques en valeurs ect == ou ===

// if ($objet1 == $objet2)
// echo '$objet1 et $objet2 sont identiques !';
// else
// echo '$objet1 et $objet2 sont différents !';

// // Instance of  renvoi true sur l'instance comparé est bonne sinon false

// if ($origine instanceof Pomme) 
// echo "$origine->name est une instance de Pomme <br>";
// else 
// echo "$origine->name n'est pas une instance de Pomme <br> ";



//-------------Pourquoi INSTANTEOF et pas que == === |-----

// class Poire {
//     public $name;
//         function __construct($name) {
//         $this->name= $name;
//     }
// }

// class Pomme {
//     public $name;
//     function __construct($name){
//          $this->name= $name; 
//         }
// }

// $poire= new Poire("Poire");
// $pomme= new Pomme("Pomme");

// // les == ou === nous donnent la différences entre les objets et classe 
// // Mais ne permet pas de savoir si un objet est une instance de tel classe
// // Sauf par un des moyen détournés et laborieux d'ou le instance of

// if ($poire == $pomme)
// echo "$poire->name  $pomme->name <strong>IDENTIQUES</strong> <br>";
// else 
// echo "$poire->name  $pomme->name <strong>DIFFERENTS</strong> <br>";

