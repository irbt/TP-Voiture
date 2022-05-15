<?php

// infodev()

class Voiture{
    public $marque;
    public $modele;
    public $couleur;
    public $prix;
    public $chevaux;

    


function __construct()
{
    
}

function seDeplacer(){

}


function klaxonner(){

}
function getPicture($string){
echo '<img src="img/'.$string. '.jpg"alt="image">';
}
function infosDev(){

}

}

$tuture =  new Voiture();
// var_dump ($tuture) ;
$tuture->marque = "pagani";
var_dump ($tuture) ;
$tuture->getPicture("pagani");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP Voiture</title>
</head>
<body>

<h1>TP VOITURE</h1>


    
</body>
</html>