<?php
require_once(__DIR__ . "/../models/UserModel.php");

class UserController
{
    private $model;
    public function __construct($pdo)
    {
        $this->model = new UserModel($pdo);
    }

    public function getAllUsers()
    {
        return $this->model->getAllUsers();
    }
    public function getUserById($id)
    {
        return $this->model->getUserById($id);
    }
    public function createUser($data)
    {
        // Hasher le mot de passe avant de l'envoyer au modèle
        $data['mdp'] = password_hash(
            $data['mdp'],
            PASSWORD_DEFAULT
        );
        return $this->model->createUser($data);
    }
    public function updateUser($id, $data)
    {
        return $this->model->updateUser($id, $data);
    }
    public function deleteUser($id)
    {
        return $this->model->deleteUser($id);
    }

    public function getUserByEmail($email)
    {
        return $this->model->getUserByEmail($email);
    }

    private function verifyUser($email, $password)
    {
        $user = $this->model->getUserByEmail($email);
        if ($user) {
            echo "user exist";
           print_r($user['mdp']);
            // 
            if (password_verify($password, $user['mdp'])) {
                echo "true";
                return true;

            } else {
                echo "password dont work";
            }
            // au cas ou mes user que jutilise ne son pas hash
            if ($password === $user["mdp"]) {
                return true;
            }

           // echo "false";
            return false;
        }
    }
    public function grantAdminAccess($email, $password)
    {
        if ($this->verifyUser($email, $password)) {
            $user = $this->model->getUserByEmail($email);
            //session_start();
            if ($user['permission'] == 1) {
                $_SESSION['admin']['isAuth'] = true;
                $_SESSION['admin'] = 'admin';
                $_SESSION['role']  = 1;
            } else {
                $_SESSION['admin']['isAuth'] = false;
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