<?php
class ProduitController
{
 
    public function addproduit()
    {
        if (isset($_POST['saveproduit'])) {
            $p = new produits();
            $p->setimage($_POST['image']);
            $p->setnom($_POST['nom']);
            $p->setprix($_POST['prix']);
            $p->setquanti($_POST['quanti']);
            if ($p->Ajouter()) header('location:produits');
        }
    }
    
    public function getProduit()
    {
        $mode = new produits();
        return $mode->Afficher();
    }
  
    public function deletproduit()
    {
        if (isset($_POST['deletproduit'])) {
            $p = new produits();
            $p->setid($_POST['id']);
            if ($p->delete()) header('location:produits');
        }
    }

    public function updateproduit()
    {
        if (isset($_POST['bntupdate'])) {
            $p = new produits();
            $p->setid($_POST['id']);
            $p->setimage($_POST['image']);
            $p->setnom($_POST['nom']);
            $p->setprix($_POST['prix']);
            $p->setquanti($_POST['quanti']);
            if ($p->Update()) header('location:produits');
        }
    }
    public function  select($id)
    {
        $p = new produits();
        return  $p->Select($id);
    }


    
    public function nombreProduit()
    {
        $sql="SELECT * FROM produits";
        $mode=new produits();
        $mode=$mode->GetData($sql);
        $mode->execute();
        $mode=$mode->fetchAll();
        return count($mode);
  

    }

      
    public function quantityProduit()
    {
        $sql="SELECT SUM(quanti) FROM produits";
        $mode=new produits();
        $mode=$mode->GetData($sql);
        $mode->execute();
        $mode= $mode->fetchAll();
        $mode=array_sum(array:$mode[0]);
       return $mode/2;
  

    }
} 
