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
        $data['mdp'] = password_hash(
            $data['mdp'],
            PASSWORD_DEFAULT
        );
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


    
  
}

?>