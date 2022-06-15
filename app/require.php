<?php
require_once('database/Connection.php');
// require_once('models/personne.php');
if( basename($_SERVER['REQUEST_URI'])=="produits" || basename($_SERVER['REQUEST_URI'])=="operation"){
require_once('models/produits.php');
// }elseif(basename($_SERVER['REQUEST_URI'])=="professeur"|| basename($_SERVER['REQUEST_URI'])=="operation"){
//     require_once('models/professeur.php');
//     require_once('models/etudiant.php');

// }elseif(basename($_SERVER['REQUEST_URI'])=="etudiants"|| basename($_SERVER['REQUEST_URI'])=="operation"){
//     require_once('models/parent.php');
//     require_once('models/etudiant.php');
// }elseif(basename($_SERVER['REQUEST_URI'])=="Administrateur"|| basename($_SERVER['REQUEST_URI'])=="operation"){
//     require_once('models/Administrateur.php');
}