<?php 
  session_start();
  require_once 'authentification.php';
// FONCTION -20%



$voyages = [

    [
        "destination"=> "Canada",
        "prix"=> 3455,
        "duree"=> 19,
        "image"=> "canada.png",
        "personnes"=> 2,
        "transport"=>"avion"

    ],
    [
        "destination"=> "Mexique",
        "prix"=> 2355,
        "duree"=> 25,
        "image"=> "mexique.png",
        "personnes"=> 3,
        "transport"=>"avion"

    ],

    [
        "destination"=> "Cambodge",
        "prix"=> 8451,
        "duree"=> 60,
        "image"=> "cambodge.png",
        "personnes"=> 3,
        "transport"=>"avion"

    ],
    [
        "destination"=> "Japon",
        "prix"=> 7500,
        "duree"=> 65,
        "image"=> "Japon.png",
        "personnes"=> 12,
        "transport"=>"avion"

    ]
  

];








?>
