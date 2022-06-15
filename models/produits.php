<?php
 class produits  extends Dbconnect
 {
   public $id;
   public $image;
   public $nom;
   public $prix;
   public  function getid(){
       return $this->id;
   }
   
   public function getimage(){
       return $this->image;
   }
  
   public function getnom(){
       return $this->nom;
   }
   
   public function getprix(){
       return $this->prix;
   }
   public function getquanti(){
    return $this->quanti;
}
   
   public function setid($id){
       $this->id=$id;
   }
   
   public function setimage($image){
       $this->image=$image;
   }
   
   public function setnom($nom){
       $this->nom=$nom;
   }
   
   public function setprix($prix){
       $this->prix=$prix;
   }
   public function setquanti($quanti){
    $this->quanti=$quanti;
}

 
    public function Ajouter(){
      try{
        $sql=$this->GetData("INSERT INTO produits VALUES (NULL,?,?,?,?)");
        return $sql->execute([$this->image,$this->nom,$this->prix,$this->quanti]);
        $sql->close;
       }catch(PDOException $e){ return $e->getMessage();} 
    }

    public function Afficher()
    {
      try{
    
         return $this->connect()->query("SELECT * FROM  produits ORDER BY id desc")->fetchALL();
        }catch(PDOException $e){ return $e->getMessage();} 
      }
      public function Select($id)
      {
        try{
      
           return $this->connect()->query("SELECT * FROM  produits where id =$id")->fetch();
          }catch(PDOException $e){ return $e->getMessage();} 
        }
    public function Delete(){
      try{ 
        return $sql=$this->GetData("delete from produits where id =?")->execute([$this->id]); 
      }catch(PDOException $e){ return $e->getMessage();} 
    }
    public function Update(){
      try{
    
        $sql=$this->GetData("UPDATE produits SET image=?,nom=?,prix=?,quanti=? where id =? ");
        return $sql->execute([$this->image,$this->nom,$this->prix,$this->quanti,$this->id]);
      $sql->close;
      }catch(PDOException $e){ return $e->getMessage();} 
    }
}





