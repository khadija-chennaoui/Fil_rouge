<?php
 
      $Controller = new ComptesController();
      $Controller->connection();
      $Controller->addclient();
     
      $Controller->acheter();
  
$Controller = new ProduitController();
$Controller->addproduit();
$Controller->deletproduit();
$Controller->updateproduit();
if (isset($_POST['submit'])) {
    $file = $_FILES['image'];
    $fileName = $_FILES['image']['name'];
}
