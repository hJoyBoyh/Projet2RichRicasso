<?php
require_once(__DIR__ . "/../models/UserModel.php");

class LoginController
{
    private $model;
    public function __construct($pdo)
    {
        $this->model = new UserModel($pdo);
    }

    private function getUserByEmail($email)
    {
        return $this->model->getUserByEmail($email);
    }

    private function verifyUser($email, $password)
    {
        $user = $this->model->getUserByEmail($email);
        if ($user) {
            //echo "user exist";
           // print_r($user['mdp']);
            
            //
             
            if (password_verify($password, $user['mdp'])) {
                echo "true";
                $_SESSION['user'] = $user;
               // print_r($_SESSION['user']);
                return true;

            }
            
            // au cas ou mes user que jutilise ne son pas hash
            if ($password === $user['mdp']) {
              $_SESSION['user'] = $user;
                //print_r($_SESSION['user']);
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
            //session_start();
            if ($user['permission'] === 1) {
                $_SESSION['admin']['isAuth'] = true;
                $_SESSION['permission'] = true;
            } //else if ($user['permission'] === 0) {
                //$_SESSION['admin']['isAuth'] = false;
            //}
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