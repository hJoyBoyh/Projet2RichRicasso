<?php
require_once(__DIR__ . "/../models/UserModel.php");

class LoginController
{
    private $model;
    public function __construct($pdo)
    {
        $this->model = new UserModel($pdo);
    }


    private function verifyUser($email, $password)
    {
        $user = $this->model->getUserByEmail($email);
        if ($user) {
            // au cas ou mes user que jutilise ne son pas hash
            if (password_verify($password, $user['mdp']) || $password === $user['mdp']) {
                $_SESSION['user'] = $user;
                return true;
            }

           echo "mot de passe incorrect";

           return false;
        }
        else{
            echo "Le courriel est n'existe pas";
            return false;
        }
    }
    public function grantAdminAccess($email, $password)
    {
        if ($this->verifyUser($email, $password)) {
            $user = $this->model->getUserByEmail($email);
            if ($user['permission'] === 1) {
                $_SESSION['admin'] = true;
            }
        }
    }
    public function login($email, $password)
    {
        if ($this->verifyUser($email, $password)) {
            $_SESSION['authentifie'] = true;
            $this->grantAdminAccess($email, $password);
        }
    }
}

?>