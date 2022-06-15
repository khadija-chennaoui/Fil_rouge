<?php
class ComptesController
{
    public function addclient()
    {
        if (isset($_POST['newclient'])) {
            $p = new comptes();
            $p->setnom($_POST['nom']);
            $p->settele($_POST['tele']);
            $p->setemail($_POST['email']);
            $p->setadrs($_POST['adrs']);
            $p->setpassword($_POST['password']);
            $p->setpass($_POST['pass']);
            $p->Ajouterclient();
        }
    }
    public function getClient()
    {
        $mode = new comptes();
        return $mode->Afficher();
        header('location:comptes');
    }
    public function connection()
    {
        if (isset($_POST['save'])) {
            if (isset($_POST['emailcon']) && isset($_POST['passcon'])) {
                $mode = new comptes();
                $email = $_POST['emailcon'];
                $pass = $_POST['passcon'];
                $req = $mode->GetData("SELECT * FROM comptes WHERE email LIKE ? AND PasswordC  LIKE ? AND Role_Con LIKE ?");
                $req->execute([$email, $pass,'Client']);
                $req = $req->fetch();
                if ($req) {
                    session_start();
                    $_SESSION['email'] = $email;
    
                    header('location:shop-left-sidebar');
                } else {
                    var_dump($req);
                }


                $sql = $mode->GetData("SELECT * FROM comptes WHERE email LIKE ? AND PasswordC  LIKE ? AND Role_Con LIKE ?");
                $sql->execute([$email, $pass, 'Admin']);
                $sql = $sql->fetch();
                if ($sql) {
                    session_start();
                    $_SESSION['email'] = $email;
                   
                    header('location:dash');
                } else {

                    header('location:comptes');
                }
            }
        }
    }
    public function acheter(){
        session_start();
        if (isset($_POST['acheter'])) {
            
            if (isset($_SESSION['email'])) {
                     $produitcontrol = new ProduitController();
                    $produit = $produitcontrol->select($_POST['product_id']);
                    echo '<pre>';
                    var_dump($produit);
                    echo '</pre>';
                    $message='Nom de produit :'.$produit['nom'].'    Prix total :'.$produit['prix'].'    Email de client :'.$_SESSION['email'];
                    unset($_SESSION['email']);
                    header('location:https://api.whatsapp.com/send?phone=2120623451178&text='.$message); 
               

            }else {
                header('location:comptes');
            }
        }
    }
}
