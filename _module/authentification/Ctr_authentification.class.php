<?php

class Ctr_authentification extends Ctr_controleur
{

    public function __construct($action)
    {
        parent::__construct("authentification", $action);
        $a = "a_$action";
        $this->$a();
    }
   
    public function a_connexion()
    {
        if (isset($_POST["btsubmit"])) {
            $user = User::findUserByUsername($_POST['use_username']);
            var_dump($user);
            if (array_key_exists(0, $user) && $user[0]['use_id'] > 0) {
                if(password_verify($_POST["use_passw"],$user[0]['use_passw'])){
              
                $u = new User($user[0]['use_id']);
                if (isset($u->data["use_id"])) {
                    $_SESSION["user"] = $u->data["use_username"];
                    $_SESSION["use_id"] = $u->data["use_id"];
                    $_SESSION["name"] = $u->data["use_nom"];
                    $_SESSION["firstname"] = $u->data["use_prenom"];
                    $_SESSION["profil"] = $u->data["use_profil"];
                    $p = new Profil($_SESSION["profil"]);
                    $_SESSION["profil_name"] = $p->data["pro_nom"];
                    header("location:" . hlien("documents", "index"));
                } else {
                    $message = "Identifiant inconnu";
                    require $this->gabarit;
                }
            } else {
                $message = "Wrong password";
               require $this->gabarit;
            }

            } else {
                $message = "Wrong username";
                require $this->gabarit;
            }
        } else {
            require $this->gabarit;
        } //end of POST

    } //end of function
/************************************************ */
    public function a_deconnexion()
    {
        session_destroy();
        header("location:index.php");
    }
}
