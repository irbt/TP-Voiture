<?php

// infodev()

class Voiture
{
    private $marque;
    private $modele;
    private $couleur;
    private $prix;
    private $chevaux;
    private $poids;
    private $reservoir;
    private $picture;




    function __construct($marque, $modele)
    {
        $this->marque = $marque;
        $this->modele = $modele;
      
    }
    function infosDev()
    {
        echo "Class Name : <strong>" . get_class($this) . "</strong><br>";
        echo "<strong>" . count(get_object_vars($this)) . " Propiétés |</strong> ";
        echo "<strong>" . count(get_class_methods($this)) . " Methods |</strong> <hr><br>";


        foreach (get_object_vars($this) as $item => $i) {
            echo "Propriété: <strong>" . $item . "</strong> | Valeur: <strong>" . $i . "</strong><br>";
        }

        foreach (get_class_methods($this) as $item => $i) {
            echo "Méthode: <strong>" . $i . "</strong><br> ";
        }
    }

    function seDeplacer($int)
    {
        echo "Je me déplace à " . $int . "km/h <br> ";
    }


    function klaxonner()
    {
        echo "Klaxon : Ahuuu ! Ahuuu !" . "<br>";
    }


        
        public function setCouleur($couleur)
        {
                $this->couleur = $couleur;

                return $this;
        }

        public function setPrix($int)
        {
                if ($int <=0){
                    $this->prix = "Incohérence de la donnée";
                }else{
                    $this->prix = $int;

                return $this;
                }
        }

        
        
        public function setChevaux($int)
        {
            if ($int <=0){
                $this->chevaux = "Incohérence de la donnée";
            }else{
                $this->chevaux = $int;

            return $this;
            }
            
            
        }
        
        public function setPoids($int)
        {
            if ($int <=0){
                $this->poids = "Incohérence de la donnée";
            }else{
                $this->poids = $int;

            return $this;
            }
            
            
        }

        public function setReservoir($int)
        {
            if ($int <=0){
                $this->reservoir = "Incohérence de la donnée";
            }else{
                $this->reservoir = $int;

            return $this;
            }

        }

        public function setPicture($string)
        {
            $this->picture = $string;
            return $this;
        }


        public function getPicture()
        {
          
            echo '<img width=300px src="'.$this->picture.'" alt="" ><br>';
        }
}





// ----------------Création  de l'entrepot de données ------------------
$pagani = new Voiture("Pagani", "Huayra");
$pagani->setCouleur("noir");
$pagani->setPrix(-340000);
$pagani->setChevaux(765);
$pagani->setPoids(1.5);
$pagani->setReservoir(85);
$pagani->setPicture("./img/pagani.jpg");


// $bugatti = new Voiture("Bugatti", "Chiron", );
// $ferrari = new Voiture("Ferrari", "SF90");

// --------------------------Actions de notre application / Controle sur les objets  ------------------

// Pagani

$pagani->infosDev();
$pagani->getPicture();
$pagani->seDeplacer(240);
$pagani->klaxonner("proutt");

// Bugatti

// $bugatti->seDeplacer(240);
// $bugatti->infosDev();
// $bugatti->getPicture("bugatti");


// ferrari


// $ferrari->infosDev();
// $ferrari->getPicture("ferrari");
// $ferrari->klaxonner("proutt");
