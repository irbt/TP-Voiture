<?php

// infodev()

class Voiture{
    public $marque;
    public $modele;
    public $couleur;
    public $prix;
    public $chevaux;

    


function __construct($marque,$modele,$couleur,$prix,$chevaux)
{
    $this->marque = $marque;
    $this->modele = $modele;
    $this->couleur = $couleur;
    $this->prix = $prix;
    $this->chevaux = $chevaux;


}
function infosDev(){
    echo "Class Name : <strong>".get_class($this). "</strong><br>";
    echo "<strong>".count(get_object_vars($this))." Propiétés |</strong> ";
    echo "<strong>".count(get_class_methods($this))." Methods |</strong> <hr><br>";
    
    
    foreach(get_object_vars($this) as $item => $i) {
        echo "Propriété: <strong>".$item."</strong> | Valeur: <strong>".$i."</strong><br>";
    }
    
    foreach(get_class_methods($this) as $item => $i) {
        echo "Méthode: <strong>".$i."</strong><br> ";
    }
}
    function getPicture($string){
        echo '<br><img width=400px src="img/'.$string. '.jpg"alt="image"><br><br>';
    }

    function seDeplacer($int){
    echo "Je me déplace à ".$int."km/h <br> ";
    }
    
    
    function klaxonner($string){
    echo "Klaxon : ".$string." ".$string."<br>";
    }
    
    
}





// ----------------Création  de l'entrepot de données ------------------
$pagani = new Voiture ("Pagani","Zonda","noir",340000,750);
$bugatti = new Voiture ("Bugatti","Chiron","Bleu Nuit",2340506,1500);
$ferrari = new Voiture ("Ferrari","SF90","rouge",340000,1000);

// --------------------------Actions de notre application / Controle sur les objets  ------------------

// Pagani

$pagani->seDeplacer(240);
$pagani->infosDev();
$pagani->getPicture("pagani");
$pagani->klaxonner("proutt");

// Bugatti

$bugatti->seDeplacer(240);
$bugatti->infosDev();
$bugatti->getPicture("bugatti");


// ferrari


$ferrari->infosDev();
$ferrari->getPicture("ferrari");
$ferrari->klaxonner("proutt");

