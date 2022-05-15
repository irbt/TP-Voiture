<?php

// PARTIE 1 du cours PHP POO CLASSES OBJETS 

// ---------------------------------------------------
// //Conversion d'un tableau en objet

// $tab['couleur'] = "bleu";
// $tab['type'] = "plume";
// $tab['prix']= 5;

// $stylo = (object) $tab;
// // var_dump aussi comme un array
// print_r($stylo);

// echo get_class($stylo);

// ---------------------------------------------------
//Création d'objet par inférence

//décommenter en dessous pour retirer le warning
// $voiture = new stdClass;

// $voiture->couleur= "bluge";

// print_r($voiture) ;

// ---------------------------------------------------
// Création d'un objet par instanciation

// $ballonFoot = new stdClass();

// $ballonFoot->marque="Nike";
// $ballonFoot->type="Football";
// $ballonFoot->taille=5;
// $ballonFoot->status= "crevé";


// echo " - Hey le ballon de $ballonFoot->type, $ballonFoot->marque est $ballonFoot->status, Ismaël ! 
//         <br><br> - C'était un taille $ballonFoot->taille, Isaac c'est ça ? ";


// // ---------------------------------------------------
// // Quelques fonctions sur les objets
// echo "<br><br><hr>";

// // property_exists($ballonFoot, 'prix') 
// // retourne un boolean si la props existe ou non 
// // attention un echo ne renvoie rien en cas de false

// // Ok on sait qu'elle n'existe pas...
// // var_dump( property_exists($ballonFoot, 'prix') );

// if(!property_exists($ballonFoot, 'prix')){

//     $ballonFoot->prix = 5;
//     echo "Le ballon coute $ballonFoot->prix €";
// }


// // echo "<br><br><hr>";
// // affiche le tableau de toutes les propriétes de l'objet
// // var_dump(get_object_vars($ballonFoot ));

// echo "<br><br><hr>";
// // Affiche le nom de la class de l'objet
// echo get_class($ballonFoot) ;

// echo "<br><br><hr>";
// // Maintenant qu'on a le nom 
// //Affiche props et methods de la class 
// var_dump(get_class_vars('stdClass')) ;
// var_dump( get_class_methods('stdClass')) ;

// echo "<br><br><hr>";

//à titre d'information
// var_dump( get_declared_classes () );

// ---------------------------------------------------

//Créer une class 

//-----------------------BALLON-----------------------
// class Ballon {

//     public $marque;
//     public $sport;

//     function lancer($distance = null) {
//       echo "Vous avez lancé le ballon à ".$distance ." métres";
//     }

//   }


// // On instancie 2 types de ballons
// //---------Ballon de Foot-----------
// $ballonFoot = new ballon();// Instanciation
// $ballonFoot->marque ="Nike";// On assigne la valeur de la props
// $ballonFoot->sport ="FootBall";
// //---------Ballon de Rugby-----------
// $ballonRugby = new ballon();
// $ballonRugby->marque ="Gilbert TM";
// $ballonRugby->sport ="Rugby";

// // Actions sur les objets
// echo "Sport: $ballonFoot->sport <br> Marque : $ballonFoot->marque";
// echo "<br>";
// $ballonFoot->lancer(50);

// echo "<br><br><hr>";

// echo "Sport: $ballonRugby->sport <br> Marque : $ballonRugby->marque";
// echo "<br>";
// $ballonRugby->lancer();


// class BallonNike {

//     public $marque= "Nike"; //MArque par défaut donc classe Nike
//     public $sport;

//     function lancer($distance = 289) {
//       echo "Vous avez lancé le ballon à ".$distance ." métres";
//     }

//   }

// $ballonHand = new ballonNike();// Instanciation
// $ballonHand->sport ="Handball";// On assigne la valeur de la props
// // On ne précise plus la marque

//-----------------------USER-----------------------

//custom ça , on vois encapsulation après props en public partout
// methode tchater Untel dit : $message . br 
// tchater prend en param un message qui sera afficher 
// methode smile une smiley html windows + point
// donc avec deux User deux nom deja on fait une discusion 

// class User {

//     public $nom;
//     public $age;

//     function tchater($message) {
//         echo " - ".$message ."<br><br>";
//     }

// }

// $michel = new User(); // on instancie un objet michel
// $michel->age = 49; // assigne un age 
// $michel->nom = "Michel"; // Oui l'objet michel pas la props



// echo $michel->tchater("$michel->nom: Salut les devs FULL-STEACK !"); // Une propriété dans un argument d'une méthode

// // -----------------BONUX----CUT-SCENES------------------
// $moi = new User(); 
// $moi->age = 2; 
// $moi->nom = "Personne";

// $mereMichel = new User(); 
// $mereMichel->age = 87; 
// $mereMichel->nom = "LA Mère Michel";

// echo $michel->tchater("$moi->nom: Ta mère Michel ...");
// echo "- $mereMichel->nom  a rejoins la discussion";
// echo "<br><br><hr>";
// echo "- $moi->nom  a quitté la discussion";

//-----------------------Facture-----------------------
// class Facture {

//     public $client;
//     public $montant;
//     public $taux = 35;

//     function afficherTaux() {
//         echo "Taux: ".$this->taux ."% <br>";
//     }
// }

// $factureFevrier = new Facture();

// $factureFevrier->afficherTaux();

//-----------------------Table-----------------------
// class Table {

//     public $pieds = 4;
//     function infos(){
//         echo $this->pieds;
//     }
// }

// $tableCuisine= new Table();
// $tableBasse= new Table();
// $tableBasse->pieds = 2;
// echo $tableBasse->infos();
// echo "<br>";
// echo $tableCuisine->infos();

// echo $this->pieds; // Fatal error En dehors de la classe,
                  // this de qui,de quoi michel ? Pieds de d'une personne,table,chaise...?
// echo $tableCuisine->$this->pieds; // Fatal error
// echo $tableCuisine->$this->infos();// Fatal error 


//-----------------------USER V2-----------------------
// Faire exercice User sur fichier à part

