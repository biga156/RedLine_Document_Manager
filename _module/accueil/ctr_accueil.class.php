<?php
class Ctr_accueil extends Ctr_controleur
{

    public function __construct($action)
    {
        parent::__construct("accueil", $action);
        $a = "a_$action";
        $this->$a();
    }

    public function a_index()
    {
        require $this->gabarit;
    }
    public function a_edit()
    {
        if (isset($_POST["btsubmit"])) {
            extract($_POST);

            $user = new User();
            $user->charger($use_id);

            if ($use_id == 1)
                $_SESSION["use_id"] = 1;
            else if ($uti_id == 2)
                $_SESSION["use_id"] = 2;
            else
                $_SESSION["use_id"] = 3;


            header("location:" . hlien("accueil", "index"));
        } else {
            $use_id = "";
        }

        require $this->gabarit;
    }
}
