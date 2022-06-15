<?php 

class comptes extends Dbconnect{
public $id;
public $nom;
public $tele;
public $email;
public $adrs;
public $password;
public $pass;

public  function setid($id){
     $this->id=$id;
}

public function setnom($nom){
    $this->nom=$nom;
}

public function settele($tele){
    $this->tele=$tele;
}

public function setemail($email){
     $this->email=$email;
}
public function setadrs($adrs){
    return $this->adrs=$adrs;
}
public function setpassword($password){
    return $this->password=$password;
}
public function setpass($pass){
    return $this->pass=$pass;
}

public function Ajouterclient(){
   
    try{
      $sql=$this->GetData("INSERT INTO `comptes` VALUES (NULL,?,?,?,?,?,?,?) ");
       if($sql->execute([$this->nom, $this->tele ,$this->email ,$this->adrs ,$this->password , $this->pass, 'Client'] ));
        {
            header('location:comptes');
        }
      
    }catch(PDOException $e){ 
        return $e->getMessage()
    ;} 
  }

  public function Afficher()
  {   
    try{
  
       return $this->connect()->query("SELECT * FROM  comptes ORDER BY id desc")->fetchALL();
      }catch(PDOException $e){ return $e->getMessage();} 
    }
   
}
?>